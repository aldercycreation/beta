<?php
echo "OK";

ini_set("display_error",1);
mysql_connect("localhost","root","12321aa");

mysql_select_db("aduandb");

$sql = "SELECT *
FROM `email`
WHERE `Status` = 0
LIMIT 10";

/*
SELECT *
FROM `surat_individu` , pengguna, surat
WHERE `surat_individu`.`Penerima` = pengguna.pid
AND `surat_individu`.sid = surat.sid
*/

$qid = mysql_query($sql);
while($data = mysql_fetch_array($qid))
{
$ID = $data['ID'];

echo "Ada aduan belum email <br>";

                $from     = "aduan_k@doe.gov.my";
                $to       = $data['To'];
                $subject  = $data['Subject'];
                $msg      = $data['Body'];
                


ini_set("display_error",1);

echo "ok";

require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
//Set who the message is to be sent from
$mail->setFrom('aduan_k@doe.gov.my', 'e-Aduan JAS ');

//Set who the message is to be sent to
//$mail->addAddress($to);

$addr = explode(',',$to);

foreach ($addr as $ad) {
    $mail->AddAddress( trim($ad) );       
}

//Set the subject line
$mail->Subject = $subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($msg);
//Replace the plain text body with one created manually
$mail->AltBody = $msg;
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
$mail->SMTPDebug = 2;

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
$sql2 = "Update `email` set Status='1' where ID=" .$ID;
              mysql_query($sql2);
}  

               // $hash     = md5($to.$msg.$password);
                




                
                
          

               
          
}


//update surat status
//$sql2 = "update surat set Status='1' where sid=" .$keys["sid"];
//CustomQuery($sql2);
?>
