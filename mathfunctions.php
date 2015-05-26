<?php

//mathfunctions.inc.php

function mathForm() {
	print "
	Please enter 2 numbers, and then select a math function to perform on those two numbers.
	<form method=post action='index.php?action=check'>
	<table border=0>
		<tr>
		<td>Number 1:</td>
		<td><input type=text name='number1' value='$_POST[number1]' size=3></td>
		</tr><tr>
		<td>Select operation:</td>
		<td><select name='operation'><option value=''>Select One
		<option value='doadd'";if($_POST[operation]=='doadd') { print " selected"; } print "> Add
		<option value='dosub'";if($_POST[operation]=='dosub') { print " selected"; } print "> Subtract
		<option value='domul'";if($_POST[operation]=='domul') { print " selected"; } print "> Multiply
		<option value='dodiv'";if($_POST[operation]=='dodiv') { print " selected"; } print "> Divide
		<option value='domod'";if($_POST[operation]=='domod') { print " selected"; } print "> Modulus
		</select></td>
		</tr><tr>
		<td>Number 2:</td>
		<td><input type=text name='number2' value='$_POST[number2]' size=3></td>
		</tr><tr>
		<td colspan=2><input type=submit value='Calculate!'></td>
		</tr>
	</table>
	</form>";
}

function checkMath() {
	
	//check to see if they have entered a value in the numbers and selected an operation.
	if(strlen($_POST[number1]) < 1) { return "You did not enter in a value for the first number"; }
	if(strlen($_POST[number2]) < 1) { return "You did not enter in a value for the second number"; }
	if(strlen($_POST[operation]) < 1) { return "You did not select an operation to perform"; }
	if($_POST[operation]=="dodiv" && $_POST[number2]==0) { return "You cannot divide by 0"; }

	return "ok";
}

function doadd($number1,$number2) {
	print "The result of $number1 + $number2 is: ".($number1+$number2)."<br>
	<a href='index.php'>Try Again</a>";
}

function dosub($number1,$number2) {
	print "The result of $number1 - $number2 is: ".($number1-$number2)."<br>
	<a href='index.php'>Try Again</a>";
}

function domul($number1,$number2) {
	print "The result of $number1 * $number2 is: ".($number1*$number2)."<br>
	<a href='index.php'>Try Again</a>";
}

function dodiv($number1,$number2) {
	print "The result of $number1 / $number2 is: ".($number1/$number2)."<br>
	<a href='index.php'>Try Again</a>";
}

function domod($number1,$number2) {
	print "The result of $number1 % $number2 is: ".($number1%$number2)."<br>
	<a href='index.php'>Try Again</a>";
}