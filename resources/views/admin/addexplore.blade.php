@extends('layouts.admin')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span>Element</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Explore</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Upload</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Image</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{route('upload_explore')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload Image</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend ">
                                        <label class="input-group-text bg-primary text-white">Choose Category</label>
                                    </div>
                                    <div class="dropdown bootstrap-select default-select dropup">
                                        <select name="filter_by" class="default-select" tabindex="-98">
                                            <option selected="">Category</option>
                                            <option value="meals">Meals</option>
                                            <option value="restuarant_view">Restuarant View</option>
                                            <option value="events">Events</option>
                                            <option value="trending">Trending</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-group mt-5">
                                    <button class="btn btn-rounded btn-primary">
                                        <span class="btn-icon-left text-primary">
                                            <i class="fa fa-upload color-primary"></i>
                                        </span>
                                        Upload
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
//
