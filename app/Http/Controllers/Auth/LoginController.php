<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
	public function execute(LoginRequest $request)
	{
		$user = User::where('national_code', $request->username)->first();
		
		if (!$user || !Hash::check($request->password, $user->password)) {
			return response()->json([
				'data' => null,
				'msg' => 'Wrong Credentials!',
			], 406);
		}
		
		$user->token = $user->createToken(implode(', ', $request->device_name))->plainTextToken;
		
		return response()->json([
			'data' => new UserResource($user),
		]);
    }
}
