<x-guest title="Stocks Graph Today">

    <div class="container-graph py-2">
        <div class="container">
            <form class="symbol-form pb-2">
                <label for="symbol">Enter Stock Symbol:</label>
                <input type="text" id="symbol" name="symbol" placeholder="e.g., idx:bbca" required>
                <button type="submit" class="btn btn-primary btn-md gap-3">Update Chart</button>
            </form>
        </div>
        <div id="tradingview-widget-container"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
        <script type="text/javascript">
            function loadTradingViewWidget(symbol) {
                document.getElementById('tradingview-widget-container').innerHTML = '';

                // Create a new widget
                new TradingView.widget({
                    "width": 980,
                    "height": 610,
                    "symbol": symbol, // Use dynamic symbol
                    "interval": "D", // Default interval
                    "theme": "light", // Light theme
                    "style": "1", // Candlestick style
                    "locale": "en", // English language
                    "toolbar_bg": "#f1f3f6",
                    "enable_publishing": false,
                    "allow_symbol_change": true,
                    "container_id": "tradingview-widget-container"
                });
            }

            // Load default symbol on page load
            loadTradingViewWidget('idx:bbca');

            // Handle form submission to update the widget
            document.getElementById('symbol-form').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent form submission
                const symbolInput = document.getElementById('symbol').value.trim(); // Get user input
                if (symbolInput) {
                    loadTradingViewWidget(symbolInput); // Update the chart
                }
            });
        </script>
    </div>
</x-guest>
