<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
   $name = $_POST["name"];
   $email = $_POST["email"];
   $message = $_POST["message"];

   $to = "bddangwebsiteemail@gmail.com";
   $subject = "New Contact Form Submission";
   $body = "Name: $name\nEmail: $email\nMessage: $message";

   // Send email
   if (mail($to, $subject, $body)) {
      echo "Message sent successfully!";
   } else {
      echo "Error sending the message.";
   }
}
?>
