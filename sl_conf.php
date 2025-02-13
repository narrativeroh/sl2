<?php
//Database settings
$db_server = "localhost:3307";												    //db server location
$db_user = "root";														      //db user
$db_password = "root";													    //db password
$db_name = "stats_ladders";												            //db name
$pdo = new PDO("mysql:host=$db_server;dbname=$db_name;charset=utf8",$db_user,$db_password);

$pub = "http://localhost/SL2/";						          //public root
$doc = realpath($_SERVER["DOCUMENT_ROOT"])."/SL2/";		    //document root
$secret = "RH-uj.VLb8WF!QxRL2myMWvcDscwr2z2";                 //secret key

//include PHP Mailer functions
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

//Core Features
function crypto_rand_secure($min, $max)
{
    $range = $max - $min;
    if ($range < 1) return $min; // not so random...
    $log = ceil(log($range, 2));
    $bytes = (int) ($log / 8) + 1; // length in bytes
    $bits = (int) $log + 1; // length in bits
    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; // discard irrelevant bits
    } while ($rnd > $range);
    return $min + $rnd;
}
function getToken($length)
{
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet); // edited

    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
    }

    return $token;
}
function getRandomNumber($length)
{
    $token = "";
    $codeAlphabet = "0123456789";
    $max = strlen($codeAlphabet); // edited

    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
    }

    return $token;
}
function hashIt($args)
{
  global $secret;
	if($args['str']<>"")
	{
		return md5($secret.$args['str']);
	}
	return 0;
}

function sendEmails($template, $recipients)
{

  //set globals
  global $pdo;
  global $doc;
  global $pub;

  //get email content
  $sql = "select * from sl_emails where email_id = ?";
  $q = $pdo->prepare($sql);
  $q->execute(array($template));
  $r=$q->fetchAll();
  if(empty($r))
  {return 0;}
  $emailbody = $r[0]['email_content'];

  //send email
  require $doc.'libraries/php-mailer/Exception.php';
  require $doc.'libraries/php-mailer/PHPMailer.php';
  require $doc.'libraries/php-mailer/SMTP.php';

  //do for each recipient
  foreach($recipients as $recipient)
  {
    //replace variables
    $emailbody = str_replace("[siteurl]", $pub, $emailbody);
    $emailbody = str_replace("[name]", $recipient['auth_name'], $emailbody);
    $emailbody = str_replace("[email]", $recipient['auth_email'], $emailbody);
    $emailbody = str_replace("[resetcode]", $recipient['auth_reset'], $emailbody);
    $emailbody = str_replace("[newemail]", $recipient['auth_new_email'], $emailbody);

    //send email
    $mail = new PHPMailer(true);
    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'sgp35.siteground.asia';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'roh@goodhands.link';                     //SMTP username
        $mail->Password   = 'c?24h7$hg#e$';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('no-reply@goodhands.link', 'Stats & Ladders');
        $mail->addAddress($recipient['auth_email'], $recipient['auth_name']);     //Add a recipient
        $mail->addReplyTo('no-reply@goodhands.link', 'Stats & Ladders');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $r[0]['email_subject'];
        $mail->Body    = $emailbody;
        $mail->AltBody = 'Why you have old-people email??';
        $mail->send();
        return 1;
      } catch (Exception $e) {
          return "Unable to send an email";
      }
  }
}
?>
