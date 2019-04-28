@extends('admin.base')

@section('content')
    <div class="layui-card">
        <div class="layui-card-header layuiadmin-card-header-auto">
            <h2>编辑模板</h2>
        </div>
        <div class="layui-card-body">
            <form class="layui-form" action="{{route('admin.member.wages.update')}}" method="post">
                <input type="hidden" name="id" value="{{$template->id}}">
                {{method_field('post')}}
                @include('admin.member.wages._form')
            </form>
        </div>
    </div>
@endsection

@section('script')
    @include('admin.member.wages._js')
@endsection
