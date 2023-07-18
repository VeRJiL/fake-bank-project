<style>
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	.container {
		width: 100vw;
		height: 100vh;
		display: flex;
		justify-content: center;
	}

	.content {
		display: flex;
		flex-direction: column;
		justify-content: space-around;
		align-items: center;
		gap: 1.5rem;
		padding: 2rem 0;
		box-shadow: 0 0 8px 4px rgba(0, 0, 0, 0.1);
		border-radius: 10px;
	}
</style>

<div class="container">
	<div class="content">
		<p>Transaction ID: {{ $transaction->id }}</p>
		<p>Sender name: {{ $sender->owners[0]->fullName }}</p>
		<p>Receiver name: {{ $receiver->owners[0]->fullName }}</p>
		<p>Amount: {{ $transaction->amount }}</p>
	</div>
</div>