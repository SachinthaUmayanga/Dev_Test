<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and sanitize
    $firstName = sanitize_input($_POST["first-name"]);
    $lastName = sanitize_input($_POST["last-name"]);
    $email = sanitize_input($_POST["email"]);
    $phone = sanitize_input($_POST["phone"]);
    $message = sanitize_input($_POST["message"]);
    $terms = isset($_POST["terms"]) ? true : false;

    // Validate required fields
    if (empty($firstName) || empty($lastName) || empty($email)) {
        echo "Please fill in the required fields.";
        exit;
    }

    // Prepare the data to be saved
    $formData = [
        "first_name" => $firstName,
        "last_name" => $lastName,
        "email" => $email,
        "phone" => $phone,
        "message" => $message,
        "terms" => $terms ? "Yes" : "No",
        "submitted_at" => date("Y-m-d H:i:s")
    ];

    // Save form data to JSON file
    $filePath = "form_submissions.json";
    $existingData = file_exists($filePath) ? json_decode(file_get_contents($filePath), true) : [];
    $existingData[] = $formData;
    file_put_contents($filePath, json_encode($existingData, JSON_PRETTY_PRINT));

    // Send confirmation email to the user
    send_email($email, "Thank you for contacting us", "Dear $firstName, \n\nThank you for reaching out to us. We have received your message and will get back to you shortly.\n\nBest Regards,\nTeam");

    // Send email to admins
    send_email(
        "dumidu.kodithuwakku@ebeyonds.com, prabhath.senadheera@ebeyonds.com",
        "New Contact Form Submission",
        "New contact form submission:\n\nFirst Name: $firstName\nLast Name: $lastName\nEmail: $email\nPhone: $phone\nMessage: $message\n\nDate Submitted: " . date("Y-m-d H:i:s")
    );

    echo "Form submitted successfully!";
}

function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

function send_email($to, $subject, $message) {
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "From: no-reply@yourdomain.com\r\n";

    // Send the email
    mail($to, $subject, $message, $headers);
}
?>
