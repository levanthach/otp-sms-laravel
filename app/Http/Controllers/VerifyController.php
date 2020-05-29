<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class VerifyController extends Controller
{
    public function getVerify(){
    	return view('verify');
    }

    public function postVerify(Request $request){
    	if($user = User::where('code', $request->code)->first())
    	{
    		$user->active = 1;
    		$user->code = null;
    		$user->save();
    		return redirect()->route('login')->withMessage('Tài khoản đã được xác thực');
    	}

    	else {
    		return back()->withMessage('Mã xác thực chưa chính xác. Vui lòng thử lại!');
    	}
    }
}
