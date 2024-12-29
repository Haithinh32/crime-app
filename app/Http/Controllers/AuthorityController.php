<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AuthorityController extends Controller
{
    public function changeUserType(Request $request)
    {
        $userId = $request->user_id;
        $type = $request->user_type;

        $user = \App\Models\User::find($userId);
        if ($user) {
            DB::table('users')
                ->where('id', $userId)
                ->update(['usertype' => $type]);

             return redirect()->route('index_admin');
        }
        else {
            return response()->json(['error' => 'User not found'], 404);
        }
    }

    public function index_admin()
    {
        $AdminlistUser = DB::table('users')
                            ->orderBy('id')
                            ->get();
        return view('AuthorizeAdmin', ['listuser' => $AdminlistUser]);
    }
}
