<?php

namespace Api\Auth;

use App\Controller;
use Illuminate\Support\Facades\Hash;
use Domain\User\Models\User;
use Requests\Auth\LoginRequest;
use Resources\UserResource;

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
