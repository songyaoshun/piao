@extends('layout.user)

@section('content')

<body>
    <!--面包屑导航 开始-->
<div class="crumb_warp">
    <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 登录
</div>
<!--面包屑导航 结束-->

<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>登 录</h3>
    </div>
</div>
<!--结果集标题与导航组件 结束-->

    <div class="login_box">
        <h1>Piao</h1>
        <h2>欢迎使用票据平台</h2>
        <div class="form">
            <p style="color:red">用户名错误</p>
            <form action="#" method="post">
                <ul>
                    <li>
                        <input type="text" name="user_mobile" class="text"/>
                        <span><i class="fa fa-user"></i></span>
                    </li>
                    <li>
                        <input type="password" name="user_pw" class="text"/>
                        <span><i class="fa fa-lock"></i></span>
                    </li>
                    <li>
                        <input type="text" class="code" name="code"/>
                        <span><i class="fa fa-check-square-o"></i></span>
                        <img src="#" alt="">
                    </li>
                    <li>
                        <input type="submit" value="立即登陆"/>
                    </li>
                </ul>
            </form>
            <p><a href="#">返回首页</a></p>
        </div>
    </div>
</body>

@endsection
