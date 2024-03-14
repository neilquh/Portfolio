<?php

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Access form data
  $name = htmlspecialchar($_POST['name']);
  $email = htmlspecialchar($_POST['email']);
  $message = htmlspecialchar($_POST['message']);
  $phone_Number =htmlspecialchar($_POST['PhoneNumber']);

  // Validate data (optional, add additional checks as needed)
  if (empty($name) || empty($email) || empty($message)) {
    echo "Please fill in all required fields.";
    exit;
  }

  // Process data (e.g., send email, store in database)
  // ... (Your processing logic here) ...

  // Optional: Show success message or redirect to a confirmation page
  echo "Thank you for contacting us! We will get back to you soon.";

} else {
  // Not a POST request, display access denied message
  echo "Access denied.";
}

?>
