@extends('admin.layout.master')
@section('title', 'Контакты студентов')
@section('parentPageTitle', 'App')
@section('page-style')
    <link rel="stylesheet" href="{{asset('assets/plugins/footable-bootstrap/css/footable.bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/plugins/footable-bootstrap/css/footable.standalone.min.css')}}"/>
@stop
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="table-responsive contact">
                    <table class="table table-hover mb-0 c_list c_table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Имя</th>
                            <th>Фамилия</th>
                            <th>Телефон</th>
                            <th data-breakpoints="xs">Группа</th>
                            <th data-breakpoints="xs">Подгруппа</th>
                            <th data-breakpoints="xs">Курс</th>
                            <th data-breakpoints="xs sm md">Email</th>
                            <th data-breakpoints="xs sm md">Address</th>
                            <th data-breakpoints="xs">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="delete_2" type="checkbox">
                                        <label for="delete_2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <p class="c_name">{{$item->student_surname}}</p>
                                </td>
                                <td>
                                    <span class="sur_name"> {{$item->student_name}}</span>
                                </td>
                                <td>
                                    <span class="phone"><i class="zmdi zmdi-whatsapp mr-2"></i> {{$item->student_phone_number}}</span>
                                </td>
                                <td>
                                    <span class="group"> {{$item->student_group}}</span>
                                </td>
                                <td>
                                    <span class="group"> {{$item->sub_group}}</span>
                                </td>
                                <td>
                                    <span class="group"> {{$item->student_course}}</span>
                                </td>
                                <td>
                                    <span class="email"><a href="javascript:void(0);"
                                                           title="">johnsmith@gmail.com</a></span>
                                </td>
                                <td>
                                    <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@section('page-script')
    <script src="{{asset('assets/bundles/footable.bundle.js')}}"></script>
    <script src="{{asset('assets/js/pages/tables/footable.js')}}"></script>
@stop
