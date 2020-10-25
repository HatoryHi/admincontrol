@extends('admin.layout.master')
@section('title', 'Заявки студентов')
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
                            <th data-breakpoints="xs sm md">Назначение справки</th>
                            <th data-breakpoints="xs">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)

                            <tr>

                                <td>
                                    <p class="id">{{$item->id}}</p>
                                </td>
                                <td>
                                    <p class="c_name">{{$item->st_name}}</p>
                                </td>
                                <td>
                                    <span class="sur_name"> {{$item->st_surname}}</span>
                                </td>
                                <td>
                                    <span class="phone"><i class="zmdi zmdi-whatsapp mr-2"></i> {{$item->student_phone_number}}</span>
                                </td>
                                <td>
                                    <span class="group"> {{$item->sub_group}}</span>
                                </td>
                                <td>
                                    <span class="group"> {{$item->sp_group}}</span>
                                </td>
                                <td>
                                    <span class="group"> {{$item->st_course}}</span>
                                </td>
                                <td>
                                    <span class="email"><a href="javascript:void(0);"
                                                           title="">johnsmith@gmail.com</a></span>
                                </td>
                                <td>
                                    <p class="c_name">Справка для : {{$item->text_claim}}</p>
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
