<?php

namespace App\Http\Resources;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TransactionCollection extends ResourceCollection
{
    public function toArray(Request $request): array|Collection|\JsonSerializable|Arrayable
    {
        return $this->collection->transform(function (Transaction $transaction) {
			return [
				"id" => $transaction->id,
				"sender" => new BankAccountResource($transaction->sender),
				"receiver" => new BankAccountResource($transaction->receiver),
				"amount" => $transaction->amount,
			];
        });
    }
}
