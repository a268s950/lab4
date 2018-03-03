<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//access the global array called $_POST to get the values from the text fields
$totalCorrect = 0;

$useranswered1="hey";
$useranswered2="hey";
$useranswered3="hey";
$useranswered4="hey";
$useranswered5="hey";

$answer1 = $_POST['qone'];
$answer2 = $_POST['qone'];
$answer3 = $_POST['qone'];
$answer4 = $_POST['qone'];

if($answer1 == "shoe"){
  $useranswered1="shoe";
  echo "<br>Question 1: Which one is an animal? <br>";
  echo "&emsp;You answered: " . $useranswered1;
  echo "&emsp;<br>Correct answer: monkey<br>";}
else if($answer2 == "scarf"){
  $useranswered1="scarf";
  echo "<br>Question 1: Which one is an animal? <br>";
  echo "&emsp;You answered: " . $useranswered1;
  echo "&emsp;<br>Correct answer: monkey<br>";}
else if($answer3 == "hat"){
  $useranswered1="hat";
  echo "<br>Question 1: Which one is an animal? <br>";
  echo "&emsp;You answered: " . $useranswered1;
  echo "&emsp;<br>Correct answer: monkey<br>";}
else if ($answer4 == "monkey") {
  $totalCorrect++;
  $useranswered1="monkey";
  echo "<br>Question 1: Which one is an animal? <br>";
  echo "&emsp;You answered: " . $useranswered1;
  echo "&emsp;<br>Correct answer: monkey<br>";}

$answer5 = $_POST['qtwo'];
$answer6 = $_POST['qtwo'];
$answer7 = $_POST['qtwo'];
$answer8 = $_POST['qtwo'];

if($answer5 == "canada"){
  $useranswered2="canada";
  echo "<br>Question2: What is the capital of Kansas?<br>";
  echo "&emsp;You answered: " . $useranswered2;
  echo "&emsp;<br>Correct answer: topeka<br>";}
else if($answer6 == "mexico"){
  $useranswered2="mexico";
  echo "<br>Question2: What is the capital of Kansas?<br>";
  echo "&emsp;You answered: " . $useranswered2;
  echo "&emsp;<br>Correct answer: topeka<br>";}
else if($answer7 == "lawrence"){
  $useranswered2="lawrence";
  echo "<br>Question2: What is the capital of Kansas?<br>";
  echo "&emsp;You answered: " . $useranswered2;
  echo "&emsp;<br>Correct answer: topeka<br>";}
else if ($answer8 == "topeka") {
  $totalCorrect++; $useranswered2="topeka";
  echo "<br>Question2: What is the capital of Kansas?<br>";
  echo "&emsp;You answered: " . $useranswered2;
  echo "&emsp;<br>Correct answer: topeka<br>";}

$answer9 = $_POST['qthree'];
$answer10 = $_POST['qthree'];
$answer11 = $_POST['qthree'];
$answer12 = $_POST['qthree'];

if($answer9 == "programming"){
  $useranswered2="programming";
  echo "<br>Question3: What is EECS 448?<br>";
  echo "&emsp;You answered: programming language paradigms";
  echo "&emsp;<br>Correct answer: software engineering<br>";}
else if($answer10 == "software"){
  $useranswered2="software";  $totalCorrect++;
  echo "<br>Question3: What is EECS 448?<br>";
  echo "&emsp;You answered: software engineering";
  echo "&emsp;<br>Correct answer: software engineering<br>";}
else if($answer11 == "circuits"){
  $useranswered2="circuits";
  echo "<br>Question3: What is EECS 448?<br>";
  echo "&emsp;You answered: " . $useranswered2;
  echo "&emsp;<br>Correct answer: software engineering<br>";}
else if ($answer12 == "embedded") {
  $useranswered2="embedded";
  echo "<br>Question3: What is EECS 448?<br>";
  echo "&emsp;You answered: embedded systems";
  echo "&emsp;<br>Correct answer: software engineering<br>";}

$answer13 = $_POST['qfour'];
$answer14 = $_POST['qfour'];
$answer15 = $_POST['qfour'];
$answer16 = $_POST['qfour'];

if($answer13 == "WeM"){
  $useranswered4="WeM";
  echo "<br>Question4: When is our lab?<br>";
  echo "&emsp;You answered: Wednesday Morning";
  echo "&emsp;<br>Correct answer: Thursday Afternoon<br>";}
else if($answer14 == "SaM"){
  $useranswered4="SaM"; $totalCorrect++;
  echo "<br>Question4: When is our lab?<br>";
  echo "&emsp;You answered: Thursday Afternoon";
  echo "&emsp;<br>Correct answer: Thursday Afternoon<br>";}
else if($answer15 == "SaE"){
  $useranswered4="SaE";
  echo "<br>Question4: When is our lab?<br>";
  echo "&emsp;You answered: Saturday Evening";
  echo "&emsp;<br>Correct answer: Thursday Afternoon<br>";}
else if ($answer16 == "SuE") {
  $useranswered4="SuE";
  echo "<br>Question4: When is our lab?<br>";
  echo "&emsp;You answered: Sunday Evening";
  echo "&emsp;<br>Correct answer: Thursday Afternoon<br>";}

$answer17 = $_POST['qfive'];
$answer18 = $_POST['qfive'];
$answer19 = $_POST['qfive'];
$answer20 = $_POST['qfive'];

if($answer17 == "KU"){
  $useranswered5="KU";  $totalCorrect++;
  echo "<br>Question5: Which school is better?<br>";
  echo "&emsp;You answered: KU";
  echo "&emsp;<br>Correct answer: KU<br>";}
else if($answer18 == "Wichita State"){
  $useranswered3="Wichita State";
  echo "<br>Question5: Which school is better?<br>";
  echo "&emsp;You answered: Wichita State";
  echo "&emsp;<br>Correct answer: KU<br>";}
else if($answer19 == "KSU"){
  $useranswered3="KSU";$totalCorrect
  echo "<br>Question5: Which school is better?<br>";
  echo "&emsp;You answered: KSU";
  echo "&emsp;<br>Correct answer: KU<br>";}
else if ($answer20 == "MU") {
  $useranswered3="MU";
  echo "<br>Question5: Which school is better?<br>";
  echo "&emsp;You answered: MU";
  echo "&emsp;<br>Correct answer: KU<br>";}

$percentage = 0;
$percentage = ($totalCorrect/5)*100;
if($totalCorrect != 0){
echo "<br><div id='results'>$totalCorrect / 5 correct</div>";
echo $percentage;
echo "%";
}
else {
  echo "<br>0/5 <br> 0.00%";
}


?>
