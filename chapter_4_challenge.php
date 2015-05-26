<?
/* the points system for this Q&A has to be passed from question to question.  We are going
to do this by passing it in the URL.  After the first question, the current score is passed
through in the URL for the form POST, and can be retreived at any point throughout using
the $_GET superglobal. When an answer is correct, the superglobal is incremented by the 
value that question is worth. */

//this is an error that the user gets if they do not select an answer to the question.
define("ERROR","<font color='red'><b>You did not select an answer.  Please select an answer to continue.</b></font>");

/* this is the list of questions and answers.  I have then in variables because it makes
error checking them easier, and easier to change them if I want to later.

note that with each form action in the switch statement, there is the ?question= variable tacked on.  This
is what the switch statement uses to determine what question to display/check.  After
the first question the score is also tacked on to take it from page to page. That is why
the form method and action are in the switch statement, to get the most recent proper score.*/

$question1="<b>Question 1: What is the URL to access the PHP users manual online?</b><br>
			A) <input type=radio name='q1a' value='a'> http://www.php.org/docs.php<br>
			B) <input type=radio name='q1a' value='b'> http://www.php.com/docs.php<br>
			C) <input type=radio name='q1a' value='c'> http://www.php.net/docs.php<br>
			D) <input type=radio name='q1a' value='d'> http://documentation.php.net<br>
			<input type=submit value='Go'>
			</form>";
$question1_answer="c";

$question2="<b>Question 2: What is the extention that PHP documents generally have?</b><br>
			A) <input type=radio name='q2a' value='a'> .phps<br>
			B) <input type=radio name='q2a' value='b'> .html<br>
			C) <input type=radio name='q2a' value='c'> .htm<br>
			D) <input type=radio name='q2a' value='d'> .php<br>
			<input type=submit value='Go'>
			</form>";
$question2_answer="d";

$question3="<b>Question 3: What does PHP stand for?</b><br>
			A) <input type=radio name='q3a' value='a'> PHP: Hypertext Preprocessor<br>
			B) <input type=radio name='q3a' value='b'> Personal Home Page<br>
			C) <input type=radio name='q3a' value='c'> Pretty Handy Programmer<br>
			D) <input type=radio name='q3a' value='d'> Personal Hypertext Processor<br>
			<input type=submit value='Go'>
			</form>";
$question3_answer="a";

$question4="<b>Question 4: How should a PHP statement close?</b><br>
			A) <input type=radio name='q4a' value='a'> ?><br>
			B) <input type=radio name='q4a' value='b'> ;<br>
			C) <input type=radio name='q4a' value='c'> </php><br>
			D) <input type=radio name='q4a' value='d'> .<br>
			<input type=submit value='Go'>
			</form>";
$question4_answer="b";

$question5="<b>Question 5: Which of the following are correct? (select all that apply)</b><br>
			A) <input type=checkbox name='q5a[a]' value='y'> print \$x;<br>
			B) <input type=checkbox name='q5a[b]' value='y'> print '\$x';<br>
			C) <input type=checkbox name='q5a[c]' value='y'> print x;<br>
			D) <input type=checkbox name='q5a[d]' value='y'> print \$x<br>
			E) <input type=checkbox name='q5a[e]' value='y'> print x<br>
			F) <input type=checkbox name='q5a[f]' value='y'> print \"\$x\";<br>
			<input type=submit value='Go'>
			</form>";
$question5_answer1="a";
$question5_answer2="b";
$question5_answer3="c";
$question5_answer4="f";

$question6="<b>Question 6: What value would be printed to the browser from the following script?</b><br>
			<pre>".'
			$x=3;$y=4;$z=9;
			$a=$x+($y*$z)/($x-($y%3));
			print $a;'."</pre>

			A) <input type=radio name='q6a' value='a'> An error<br>
			B) <input type=radio name='q6a' value='b'> 19.5<br>
			C) <input type=radio name='q6a' value='c'> 21<br>
			D) <input type=radio name='q6a' value='d'> None of the Above<br>
			<input type=submit value='Go'>
			</form>";
$question6_answer="c";

$question7="<b>Question 7: What is the output of the following script?</b><br>
			<pre>".'
			$x=1;$y=3;$z=12;
			++$y;
			$z*=2;
			$x=$y+$z;
			print $x'."</pre>
			
			A) <input type=radio name='q7a' value='a'> An error<br>
			B) <input type=radio name='q7a' value='b'> 28<br>
			C) <input type=radio name='q7a' value='c'> 1<br>
			D) <input type=radio name='q7a' value='d'> None of the Above<br>
			<input type=submit value='Go'>
			</form>";
$question7_answer="a";

$question8="<b>Question 8: Which of the following are TRUE statements assuming the values below? (select all that apply)</b><br>
			<pre>".'
			$x=3;$y=7;$z="green";$n=1;'."</pre>
			A) <input type=checkbox name='q8a[a]' value='y'> \$x+\$y==\$z || \$x==3 && \$n >=0<br>
			B) <input type=checkbox name='q8a[b]' value='y'> \$x!=3<br>
			C) <input type=checkbox name='q8a[c]' value='y'> \$z==\"green\" && \$y%3 >=\$n<br>
			D) <input type=checkbox name='q8a[d]' value='y'> \$x==3 && \$x++==\$y-3<br>
			E) <input type=checkbox name='q8a[e]' value='y'> \$x*\$x % 2 && 3-\$y!=\$z<br>
			F) <input type=checkbox name='q8a[f]' value='y'> \$x+2=5<br>			
			<input type=submit value='Go'>
			</form>";
$question8_answer1="a";
$question8_answer2="c";
$question8_answer3="e";

$question9="<b>Question 9: What is the result of the following code?</b><br>
			<pre>".'
			for($x=1;$y<10;$y++) {
				print $y."&lt;br&gt;";
			}'."</pre>
			A) <input type=radio name='q9a' value='a'> The numbers 0 to 9 will be printed to the screen<br>
			B) <input type=radio name='q9a' value='b'> An infinite loop<br>
			C) <input type=radio name='q9a' value='c'> An error<br>
			D) <input type=radio name='q9a' value='d'> None of the above<br>
			<input type=submit value='Go'>
			</form>";
$question9_answer="d";

$question10="<b>Question 10: What is the result of the following code?</b><br>
			<pre>".'
			$x=5;
			switch($x) {
				case 1:
					print "the value is 1&lt;br&gt;";
				case 2:
					print "the value is 2&lt;br&gt;";
				case 3:
					print "the value is 3&lt;br&gt;";
				case 4:
					print "the value is 4&lt;br&gt;";
				case 5:
					print "the value is 5&lt;br&gt;";
				case 6:
					print "the value is 6&lt;br&gt;";
				default: 
					print "There is no spoon.&lt;br&gt;";
			}
			'."</pre>
			A) <input type=radio name='q10a' value='a'> \"the value is 5\" is printed to the screen<br>
			B) <input type=radio name='q10a' value='b'> An error<br>
			C) <input type=radio name='q10a' value='c'> \"the value is 5\" and \"the value is 6\" is printed to the screen<br>
			D) <input type=radio name='q10a' value='d'> \"the value is 5\" and \"the value is 6\" and \"There is no spoon.\" is printed to the screen<br>
			E) <input type=radio name='q10a' value='e'> None of the above<br>
			<input type=submit value='Go'>
			</form>";
$question10_answer="d";

//the final bit in here is a review of each question, and the correct answer(s) for that question.
$results=$question1."<br><b>Correct answer: $question1_answer</b><br><i>Why: The other domains go somewhere else.</i><br><br>";
$results.=$question2."<br><b>Correct answer: $question2_answer</b><br><i>Why: .php is the default extention the server is setup for, tho any extention can be setup to parse as a PHP script</i><br><br>";
$results.=$question3."<br><b>Correct answer: $question3_answer</b><br><i>Why: PHP is a recursive acronym, contrary to programming mythology, it has never been an acronym for Personal Home Page.</i><br><br>";
$results.=$question4."<br><b>Correct answer: $question4_answer</b><br><i>Why: Statements are always finished with a semi-colon.</i><br><br>";
$results.=$question5."<br><b>Correct answer: $question5_answer1,$question5_answer2,$question5_answer3,$question5_answer4</b><br><i>Why: a and b are obvious, c is true if x is defined as a constant.  d is missing a semi-colon, e is missing a semi-colon and f is obviously valid.</i><br><br>";
$results.=$question6."<br><b>Correct answer: $question6_answer</b><br><i>Why: The equasion translates to: \$a=3+(4*9)/(3-(4%3)).  When you follow the order of operations you get \$a=3+36/2 and then again, following order of operations, \$a=3+18 and a final value of 21.</i><br><br>";
$results.=$question7."<br><b>Correct answer: $question7_answer</b><br><i>Why: The final print statement is missing semi-colon.  You did not try and calculate that out did you?  Always look for the most obvious failure points first! ;)</i><br><br>";
$results.=$question8."<br><b>Correct answer: $question8_answer1,$question8_answer2,$question8_answer3</b><br><i>Why: If you are having trouble figuring out whether the equasion is true or false, break it down bit by bit.  For example, the first equasion:  10==green || 3==3 && 1>=0 : false OR true AND true, thus it is TRUE.  If all else failes, throw it into an IF statement, print yes if it is true, and run the script!  B is not true because \$x IS 3, d is false because the right side of the and (&&) evaluates false, remembering the subtle difference between the prefixed and postfixed increments... ++\$x increments THEN returns, \$x++ returns THEN increments, so you actually get: (3==4)++ - the increment in this case gets lost in the order of operations because its evaluation is irrelevant to the operation, thus the right side is false, and thus the whole equasion is false.  Finally, F is false because it returns an error - you cannot do an assignment operation in the same statement as an arithmatic operation.</i><br><br>";
$results.=$question9."<br><b>Correct answer: $question9_answer</b><br><i>Why: The script will print out the numbers 1 to 9.  ) is not printed out because the first time through the loop, \$y has NO VALUE at all, at the end of the loop, it is incremented, creating it and setting it to one.</i><br><br>";
$results.=$question10."<br><b>Correct answer: $question10_answer</b><br><i>Why: There are no break statements, so once the value is found in the case statement, every statement thereafter is executed.</i><br><br>";
$results.="Ok, now I understand, take me <a href='chapter_4_challenge.php'>back to the beginning</a> to try again.";

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>
	<? 
		//change the title according to the question that we are on.
		if($_GET[question]) { 
			print "Question $question";
		} else { 
			print "Instructions";
		}
	?>
	</title>
</head>
<body bgcolor="#FFFFFF" text="#000000" link="#0000FF" alink="#00FF00" vlink="#FF00FF">
<center>
<table border=0 width='590'>
	<tr>
	<td>
	<?
	switch($_GET[question]) {
		case "1":
			print "
			<form method=post action='chapter_4_challenge.php?question=2'>
			$question1
			</form>";
		break;
		case "2":
			//first check question 1
			if($_POST[q1a]) {
				//if they have selected an answer - evaluate it here.
				if($question1_answer==$_POST[q1a]) {
					$_GET["score"]++;
				}
				print "
				<form method=post action='chapter_4_challenge.php?question=3&score=$_GET[score]'>
				$question2
				</form>";
			} else {
				print ERROR."<br>
				<form method=post action='chapter_4_challenge.php?question=2'>
				$question1
				</form>";
			}
		break;

		case "3":
			//check question 2
			if($_POST[q2a]) {
				if($question2_answer==$_POST[q2a]) {
					$_GET["score"]++;
				}
				print "
				<form method=post action='chapter_4_challenge.php?question=4&score=$_GET[score]'>
				$question3
				</form>";
			} else {
				print ERROR."<br>
				<form method=post action='chapter_4_challenge.php?question=3&score=$_GET[score]'>
				$question2
				</form>";
			}
		break;

		case "4":
			//first check question 3
			if($_POST[q3a]) {
				//if they have selected an answer - evaluate it here.
				if($question3_answer==$_POST[q3a]) {
					$_GET["score"]++;
				}
				print "
				<form method=post action='chapter_4_challenge.php?question=5&score=$_GET[score]'>
				$question4
				</form>";
			} else {
				print ERROR."<br>
				<form method=post action='chapter_4_challenge.php?question=4&score=$_GET[score]'>
				$question3
				</form>";
			}
		break;

		case "5":
			//first check question 4
			if($_POST[q4a]) {
				//if they have selected an answer - evaluate it here.
				if($question4_answer==$_POST[q4a]) {
					$_GET["score"]++;
				}
				print "
				<form method=post action='chapter_4_challenge.php?question=6&score=$_GET[score]'>
				$question5
				</form>";
			} else {
				print ERROR."<br>
				<form method=post action='chapter_4_challenge.php?question=5&score=$_GET[score]'>
				$question4
				</form>";
			}
		break;

		case "6":
			/* first check question 5 - this is a bit different because we have multiple selections
			we have each of the selections using checkboxes.  Each of the text boxes is named
			with a [xxxx] after it - that puts it into a subset of the superglobal $_GET.  We do 
			not need to check if they selected anything at all, because they could possibly
			think that none of the answers bears answering....  so we go directly into checking
			to see if they selected any or all of the correct answers.  */
			if($_POST[q5a][$question5_answer1]=="y") { $_GET[score]++; }
			if($_POST[q5a][$question5_answer2]=="y") { $_GET[score]++; }
			if($_POST[q5a][$question5_answer3]=="y") { $_GET[score]++; }
			if($_POST[q5a][$question5_answer4]=="y") { $_GET[score]++; }
			/* ok - a bit of an explanation of the above.  It would evaluate to:
			$_POST[q5a][a],$_POST[q5a][b], etc depending on the value of the $question5_answer1, 
			$question5_answer2, etc, values.  When you look at the checkbox, you see that the values of the 
			selected boxes would be y - so that is the value we are checking for.  These are actually called 
			multi-dimentional arrays, and are a very advanced concept.  If you managed to figure this
			out you are VERY ready to continue on! If not, then try the code and add the print_r($_POST); 
			function to the output to see how it comes through from the form. */
					
			print "
			<form method=post action='chapter_4_challenge.php?question=7&score=$_GET[score]'>
			Congratulations!  So far, your score is $_GET[score] out of a possible 8.  Lets continue shall we?<br>
			<br>
			$question6
			</form>";
		break;

		case "7":
			//first check question 6
			if($_POST[q6a]) {
				//if they have selected an answer - evaluate it here.
				if($question6_answer==$_POST[q6a]) {
					$_GET["score"]++;
				}
				print "
				<form method=post action='chapter_4_challenge.php?question=8&score=$_GET[score]'>
				$question7
				</form>";
			} else {
				print ERROR."<br>
				<form method=post action='chapter_4_challenge.php?question=7&score=$_GET[score]'>
				$question6
				</form>";
			}
		break;

		case "8":
			//first check question 7
			if($_POST[q7a]) {
				//if they have selected an answer - evaluate it here.
				if($question7_answer==$_POST[q7a]) {
					$_GET["score"]++;
				}
				print "
				<form method=post action='chapter_4_challenge.php?question=9&score=$_GET[score]'>
				$question8
				</form>";
			} else {
				print ERROR."<br>
				<form method=post action='chapter_4_challenge.php?question=8&score=$_GET[score]'>
				$question7
				</form>";
			}
		break;

		case "9":
			if($_POST[q8a][$question8_answer1]=="y") { $_GET[score]++; }
			if($_POST[q8a][$question8_answer2]=="y") { $_GET[score]++; }
			if($_POST[q8a][$question8_answer3]=="y") { $_GET[score]++; }
			print "
			<form method=post action='chapter_4_challenge.php?question=10&score=$_GET[score]'>
			$question9
			</form>";
		break;

		case "10":
			//first check question 9
			if($_POST[q9a]) {
				//if they have selected an answer - evaluate it here.
				if($question9_answer==$_POST[q9a]) {
					$_GET["score"]++;
				}
				print "
				<form method=post action='chapter_4_challenge.php?question=end&score=$_GET[score]'>
				$question10
				</form>";
			} else {
				print ERROR."<br>
				<form method=post action='chapter_4_challenge.php?question=10&score=$_GET[score]'>
				$question9
				</form>";
			}
		break;
		
		case "end":
			//first check question 10
			if($_POST[q10a]) {
				//if they have selected an answer - evaluate it here.
				if($question10_answer==$_POST[q10a]) {
					$_GET["score"]++;
				}
				print "Congratulations!  You have completed the PHP evaluation test!  Your score was
				<b>$_GET[score]</b> out of a possible 15!<br><h1>";
				//figure out what type of congratulations to give them.
				if($_GET[score] == 15) {
					print "WOW!  You are a PHP superstar!";
				} elseif($_GET[score] > 9 && $_GET[score] < 15) {
					print "Not bad at all.  But room for improvement.";
				} elseif($_GET[score] > 4 && $_GET[score] < 10) {
					print "Ok.  But perhaps you should do a bit of review.";
				} else {
					print "WoW.  That is bad.  Umm, maybe you had better start from the beginning of the training course.";
				}
				print "</h1>
				If you would like to see the answers to all of the questions, <a href='chapter_4_challenge.php?question=results'>click here</a>";
			} else {
				print ERROR."<br>
				<form method=post action='chapter_4_challenge.php?question=end&score=$_GET[score]'>
				$question10
				</form>";
			}
		break;
					
		case "results":
			print $results;
		break;
		
		default:
			print "Welcome to the PHP knowledge test!  In this test you will be asked a series
			of 10 questions.  Eight of these questions will be multiple choice questions, 
			and 2 of them you will be required to select multiple answers to.  At the end of 
			the test, you will be evaluated with a score out of 15.  Good Luck!<br>
			<br>
			<a href='chapter_4_challenge.php?question=1'>Begin!</a>";
		break;
	}
	?></td>
	</tr>
</table>
</center>
</body>
</html>
