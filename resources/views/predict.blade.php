<x-guestUser title="Prediction">

<div class="container-graph py-2 min-vh-100">
    <div class="container">
        <form action="{{ route('predict.analyze') }}" method="POST" class="symbol-form pb-2">
            @csrf
            <label for="symbols">Enter Stock Symbol:</label>
            <input type="text" id="symbols" name="symbols" placeholder="e.g., idx:bbca" required>
            <button type="submit" class="btn btn-primary btn-md gap-3">Predict Now</button>
        </form>
    </div>

    <div class="container pb-4">
        @if(isset($data))
            <h2>Prediction Results:</h2>
            <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{ $userSymbol }}</h3>
                <p class="card-text">
                    Recommendation: <strong>{{ $data[$userSymbol]['summary']['RECOMMENDATION'] }}</strong>
                </p>
                <ul>
                    <li>BUY: {{ $data[$userSymbol]['summary']['BUY'] }}</li>
                    <li>SELL: {{ $data[$userSymbol]['summary']['SELL'] }}</li>
                    <li>NEUTRAL: {{ $data[$userSymbol]['summary']['NEUTRAL'] }}</li>
                </ul>
            </div>
        </div>
        @endif
    </div>
</div>
</x-guest>
