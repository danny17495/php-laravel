<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function listAction()
    {
        // dd(env('DB_DATABASE'));
        
        $users = User::all();

        //dd debug;
        //dd($users);

        //item.length
        return response()->json([
            'status' => 1,
            'message' => 'retrieve user data successfully.',
            'results' => $users,
        ], 200, [], 128 | 256);

    }

    //根據ＩＤ 回傳指定使用者
    public function showAction($id)
    {
        //dd debug用到這停止把資料倒出來;

        //dd($id);
        // 欄位值 , 條件 ,值
        $users = User::where('id', '=', $id)->get();

        //dd($users);


        //item.length
        return response()->json([
            'status' => 1,
            'message' => 'retrieve user data successfully.',
            'results' => $users,
        ], 200, [], 128 | 256);

    }
    
}