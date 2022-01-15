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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Reservation</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">All Reservations</a></li>
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Table</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Booked At</th>
                                            <th class=" pl-5" style="min-width: 200px;">Comment
                                            </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="customers">
                                        @foreach ($reserves as $reserve)
                                        <tr class="btn-reveal-trigger">
                                            <td class="py-3">
                                                <a href="#">
                                                    <div class="media d-flex align-items-center">
                                                        <div class="avatar avatar-xl mr-2">
                                                            <div class=""><img class="rounded-circle img-fluid"
                                                            src="" width="30" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="mb-0 fs--1">{{$reserve->name}}</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="py-2"><a>{{$reserve->email}}</a>
                                            </td>
                                            <td class="py-2"> <a>{{$reserve->phone}}</a></td>
                                            <td class="py-2"> <a>{{$reserve->table}}</a></td>
                                            <td class="py-2"> <a>{{$reserve->date}}</a></td>
                                            <td class="py-2"> <a>{{$reserve->time}}</a></td>
                                            <td class="py-2">{{$reserve->created_at->format('d/m/Y')}}</td>
                                            <td class="py-2 pl-5">{{$reserve->comment}}</td>
                                            <td class="py-2 text-right">
                                                    <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp" type="button" data-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                                            <div class="py-2">
                                                                    <a class="dropdown-item" href="">cancel</a>
                                                                <a class="dropdown-item text-danger" href="{{route('delete-Reservation',$reserve->id)}}">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </td>
                            </tr>
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
