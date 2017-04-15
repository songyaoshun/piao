<?php

namespace App\Http\Controllers\User;



use App\Http\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

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
                'user_mobile'=>'required|between:10,12',
                'user_pw'=>'required|between:6,20|confirmed',
                'code'=>'required',
                'm_code'=>'required',
            ];
            $message=[
                'user_mobile.required'=>'手机号不能为空！',
                'user_mobile.between'=>'手机号需要11位！',

                'password.required'=>'密码不能为空！',
                'password.between'=>'密码必须是6到20位之间！',
                'password.confirmed'=>'两次密码不一致！',

                'code.required'=>'图片验证码不能为空！',

                'm_code.required'=>'手机验证码不能为空！',
            ];

            $validator=Validator::make($input,$rules,$message);
            dd($validator->passes());
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
