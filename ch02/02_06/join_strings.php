<?php
$firstName = 'David';
$lastName = 'Powers';
$title = '"The Hitchhiker\'s Guide to the Galaxy"';
$author = 'Douglas Adams';
$answer = 42;
$newLines = "\r\n\r\n";

$fullName = $firstName . ' ' . $lastName;

$book = "$title by $author";

//combined concatenation operator
$message = "Name: $fullName $newLines";
$message .= "Book: $book $newLines";
$message .= "Answer: $answer";

echo $fullName . '<br />';
echo $book . '<br />';
echo $message;
