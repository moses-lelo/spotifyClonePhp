<?php


//Evite certain probleme de Hacking 
function sanitizeFormUsername($inputText){

    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}

//Evite certain probleme de Hacking 
function sanitizeFormString($inputText){

    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}

function sanitizeFormPassword($inputText){

    $inputText = strip_tags($inputText);
    return $inputText;
}

if(isset($_POST['RegisterButton'])){
  
   $username = sanitizeFormUsername($_POST['username']);   

   $firstName = sanitizeFormString($_POST['firstName']);

   $lastName = sanitizeFormString($_POST['lastName']);

   $email = sanitizeFormString($_POST['email']);

   $email2 = sanitizeFormString($_POST['email2']);

   $password = sanitizeFormPassword($_POST['password']);
  
   $password2 = sanitizeFormPassword($_POST['password2']);

   $wasSuccessful =$account->register($username,$firstname,$lastName,$email, $email2, $password, $password2);

   if($wasSuccessful){
       header("Location: index.php");
   }

}

?>