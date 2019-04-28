{{csrf_field()}}
<div class="layui-form-item">
    <label for="" class="layui-form-label">模板名称</label>
    <div class="layui-input-inline">
        <input type="text" name="name" value="{{ $wages->name ?? old('name') }}" lay-verify="required" placeholder="请输入模板名称" class="layui-input" >
    </div>
</div>

<div class="layui-form-item">
    <label for="" class="layui-form-label">模板内容</label>
    <div class="layui-input-inline">
        <textarea name="content" placeholder="请输入模板内容" style="width:600px;height:300px;" class="layui-textarea"></textarea>
        <p>示例</p>
    </div>
</div>
<div class="layui-form-item">
    <div class="layui-input-block">
        <button type="submit" class="layui-btn" lay-submit="" lay-filter="formDemo">确 认</button>
        <a  class="layui-btn" href="{{route('admin.member')}}" >返 回</a>
    </div>
</div>