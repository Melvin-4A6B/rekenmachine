<?php require_once "inc/inc.php"; ?>

<form name="rekenMachine">
	<table id="table1" style="margin-left: 1em;">
		<tr>
			<td>
				<input id="tekstveld" type="number" name="input" placeholder="0">
				<br>
			</td>
		</tr>
		<tr>
			<td>
				<input type="button" id="button7" name="zeven" value="7" onclick="rekenMachine.input.value += '7'">
				<input type="button" id="button8" name="acht" value="8" onclick="rekenMachine.input.value += '8'">
				<input type="button" id="button9" name="negen" value="9" onclick="rekenMachine.input.value += '9'">
				<input type="button" id="button_delen" name="delen" value="&divide;" onclick="rekenMachine.input.value += '/'">
			<br>	
				<input type="button" id="button4" name="vier" value="4" onclick="rekenMachine.input.value += '4'">
				<input type="button" id="button5" name="vijf" value="5" onclick="rekenMachine.input.value += '5'">
				<input type="button" id="button6" name="zes" value="6" onclick="rekenMachine.input.value += '6'">	
				<input type="button" id="button_keer" name="keer" value="*" onclick="rekenMachine.input.value += '*'">	
			<br>	
				<input type="button" id="button1" name="een" value="1" onclick="rekenMachine.input.value += '1'">
				<input type="button" id="button2" name="twee" value="2" onclick="rekenMachine.input.value += '2'">
				<input type="button" id="button3" name="drie" value="3" onclick="rekenMachine.input.value += '3'">		
				<input type="button" id="button_min" name="min" value="-" onclick="rekenMachine.input.value += '-'">		
			<br>		
				<input type="button" id="button_leeg" name="leeg" value="AC" onclick="rekenMachine.input.value = ''">		
				<input type="button" id="button0" name="nul" value="0" onclick="rekenMachine.input.value += '0'">
				<input type="button" id="button_is" name="uitkomst" value="=" onclick="rekenMachine.input.value = eval(rekenMachine.input.value)">		
				<input type="button" id="button_plus" name="plus" value="+" onclick="rekenMachine.input.value += '+'">
			<br>
			</td>
		</tr>
	</table>
</form>