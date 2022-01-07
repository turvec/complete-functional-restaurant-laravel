@extends('layouts.admin')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <p class="mb-0">Your business dashboard template</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Food</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">All Foods</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm mb-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th class=" pl-5" style="min-width: 200px;">Description
                                            </th>
                                            <th>Uploaded at</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="customers">
                                        @foreach ($foods as $food)
                                        <tr class="btn-reveal-trigger">
                                            <td class="py-3">
                                                <a href="#">
                                                    <div class="media d-flex align-items-center">
                                                        <div class="avatar avatar-xl mr-2">
                                                            <div class=""><img class="rounded-circle img-fluid"
                                                            src="/foodimage/{{$food->image}}" width="30" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="mb-0 fs--1">{{$food->title}}</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="py-2"><a>{{$food->price}}</a>
                                            </td>
                                            <td class="py-2"> <a>{{$food->category_id}}</a></td>
                                            <td class="py-2 pl-5">{{$food->description}}</td>
                                            <td class="py-2">{{$food->created_at->format('d/m/Y')}}</td>
                                            <td class="py-2 text-right">
                                                    <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp" type="button" data-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                                            <div class="py-2"><a class="dropdown-item"  href="#!">Edit</a>
                                                                href="{{route('deletefood',$food->id)}}">Delete</a></div>
                                                        </div>
                                                    </div>
                                            </td>
                            </tr>
                            <!-- Edit modal -->
                            <div class="modal fade" id="addContactModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit User</h5>
                                            <button type="button" class="close"
                                                data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{route('edituser')}}">@csrf
                                                <div class="form-group">
                                                    <label class="text-black font-w500">Name</label>
                                                    <input value="{{$food->name}}" name="name" type="text"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-black font-w500">Email</label>
                                                    <input value="{{$food->email}}" name="email" type="email"
                                                        class="form-control">
                                                    <input value="{{$food->id}}" name="id" type="hidden"
                                                        class="form-control">

                                                </div>
                                                {{-- <div class="form-group">
                    <label
                    class="text-black font-w500">Password</label>
                    <input value="{{$user->password}}" name="password" type="text" class="form-control">
                                        </div> --}}
                                        <div class="form-group">
                                            <button class="btn btn-primary">SAVE</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
//
