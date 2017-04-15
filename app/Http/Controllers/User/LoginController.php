<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;

require_once '/data1/www/piao/resources/org/code/Code.class.php';

class LoginController extends CommonController
{
    public function login()
    {
        if($input=Input::all()){

            $code=new \Code;
            $_code=$code->get();

            if(strtoupper($input['code'])!=$_code){

                return back()->with('msg','验证码错误');
            }

            $user = User::first();

            if($user->user_name != $input['user_name'] || Crypt::decrypt($user->user_passwd)!=$input['user_passwd']){

                return back()->with('msg','用户名或者密码错误！');
            }

            session(['user'=>$user]);
            return redirect('admin/index');

        }else {

            return view('login');
        }
    }

    public function register()
    {
        if ($input=Input::all()){

            $rules=[
                'password'=>'required|between:6,20|confirmed',
            ];
            $message=[
                'password.required'=>'新密码不能为空！',
                'password.between'=>'新密码必须是6到20位之间！',
                'password.confirmed'=>'新旧密码不一致！',
            ];

            $validator=Validator::make($input,$rules,$message);

            if($validator->passes()){
                $user = User::first();
                $_password=Crypt::decrypt($user->user_passwd);
                if ($input['password_o']==$_password){
                    $user->user_passwd = Crypt::encrypt($input['password']);
                    $user->update();
                    return back()->with('errors','密码修改成功');
                }else{
                    return back()->with('errors','原密码错误');
                }

            }else{
                return back()->withErrors($validator);
            }

        }else {
            return view('register');
        }
    }

    public function code()
    {
        $code = new \Code;
        $code->make();
    }

    public function quit()
    {
        session(['user'=>null]);
        return redirect('user/login');
    }
}
