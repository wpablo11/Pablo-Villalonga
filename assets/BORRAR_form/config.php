<?php
/**
 * Setup mail server config
 */

//where we would like to send email
$recipientEmail = 'a.manyez@cpsingenieros.net';
$recipientName = 'CPS';

//Address which will be visible in "From" field
$fromEmail = 'cpsweb@cpsingenieros.net';
$fromName = 'WEB CPS';

//Validation error messages
$requiredMessage = 'Field is required';
$invalidEmail = 'Invalid email';



/**
 * Advanced configuration - no need to modify
 */

require_once(dirname(__FILE__) . '/vendor/ctPHPMailer.php');
$mail = new ctPHPMailer();

//set your email address
$mail->AddAddress($recipientEmail, $recipientName);
$mail->SetFrom($fromEmail, $fromName);

$debug = true; //if problems occur, set to true to view debug messages

/**
 * For GMAIL configuration please use this values:
 *
 * $mail->Host = "smtp.gmail.com"; // SMTP server
 * $mail->Username = "mail@gmail.com"; // SMTP account username
 * $mail->Password = "yourpassword"; // SMTP account password
 * $mail->Port = 465; // set the SMTP port for the GMAIL server
 * $mail->SMTPSecure = "ssl";
 *
 * More configuration options available here: https://code.google.com/a/apache-extras.org/p/phpmailer/wiki/ExamplesPage
 */

/**
 * SERVER CONFIG
 */

/**
 * Config for SMTP server - uncomment if you don't want to use PHP mail() function
 **/


 $mail->Host = "smtp.cpsingenieros.net"; // sets the SMTP server
 $mail->Username = "cpsweb@cpsingenieros.net"; // SMTP account username
 $mail->Password = "pEPrethEhA3R"; // SMTP account password
 $mail->SMTPAuth = true; // enable SMTP authentication - true if username and password required
 $mail->Port = 25; // set the SMTP port (usually 587, or 465 when SSL)
 $mail->IsSMTP(); //uncomment it to enable smtp
 $mail->SMTPDebug = $debug ? 2 : 0; // debug messages - set debug to false on production!
 
