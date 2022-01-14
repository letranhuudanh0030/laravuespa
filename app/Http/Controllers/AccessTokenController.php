<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AccessTokenController extends Controller
{
    public function show()
    {
        // return view('setting.token.show');
    }


    public function update()
    {
        $user = User::where('api_token', request()->api_token)->first();
        // $user->update([
        //     'api_token' => Str::random(60),
        // ]);
        $user->api_token = Str::random(60);
        $user->save();
        return json_encode($user->api_token);
    }
}
