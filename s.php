<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
$s = mail("xyz242910@gmail.com","My subject",$msg);
if($s)
{
echo "ho";}
?>