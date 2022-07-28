<?php

// Credits do not remove  				
// This Contact form created by 
// Fernando Machado > https://github.com/fmachadoweb	


// Demo in: https://alfawebhost.com.br/mail/



if (isset($_POST['BTSend'])) {
 
 //POST variables, change only if necessary
 //====================================================
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone']; 
 $message = $_POST['message'];
 //====================================================
 
 //SENDER --> THIS EMAIL MUST BE A VALID DOMAIN
 //==================================================== 
 $email_sender = "contato@hardtek.com.br"; // must be an email account on your domain
 //====================================================
 
 //Email settings, adjust as needed
 //==================================================== 
 $email_sender = "contato@hardtek.com.br"; // can be any email that will receive the messages
 $email_reply = "$email"; 
 $email_subject = "Contact for mail"; // This will be the subject of the message
 //====================================================
 
 //Assemble the Message Body
 //====================================================
 $email_content = "Name = $name \n"; 
 $email_content .= "Email = $email \n";
 $email_content .= "Phone = $phone \n"; 
 $email_content .= "Message = $message \n"; 
 //====================================================
 
 //Set the Headers (Change only if necessary) 
 //==================================================== 
 $email_headers = implode ( "\n",array ( "From: $email_sender", "Reply-To: $email_reply", "Return-Path: $email_sender","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 //====================================================
 
 //Sending the email
 //==================================================== 
 if (mail ($email_sender, $email_subject, nl2br($email_content), $email_headers)){ 
 echo "</b>Email successfully sent!</b>"; 
 } 
 else{ 
 echo "</b>E-mail sending failed!</b>"; } 
 //====================================================
} 
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Fernando Machado - Web Developer</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons )-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
	
<body>	

<form action="<? $PHP_SELF; ?>" method="POST"> 
 <p> 
 Nome:<br /> 
 <input type="text" size="25" name="name"> 
 </p>   
 <p> 
 E-mail:<br /> 
 <input type="text" size="25" name="email"> 
 </p>   
 <p> 
 Telefone:<br /> 
 <input type="text" size="25" name="phone"> 
 </p>   
 <p> 
 Menssagem:<br /> 
 <input type="text" size="25" name="message"> 
 </p>   
 <p>
          <input type="submit" name="BTSend" value="Enviar"> 
   <input type="reset" name="BTClear" value="Limpar">
        </p>     
		
		
    </body>
</html>		