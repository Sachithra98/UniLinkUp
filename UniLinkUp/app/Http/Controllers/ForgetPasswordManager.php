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
        return view('new-password', compact('var_name'));

    }

    function resetPasswordPost(Request $request){
        $request->validate([
            "email"=>"required|email|exists:users",
            "password"=>"required|string|min:6|confirmed",
            "password_confirmation"=>"required"
        ]);

        $updatePassword=DB::table(table:'password_resets')
            ->where([
                "email"=>$request->email,
                "token"=>$request->token

            ])->first();

        if(!$updatePassword){
            return redirect()->to(route(name:"reset.password"))->with("error","Invalid");
        }

        User::where("email",$request->email)
            ->update(["password"=>Hash::make($request->password)]);

        DB::table(table:"password_reset")->where(["email"=>$request->email])->delete();

        return redirect()->to(route(name:"login"))->with("success","password reset success" );


    }
}
