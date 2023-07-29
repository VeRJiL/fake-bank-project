<?php

namespace Api\BankAccount;

use App\Controller;
use Events\MoneyTransferred;
use Illuminate\Http\JsonResponse;
use Domain\BankAccount\Models\BankAccount;
use Requests\BankAccount\TransferMoneyRequest;
use Services\CreateTransactionService;
use Services\TransferMoneyService;

class TransferMoneyController extends Controller
{
	public function __construct(
		private TransferMoneyService $transferMoneyService,
		private CreateTransactionService $createTransactionService
	) {}
	
	public function execute(TransferMoneyRequest $request): JsonResponse
	{
		// try {
			$sender = BankAccount::where("uuid", $request->sender)->first();
			$receiver = BankAccount::where("uuid", $request->receiver)->first();
			
			if ($sender->balance - $request->amount < 0) {
				return response()->json([
					"data" => $sender,
					"message" => sprintf("Not Enough Balance! your current balance is: %s", $sender->balance)
				], 406);
			}
			
			$this->transferMoneyService->execute($sender, $receiver, $request->amount);
			
			$transaction = $this->createTransactionService->execute([
				"sender_id" => $sender->id,
				"receiver_id" => $receiver->id,
				"amount" => $request->amount,
			]);
			
			MoneyTransferred::dispatch($transaction, $sender, $receiver);
			
			return response()->json([
				"data" => $transaction,
				"message" => "Done",
			]);
		// } catch (Exception $exception) {
		// 	return response()->json([
		// 		"data" => null,
		// 		"message" => $exception->getMessage()
		// 	], 406);
		// }
    }
}
