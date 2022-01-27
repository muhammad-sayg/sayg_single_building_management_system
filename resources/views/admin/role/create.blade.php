@extends('layouts.admin.app')
{{-- Page title --}}
@section('title')
Juffair Gable
@stop
{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" href="{{asset('public/admin/assets/bundles/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('public/admin/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
<style>
   
</style>
@stop
@section('content')
<section class="section">
   
    <div class="row">
    <div class="col-12">
        <div class="card">
            <form  action="{{ route('role.store') }}" id="formId"
               method="POST"  class="needs-validation" novalidate="">
                @csrf
                <div class="card-header">
                  <h4>Add Role</h4>
                </div>
                <div class="card-body">
                  <div class="form-group row">
                        <div class="form-group col-md-6">
                          <label for="name">Role Name</label>
                          <input type="text" class="form-control" autocomplete="off" required="" name="name" id="slug-input"
                          value="{{ old('name')}}" 

                          placeholder="Role name">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="price">Slug</label>
                          <input type="text" class="form-control slug-output" readonly autocomplete="off" name="slug" id="slug" required="" 
                           value="{{ old('slug')}}" 
                          placeholder="Role slug">
                        </div>
                </div>

                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary">Add</button>
                  <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
</section>

@stop
@section('footer_scripts')
<!-- JS Libraies -->
<script>
    var slug = function(str) {
    var $slug = '';
    var trimmed = $.trim(str);
    $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
    replace(/-+/g, '-').
    replace(/^-|-$/g, '');
    return $slug.toLowerCase();
}

$( "#slug-input" ).keyup(function() {
    $('#slug').val(slug($('#slug-input').val()));
});

</script>
@stop