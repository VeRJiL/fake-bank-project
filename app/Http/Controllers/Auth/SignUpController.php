<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SignUpRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class SignUpController extends Controller
{
	public function execute(SignUpRequest $request): JsonResponse
	{
		$user = User::firstOrCreate(
			['national_code' => $request->national_code],
			$request->allowedInputs()
		);
		
		$user->token = $user->createToken(implode(', ', $request->device_name))->plainTextToken;
		
		return response()->json([
			'data' => $user
		]);
    }
}
