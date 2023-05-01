<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\AddUser;
class userController extends Controller
{
   public function login(Request $request)
    {
        $username = $request->input('email');
        $password = $request->input('password');

        $data = DB::table('_account')
            ->select('*')
            ->where('Email', '=', $username)
            ->where('Password', '=', $password)
            ->get();

        return response()->json($data);
    }
    public function store(Request $request){
        $user=new AddUser;
        
        $user->Email=$request->input('email');
        $user->Password=$request->input('password');
        $user->save();
        return response()->json([
            'status'=>200,
            'msg'=>'Done'
        ]);
    }
}
