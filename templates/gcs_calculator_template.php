<?php // Template for [gcs-calculator] shortcode?>
<div class="mycalc">
    <form name="calculator" id="calculator" style="width:425px;height:400px;">
        <input type="text" name="inputwindow" id="inputwindow" style="width:425px">
        <div>
            <input type="button" id="one" value="1" onclick="takeValue(document.getElementById('one').value)">
            <input type="button" id="two" value="2" onclick="takeValue(document.getElementById('two').value)">
            <input type="button" id="three" value="3" onclick="takeValue(document.getElementById('three').value)">
            <input type="button" id="plus" value="+" onclick="takeValue(document.getElementById('plus').value)">
        </div>
        <div>
            <input type="button" id="four" value="4" onclick="takeValue(document.getElementById('four').value)">
            <input type="button" id="five" value="5" onclick="takeValue(document.getElementById('five').value)">
            <input type="button" id="six" value="6" onclick="takeValue(document.getElementById('six').value)">
            <input type="button" id="minus" value="-" onclick="takeValue(document.getElementById('minus').value)">
        </div>
        <div>
            <input type="button" id="seven" value="7" onclick="takeValue(document.getElementById('seven').value)">
            <input type="button" id="eight" value="8" onclick="takeValue(document.getElementById('eight').value)">
            <input type="button" id="nine" value="9" onclick="takeValue(document.getElementById('nine').value)">
            <input type="button" id="by" value="*" onclick="takeValue(document.getElementById('by').value)">
        </div>
        <div>
            <input type="button" id="zero" value="0" onclick="takeValue(document.getElementById('zero').value)">
            <input type="button" id="decimal" value="." onclick="takeValue(document.getElementById('decimal').value)">
            <input type="button" id="devide" value="/" onclick="takeValue(document.getElementById('devide').value)">
            <input type="button" id="percent" value="%" onclick="takeValue(document.getElementById('percent').value)">
        </div>
        <div class="results">
            <input type="button" id="equal" value="=" onclick="calculateResult()">
            <button type="button" id="clear" value="" onclick="clearInput(document.getElementById('clear').value)" style="margin-left:12px;padding:20px;">Clear</button>
        </div>

    </form>
</div>