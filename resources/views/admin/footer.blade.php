@extends('admin.master')
@section('title')
<div class="header-left">
    <div class="dashboard_bar">
        Footer
    </div>
</div>
@endsection
@section('bread')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Information</a></li>
    </ol>
</div>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Information</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{url('/footer_update')}}" method="post" enctype="multipart/form-data">
                <div class="avatar-upload" style="max-width: 300px">
                    <div class="avatar-edit" style="right: -17px;top: -17px;">
                        <input type='file' name="image" id="imageUpload" accept=".png, .jpg, .jpeg" onchange="first(this);"/>
                        <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview" style="width: 300px; border-radius: 0">
                        <div id="imagePreview" style="border-radius: 0 ;background-size: contain; background-image: url('{{url('/')}}/{{$data->logo}}');">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Number</label>
                    <input type="text" name="number" class="form-control input-default " value="{{$data->number}}" placeholder="Number">
                </div>
                @csrf
                <div class="form-group">
                    <label>Whatsapp Number</label>
                    <input type="text" class="form-control input-rounded" name="whatsapp" value="{{$data->whatsapp}}" placeholder="Whatsapp Number">
                </div>
                
                <div class="form-group">
                    <label>Location (Google Map Link)</label>
                    <input type="text" class="form-control input-rounded" name="location" value="{{$data->location}}" placeholder="Location Link">
                </div>

                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('JS')
@if(session('update'))
<script>
    $(document).ready(function(){
        toastr.success("Updated Successfully")
    });
</script>
@endif
@endsection