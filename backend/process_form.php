<?php
require_once '../includes/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
    $lastName = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING);

    if (!$firstName || !$lastName || !$email || !$comments) {
        echo json_encode(["status" => "error", "message" => "All required fields must be filled."]);
        exit;
    }

    $formData = [
        "first_name" => $firstName,
        "last_name" => $lastName,
        "email" => $email,
        "phone" => $phone,
        "comments" => $comments,
        "submitted_at" => date('Y-m-d H:i:s')
    ];

    $jsonFile = 'form_submissions.json';
    $existingData = file_exists($jsonFile) ? json_decode(file_get_contents($jsonFile), true) : [];
    $existingData[] = $formData;

    file_put_contents($jsonFile, json_encode($existingData, JSON_PRETTY_PRINT));

    // Auto-response email
    $autoResponseSubject = "Thank you for your submission";
    $autoResponseMessage = "Hello $firstName,\n\nThank you for contacting us!";
    mail($email, $autoResponseSubject, $autoResponseMessage, "From: $fromEmail");

    // Send admin email
    $adminSubject = "New Form Submission";
    $adminMessage = "New submission:\n" . print_r($formData, true);
    foreach ($adminEmails as $adminEmail) {
        mail($adminEmail, $adminSubject, $adminMessage, "From: $fromEmail");
    }

    echo json_encode(["status" => "success", "message" => "Form submitted successfully."]);
}
?>
