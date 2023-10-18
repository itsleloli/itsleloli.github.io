<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define your email address where you want to receive messages.
    $to = "Bonoraleandro@gmail.com";

    // Get the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Check if the fields are not empty
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Create the email subject
    $subject = "New Contact Form Submission from $name";

    // Create the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Check if a file was uploaded
    if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
        // Define allowed file types
        $allowed_file_types = ['pdf', 'doc', 'docx', 'jpg', 'jpeg', 'png'];

        // Get file information
        $file_name = $_FILES['attachment']['name'];
        $file_tmp = $_FILES['attachment']['tmp_name'];
        $file_type = $_FILES['attachment']['type'];
        $file_size = $_FILES['attachment']['size'];

        // Check file extension
        $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
        if (!in_array(strtolower($file_extension), $allowed_file_types)) {
            echo "Invalid file type. Allowed file types: " . implode(', ', $allowed_file_types);
            exit;
        }

        // Generate a unique file name
        $unique_filename = uniqid() . "_" . $file_name;

        // Check file size (e.g., limit to 5MB)
        $max_file_size = 5 * 1024 * 1024; // 5MB
        if ($file_size > $max_file_size) {
            echo "File is too large. Maximum file size: 5MB";
            exit;
        }

        // Move the uploaded file to a designated folder with the new unique name
        $upload_directory = "uploads/"; // Create an "uploads" folder in your project
        $target_path = $upload_directory . $unique_filename;
        if (move_uploaded_file($file_tmp, $target_path)) {
            // Attach the file to the email
            $boundary = md5(time());
            $headers .= "\r\nMIME-Version: 1.0\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
            $email_message = "This is a multi-part message in MIME format.\r\n";
            $email_message .= "--$boundary\r\n";
            $email_message .= "Content-Type: text/plain; charset=\"UTF-8\"\r\n";
            $email_message .= "Content-Transfer-Encoding: 7bit\r\n";
            $email_message .= "\r\n" . $email_message . "\r\n";
            $email_message .= "--$boundary\r\n";
            $email_message .= "Content-Type: $file_type; name=\"$unique_filename\"\r\n";
            $email_message .= "Content-Disposition: attachment; filename=\"$unique_filename\"\r\n";
            $email_message .= "Content-Transfer-Encoding: base64\r\n";
            $email_message .= "\r\n" . base64_encode(file_get_contents($target_path)) . "\r\n";
            $email_message .= "--$boundary--\r\n";
        } else {
            echo "Error uploading the file.";
            exit;
        }
    }

    // Send the email
    $success = mail($to, $subject, $email_message, $headers);

    if ($success) {
        echo "Your message has been sent successfully. Thank you!";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
} else {
    // Handle cases where the form is not submitted.
    echo "Invalid request. Please submit the form.";
}
