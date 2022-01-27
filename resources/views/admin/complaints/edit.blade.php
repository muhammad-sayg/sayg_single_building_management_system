@php
    $user_type = \Auth::user()->userType;
@endphp
@extends('layouts.admin.app')
{{-- Page title --}}
{{-- @section('title')
    AMS - Complaints List 
@stop --}}
{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" href="{{asset('public/admin/assets/bundles/bootstrap-daterangepicker/daterangepicker.css') }}">
<style>
   
</style>
@stop
@section('content')

    <section class="section">
        {{-- <ul class="breadcrumb breadcrumb-style ">
          <li class="breadcrumb-item">
            <h4 class="page-title m-b-0">Complaints Create</h4>
          </li>
          <li class="breadcrumb-item">
            <a href="file:///F:/AMS/ownerlist.html">
              <i class="fas fa-home"></i></a>
          </li>
          
        </ul> --}}
        <div class="section-body">
            <form method="POST" action="{{ isset($complaint) ? route('complains.update', $complaint->id) : '' }}" enctype="multipart/form-data" autocomplete="off">
                @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                <h4>Edit Complaint</h4>
                                </div>
                             <div class="card-body">
                                <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Title</label>
                                    <input type="text" maxlength="80" value="{{ isset($complaint->complain_title)? $complaint->complain_title : '' }}" name="complaint_title" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Complaint Date</label>
                                    <input type="text" value="{{ isset($complaint->complain_date)? \Carbon\Carbon::parse($complaint->complain_date)->format('Y-m-d') : '' }}" name="complaint_date" class="form-control datepicker">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="">Floor Type</label>
                                    <select class="form-control" name="floor_type_code" onchange="getFloors(this.value)" id="floor_type_code">
                                      @foreach ($floor_types as $floor_type)
                                          <option value="{{ $floor_type->floor_type_code }}" {{(isset($complaint) && ($complaint->unit->floor->floor_type_code == $floor_type->floor_type_code)) ? 'selected': '' }}>{{ $floor_type->floor_type_name }}</option>
                                      @endforeach
                                    </select>
                                </div>
                      
                                <div class="form-group col-md-4">
                                    <label for="">Select Floor</label>
                                    <select class="form-control" name="floor_id" onchange="getUnits(this.value)" id="floorSelect">
                                       @foreach ($floors as $floor)
                                          <option value="{{ $floor->id }}" {{ (isset($complaint) && ($complaint->floor_id == $floor->id)) ? 'selected' :'' }}>{{ $floor->number}}</option>
                                       @endforeach
                                    </select>
                
                                </div>
                                <div class="form-group col-md-4" >
                                    <label>Unit</label>
                                    <select class="form-control" name="unit_id" id="unitSelect">
                                       @foreach ($units as $unit)
                                          <option value="{{ $unit->id }}" {{ (isset($complaint) && ($complaint->unit_id == $unit->id)) ? 'selected' :'' }}>{{ $unit->unit_number}}</option>
                                       @endforeach
                                    </select>
                                </div>
                                @if($user_type == 'general-manager' || $user_type == 'Admin')
                                <div class="form-group col-md-4">
                                    <label>Status</label>
                                    <select class="form-control" name="complain_status_code">
                                        @foreach ($complainStatus as $complainStatus)
                                        <option value="{{ $complainStatus->complain_status_code }}" {{ (isset($complaint) && ($complaint->complain_status_code == $complainStatus->complain_status_code)) ? 'selected' :'' }}>{{ $complainStatus->complain_status_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endif
                                <div class="form-group col-md-12">
                                    <label>Descripton</label>
                                    <textarea name="complaint_description" class="form-control">{{ isset($complaint->complain_description) ? $complaint->complain_description : ''}}</textarea>
                                </div>
                                @if($user_type == 'general-manager' || $user_type == 'Admin')
                                <div class="form-group col-md-4">
                                    <label>Assigned To</label>
                                    <select class="form-control" name="assignee_id">
                                        <option value="0">---Select---</option>
                                        @foreach ($employees as $employe)
                                        <option value="{{ $employe->id }}" {{ (isset($complaint) && ($complaint->assignee_id ==  $employe->id)) ? 'selected' :'' }}>{{ $employe->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endif
                        </div>
                        <button  class="btn btn-primary mr-1" type="submit">save</a>
                  
                    </div>
                </form>
                </div>
        </div>
    </section>
    


@stop
@section('footer_scripts')
<script src="{{asset('public/admin/assets/bundles/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script>
    function getFloors(id) {
        $.get({
            url: '{{route('floor_type.fetch_all_units_and_floors_list', '')}}' + "/"+ id,
            dataType: 'json',
            success: function (data) {
                console.log(data.options)
                $('#floorSelect').empty().append(data.options)
                $('#unitSelect').empty().append(data.options1)
               }
        });
    }
    function getUnits(id) {
       
        $.get({
            url: '{{route('floor_type.fetch_all_units','')}}' + "/"+ id,
            dataType: 'json',
            success: function (data) {
                console.log(data.options)
                $('#unitSelect').empty().append(data.options)
               }
        });
    }
</script>

@stop