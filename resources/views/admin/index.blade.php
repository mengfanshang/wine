@extends('admin.layouts.admin')

@section('admin-content')
    <div id="content" class="content">
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">首页</a></li>
            <li><a href="javascript:;">面包屑</a></li>
            <li class="active">面包屑</li>
        </ol>
        <h1 class="page-header">河北山佳环保科技管理后台 <small></small></h1>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">管理后台首页</h4>
                    </div>
                    <div class="panel-body">
                        欢迎登陆管理后台
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection