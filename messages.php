<?php
if(isset($_POST['submit'])) {
    $mailto = "raivuc99@gmail.com";
    $name = $_POST['Name']; //getting customer name
    $lastname = $_POST['LastName']; //getting customer email
    $email = $_POST['Email']; //getting customer Phome number
    $message = $_POST['Message']; //getting customer Phome number
    
    //Email body I will receive
    $message = "Sender: " . $name . " " . $lastname . "\n"
    . "Email: " . $email . "\n\n"
    . "Client Message: " . "\n" . $message;
    
    //Message for client confirmation
    $message2 = "Dear " . $name . "\n"
    . "Thank you for contacting me. I will get back to you shortly!" . "\n\n"
    . "You submitted the following message: " . "\n" . $message . "\n\n"
    . "Regards," . "\n" . "- Raivo Nikolajenko";
    
    //Email headers
    $headers = "From: " . $email; // Client email, I will receive
    $headers2 = "From: " . $mailto; // This will receive client
    
    //PHP mailer function
    
     $result1 = mail($mailto, "Message" ,$message, $headers); // This email sent to My address
     $result2 = mail($email, "Message" ,$message2, $headers2); //This confirmation email to client
    
     //Checking if Mails sent successfully
    
     if ($result1 && $result2) {
       $success = "Your Message was sent Successfully!";
       header('Location: index.html');

     } else {
       $failed = "Sorry! Message was not sent, Try again Later.";
     }
}
   ?>