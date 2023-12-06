<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgetPasswordManager extends Controller
{
    function forgetPassword(){
        return view (view:"forget-password");
    }

    function forgetPasswordPost(Request $request){
        $request->validate([
            'email'=>"required|email|exists:users",
        ]);

        $token=Str::random(length:64);

        DB::table(table:'password_resets')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now()
        ]);

        

Mail::send('emails.forget-password', ['token' => $token], function ($message) use ($request) {
    $message->to($request->email);
    $message->subject("Reset Password");
});


        return redirect()->to(route(name:"forgot.password"))
        ->with("success","we havesend an email to reset password.");
    }

    function resetPassword($token){
        return view(view:"new-password",compact(var_name:'token'));

    }

    function resetPasswordPost(Request $request){
        $request->validate([
            "email"=>"required|email|exists:users",
            "password"=>"required|string|min"
        ])
    }
}
