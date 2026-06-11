<?php
$to="info@riess.ae";
$subject="RIESS Website Inquiry";
$body="New website inquiry:\n\n";
foreach($_POST as $key=>$value){$body .= htmlspecialchars($key).": ".htmlspecialchars($value)."\n";}
$headers="From: info@riess.ae\r\nReply-To: info@riess.ae\r\n";
if(mail($to,$subject,$body,$headers)){echo "Thank you. Your inquiry has been sent to RIESS.";}else{echo "Message could not be sent. Please contact info@riess.ae or WhatsApp +971501144765.";}
?>