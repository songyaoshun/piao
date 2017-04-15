@extends('layout.user')

@section('content')

    <body>
    <!--面包屑导航 开始-->
<div class="crumb_warp">
    <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">个人中心</a> &raquo; 持票企业认证
</div>
<!--面包屑导航 结束-->

<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>持票企业认证</h3>
    </div>
</div>
<!--结果集标题与导航组件 结束-->

<div class="result_wrap">
    <form method="post" onsubmit="return changePass()">
        <input type="hidden" name="_token" value="X25wGVjFqDXvq7vAUAJTjTAHfX0RhkGufucRdzGh">

        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120"><i class="require">*</i>姓 名：</th>
                <td>
                    <input type="text" name="user_mobile" /> <span>请输入您的名字</span>
                </td>
            </tr>

            <tr>
                <th width="120"><i class="require">*</i>企业名称：</th>
                <td>
                    <input type="password" name="user_pw" /> <span>请输入您的企业名称</span>
                </td>
            </tr>

            <tr>
                <th width="120"><i class="require">*</i>企业地址：</th>
                <td>
                    <input type="password" name="user_pw_confirmation"/> <span>请输入您的企业地址</span>
                </td>
            </tr>

            <tr>
                <th><i class="require">*</i>联系方式：</th>
                <td>
                    <input type="text" name="user_pid"/> <span>请输入您的联系方式</span>
                </td>
            </tr>

            <tr>
                <th>营业执照号码：</th>
                <td>
                    <input type="text" name="user_pid"/> <span>请输入您的营业执照号码</span>
                </td>
            </tr>

            <tr>
                <th></th>
                <td>
                    <input type="submit" value="提交">
                    <input type="button" class="back" onclick="history.go(-1)" value="返回">
                </td>
            </tr>
            </tbody>
        </table>

    </form>
</div>
</body>

@endsection