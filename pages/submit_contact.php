<?php
require '../vendor/autoload.php'; // Load PHPMailer and Dotenv
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['SENDMAIL_FROM']; // Your Gmail address
        $mail->Password = $_ENV['SMTP_PASS']; // Your Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email settings
        $mail->setFrom($_ENV['SENDMAIL_FROM'], 'Your Website');
        $mail->addAddress($_ENV['SENDMAIL_TO']); 
        $mail->addReplyTo($email, $name); // ✅ FIXED THIS LINE

        $mail->Subject = "New Contact Form Submission";
        $mail->Body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

        if ($mail->send()) {
            // Redirect to contact page with success message
            header('Location: contact.php?status=success');
            exit();
        } else {
            // Redirect to contact page with failure message
            header('Location: contact.php?status=error');
            exit();
        }
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
} else {
    echo "Invalid request.";
}
?>
