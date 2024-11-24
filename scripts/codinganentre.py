"""## TRADING VIEW API"""

from tradingview_ta import TA_Handler, Interval, Exchange
import matplotlib.pyplot as plt
from tradingview_ta import *
import math
import sys
import json

symbols = sys.argv[1].split(',')
analysis_results = get_multiple_analysis(
    screener="indonesia",  # Screener for Indonesian stocks
    interval=Interval.INTERVAL_1_MONTH,  # Time interval (1 Month)
    symbols=symbols
)
def analysis_to_dict(analysis_object):
    return {
        "summary": analysis_object.summary
    }

analysis_data = {symbol: analysis_to_dict(analysis) for symbol, analysis in analysis_results.items()}

print(json.dumps(analysis_data, indent=4))
