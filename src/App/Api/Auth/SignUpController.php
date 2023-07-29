<?php

namespace Api\Auth;

use App\Controller;
use Illuminate\Http\JsonResponse;
use Domain\User\Models\User;
use Requests\Auth\SignUpRequest;
use Resources\UserResource;

class SignUpController extends Controller
{
	public function execute(SignUpRequest $request): JsonResponse
	{
		$user = User::where('national_code', $request->national_code)->first();
		
		if ($user) {
			return response()->json([
				'data' => null,
				'message' => 'This Account Exist! Try "forget password button" if you dont remember your credentials'
			], 406);
		}
		
		$user = User::create($request->allowedInputs());
		
		$user->token = $user->createToken(implode(', ', $request->device_name))->plainTextToken;
		
		return response()->json([
			'data' => new UserResource($user)
		]);
    }
}
