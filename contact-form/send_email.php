<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recipient email address
    $to = "anokye.wisfred22@gmail.com";  // your email

    // Collect form data
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $projectType = htmlspecialchars($_POST['projectType']);
    $budget = htmlspecialchars($_POST['budget']);
    $message = htmlspecialchars($_POST['message']);

    // Email subject and content
    $subject = "New Project Inquiry from $firstName $lastName";
    $body = "You have received a new message from your website contact form:\n\n".
            "Name: $firstName $lastName\n".
            "Email: $email\n".
            "Phone: $phone\n".
            "Project Type: $projectType\n".
            "Budget: $budget\n\n".
            "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        header("Location: contact.php?success=1");
        exit;
    } else {
        header("Location: contact.php?error=1");
        exit;
    }
}
?>
