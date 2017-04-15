@extends('layout.user')

@section('content')

    <body>
    <!--面包屑导航 开始-->
<div class="crumb_warp">
    <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 注册
</div>
<!--面包屑导航 结束-->

<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>注 册</h3>
    </div>
</div>
<!--结果集标题与导航组件 结束-->

<div class="result_wrap">
    <form method="post" onsubmit="return changePass()">
        <input type="hidden" name="_token" value="X25wGVjFqDXvq7vAUAJTjTAHfX0RhkGufucRdzGh">

        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120"><i class="require">*</i>手机号：</th>
                <td>
                    <input type="text" name="user_mobile" /> <span>请输入注册手机号</span>
                </td>
            </tr>

            <tr>
                <th width="120"><i class="require">*</i>设置密码：</th>
                <td>
                    <input type="password" name="user_pw" /> <span>密码6-20位</span>
                </td>
            </tr>

            <tr>
                <th width="120"><i class="require">*</i>确认密码：</th>
                <td>
                    <input type="password" name="user_pw_confirmation"/> <span>再次输入密码</span>
                </td>
            </tr>

            <tr>
                <th width="120"><i class="require">*</i>图形验证码：</th>
                <td>

                    <input type="text" class="code" name="code"/>
                    <span><img src="{{url('user/code')}}" alt="" onclick="this.src='{{url('user/code')}}?' +Math.random()"></span>
                </td>

            </tr>

            <tr>
                <th><i class="require">*</i>手机验证码：</th>
                <td>
                    <input type="text" name="m_code"/>
                    <span><input type="button" class="back" onclick="" value="获取验证码"></span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>邀请码：</th>
                <td>
                    <input type="text" name="user_pid"/> <span>请输入邀请码</span>
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