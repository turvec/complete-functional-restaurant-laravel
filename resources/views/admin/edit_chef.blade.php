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
                <li class="breadcrumb-item"><a href="{{route('all_chefs')}}">Chef</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Group</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                        <form action="{{route('update_chef',$chef->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-4 input-primary">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Chef Name</span>
                                    </div>
                                <input name="name" type="text" class="form-control" value="{{$chef->name}}" >                             </div>
                                <div class="input-group mb-4 input-primary">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Chef Email</span>
                                    </div>
                                    <input name="email" type="email" value="{{$chef->email}}" class="form-control" >

                                </div>
                                <div class="input-group mb-4 input-primary">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Chef Phone</span>
                                    </div>
                                    <input name="phone" type="num" value="{{$chef->phone}}" class="form-control" >

                                </div>
                                <div class="input-group mb-4 input-primary">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Chef Image</span>
                                    </div>
                                    <input name="image" value="{{$chef->image}}" type="file" class="form-control" >                              </div>
                                <div class="input-group mb-4 input-primary">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Add Profession ?</span>
                                    </div>
                                    <input name="profession" value="{{$chef->profession}}" type="text" class="form-control" >

                                </div>
                                <div class="input-group mb-4 input-primary">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Comment</span>
                                    </div>
                                    <textarea name="comment" class="form-control">{{$chef->comment}}</textarea>

                                </div>

                                <div class="input-group mt-5">
                                    <button class="btn btn-rounded btn-primary">
                                        <span class="btn-icon-left text-primary">
                                            <i class="fa fa-upload color-primary"></i>
                                        </span>
                                        Update
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
