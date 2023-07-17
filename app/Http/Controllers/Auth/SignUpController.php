<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SignUpRequest;
use App\Http\Resources\UserResource;
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
		
		if (!$user) {
			return response()->json([
				'data' => null,
				'message' => "Something Went Wrong! Please try again."
			]);
		}
		
		$user->token = $user->createToken(implode(', ', $request->device_name))->plainTextToken;
		
		return response()->json([
			'data' => new UserResource($user)
		]);
    }
}
