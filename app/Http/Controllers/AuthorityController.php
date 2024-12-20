<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AuthorityController extends Controller
{
    public function changeUserType(Request $request, $userId)
    {
        $newUserType = $request->input('user_type');

        if (!in_array($newUserType, ['admin', 'user'])) {
            return response()->json(['error' => 'Invalid user type'], 400);
        }

        $user = \App\Models\User::find($userId);
        if ($user) {
            $user->user_type = $newUserType;
            $user->save();

            return response()->json(['message' => 'User type updated successfully']);
        } else {
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
