<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;
use function MongoDB\BSON\toJSON;

class UserController extends Controller
{
    public function apiLogin(Request $request){
        if(isset($request->_token)){
            $data = User::where("email",'=',$request->email)->first();
            if(isset($data->email)){
                if(Hash::check($request->password,$data->password )){
                    return $data;
                }else{
                    return ['error'=>'Sai mật khẩu'];
                }
            }else{
                return ['error'=>'Email đăng nhập không tồn tại'];
            }
        }else{
            return ['error'=>'Không có token'];
        }
    }
}
