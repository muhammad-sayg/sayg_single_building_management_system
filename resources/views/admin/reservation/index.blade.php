@extends('layouts.admin.app')
{{-- Page title --}}

{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" href="{{ asset('public/admin/assets/') }}/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="{{ asset('public/admin/assets/') }}/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<style>
   tr:hover {
    background: #a3a3a3 !important;
    cursor: pointer;
   }
</style>
@stop
@section('content')
<section class="section">
  
     <div class="row">
      <div class="col-12">
        <a href="{{ route('reservation.create') }}" type="button"  class="btn btn-primary float-right mb-4" style="padding:7px 35px;">Add Reservation</a></a>
      </div>
     
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                <form action="{{ route('reservation.search_reservation') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="">Tenant Name</label>
                            <input type="text" value="{{ isset($tenant_name)? $tenant_name : '' }}" name="tanent_name" class="form-control">
                        </div>
                            
                        <div class="form-group col-md-1" style="margin-top: 1.90rem !important;">
                            <button type="submit" value="filter" class="btn btn-primary">Filter</button>
                        </div>
                    
                </form>
                <div class="form-group col-md-2" style="margin-top: 1.90rem !important;">
                <a href="{{ route('reservation.list') }}" class="btn btn-primary">Reset</a>
                </div>
              </div>
          </div>
          </div>
        <div class="card">
          <div class="card-header">
           <h4>Reservation Details</h4>
            <div class="card-header-form">
             
            </div>
          </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table id="tableExport1" class="table table-responsive display nowrap"  width="100%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Reservation ID</th>
                      <th>Tenant Name</th>
                      <th>Contact Number</th>
                      <th>Facility</th>
                      <th>Reservation Date</th>
                      <th>Start Time</th>
                      <th>End Time</th>
                      <th>Amount</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($reservation as $key => $reservation)
                    <tr>
                        <td onclick="getReservationDetails({{ $reservation->id }})">{{ $key+1 }}</td>
                        <td onclick="getReservationDetails({{ $reservation->id }})">{{ $reservation->reservation_id}}</td>
                        <td onclick="getReservationDetails({{ $reservation->id }})">{{ $reservation->tenant_name}}</td>
                        <td onclick="getReservationDetails({{ $reservation->id }})">{{ $reservation->contact_number}}</td>
                        <td onclick="getReservationDetails({{ $reservation->id }})">{{ isset($reservation->facility) ? $reservation->facility->name : '' }}</td>
                        <td onclick="getReservationDetails({{ $reservation->id }})">{{ \Carbon\Carbon::parse($reservation->reservation_date)->toFormattedDateString() }}</td>
                        <td onclick="getReservationDetails({{ $reservation->id }})">{{ \Carbon\Carbon::parse($reservation->start_time)->format('g:i A')}}</td>
                        <td onclick="getReservationDetails({{ $reservation->id }})">{{ \Carbon\Carbon::parse($reservation->end_time)->format('g:i A')}}</td>
                        <td onclick="getReservationDetails({{ $reservation->id }})">{{ (int)$reservation->amount}} BD</td>
                        <td>
                          <div class="dropdown">
                            <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" aria-expanded="false">Action</a>
                            <div class="dropdown-menu" style="will-change: transform;">
                              <a href="#" onclick="getReservationDetails({{ $reservation->id }})" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                              @if(\Auth::user()->userType != 'receptionist')
                              <a href="{{ route('reservation.edit', $reservation->id) }}" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                              <div class="dropdown-divider"></div>
                              @if(\Auth::user()->userType == 'Admin')
                              <a href="#" onclick="form_alert('reservation-{{ $reservation->id }}','Want to delete this reservation')" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i>
                                Delete</a>
                                @endif
                                @endif
                            </div>
                          </div>
                          <form action="{{ route('reservation.delete', $reservation->id) }}"
                            method="post" id="reservation-{{ $reservation->id }}">
                            @csrf @method('delete')
                          </form> 
                          
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- visitor modal --}}
<div class="modal" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="formModal"  aria-modal="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModal">View</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="card-body">
        <form class="table-responsive">
          <table id="mainTable" class="table table-striped">
            <tbody>
              @include('admin.reservation.partials.reservationdetails_view_modal') 
            </tbody>
          </table>
      </div>
    </div>
  </div>
</div>
@stop
@section('footer_scripts')
<script src="{{ asset('public/admin/assets/') }}/bundles/datatables/datatables.min.js"></script>
<script src="{{ asset('public/admin/assets/') }}/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('public/admin/assets/') }}/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="{{ asset('public/admin/assets/') }}/js/page/datatables.js"></script>
<script>
  function getReservationDetails(id) {
    $.get({
        url: '{{route('reservation.show', '')}}' + "/"+ id,
        dataType: 'json',
        success: function (data) {
            console.log(data)
            $("#reservationModal tbody").html(data.html_response)
            $("#reservationModal").modal("show")
        }
    });
  }

  $('#tableExport1').DataTable({
    dom: 'lBfrtip',
    "ordering": true,
    buttons: [
        {
            extend: 'excel',
            text: 'Excel',
            className: 'btn btn-default',
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7]
            },
            filename: function(){
                return 'reservations_list';
            },
        },
        {
            extend: 'csv',
            text: 'Csv',
            className: 'btn btn-secondary',
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7]
            },
            filename: function(){
                return 'reservations_list';
            },
        },
        {
            extend: 'pdf',
            text: 'Pdf',
            title : function() {
                    return "Reservation Detail";
            },
            className: 'btn btn-default',
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7]
            },
            filename: function(){
                return 'reservations_list';
            },
        },
        {
            extend: 'print',
            text: 'Print',
            title : function() {
                    return "Reservation Detail";
            },
            className: 'btn btn-default',
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7]
            },
            filename: function(){
                return 'reservations_list';
            },
        },
    ],
    "lengthMenu": [10,25,50,100],
    
    });
</script>
@stop