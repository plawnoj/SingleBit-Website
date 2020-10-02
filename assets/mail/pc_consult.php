<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['budget'])   ||
   empty($_POST['software']) ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$budget = strip_tags(htmlspecialchars($_POST['budget']));
$software = strip_tags(htmlspecialchars($_POST['software']));
$monitor = strip_tags(htmlspecialchars($_POST['monitor']));
$keyboard = strip_tags(htmlspecialchars($_POST['keyboard']));
$mouse = strip_tags(htmlspecialchars($_POST['mouse']));
$speakers = strip_tags(htmlspecialchars($_POST['speakers']));
$headset = strip_tags(htmlspecialchars($_POST['headset']));
$microphone = strip_tags(htmlspecialchars($_POST['microphone']));

// Create the email and send the message
$to = 'contact@singlebit.dev'; // Add your email address in between the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nBudget: $budget\n\nSoftware Used: $software\n\nMonitor: $monitor\n\nKeyboard: $keyboard\n\nMouse: $mouse\n\nSpeakers: $speakers\n\nHeadset: $headset\n\nMicrophone: $microphone";
$headers = "From: noreply@singlebit.dev\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
