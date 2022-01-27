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
            <form  action="{{ route('module.update', $module->id) }}" id="formId"
               method="POST"  class="needs-validation" novalidate="">
                @csrf
                <div class="card-header">
                  <h4>Edit Module</h4>
                </div>
                <div class="card-body">
                  <div class="form-group row">
                        <div class="form-group col-md-6">
                          <label for="name">Module Name</label>
                          <input type="text" class="form-control" value="{{ isset($module)? $module->name : '' }}" autocomplete="off" required="" name="name" id="slug-input"
                          value="{{ old('name')}}" 

                          placeholder="Module name">
                        </div>
                </div>

                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary">Update</button>
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

@stop