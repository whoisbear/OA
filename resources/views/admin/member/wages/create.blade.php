@extends('admin.base')

@section('content')
    <div class="layui-card">
        <div class="layui-card-header layuiadmin-card-header-auto">
            <h2>添加模板</h2>
        </div>
        <div class="layui-card-body">
            <form class="layui-form" action="{{route('admin.wages.add_template')}}" method="post">
                @include('admin.member.wages._form')
            </form>
        </div>
    </div>
@endsection
@section('script')
    @include('admin.member.wages._js')
@endsection
