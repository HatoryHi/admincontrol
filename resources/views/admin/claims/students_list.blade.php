@extends('admin.layout.master')
@section('title', 'Список студентов')
@section('parentPageTitle', 'App')
@section('page-style')
    {{--    <link rel="stylesheet" href="{{asset('assets/plugins/footable-bootstrap/css/footable.bootstrap.min.css')}}"/>--}}
    {{--    <link rel="stylesheet" href="{{asset('assets/plugins/footable-bootstrap/css/footable.standalone.min.css')}}"/>--}}
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
@stop
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Exportable</strong> Examples </h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle"
                                                data-toggle="dropdown" role="button" aria-haspopup="true"
                                                aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right slideUp">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Фамилия</th>
                                <th>Имя</th>
                                <th>Группа</th>
                                <th>Номер группы</th>
                                <th>Курс</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Фамилия</th>
                                <th>Имя</th>
                                <th>Группа</th>
                                <th>Номер группы</th>
                                <th>Курс</th>
                                <th>Действие</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($list as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->student_surname}}</td>
                                    <td>{{$item->student_name}}</td>
                                    <td>{{$item->student_group}}</td>
                                    <td>{{$item->sub_group}}</td>
                                    <td>{{$item->student_course}}</td>
                                    <td>
                                        <a href="students_list/{{$item->id}}" class="btn btn-info">Просмотр</a>
{{--                                        <a href="/node/{{$item->id}}/edit" class="btn btn-success">Edit</a>--}}
{{--                                        <a href="/node/{{$item->id}}/destroy" class="btn btn-danger">Dellete</a>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('page-script')
    <script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
@stop
