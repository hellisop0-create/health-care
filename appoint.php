<?php
// --- BACKEND LOGIC ---
$message_sent = false;
$error = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Collect and Clean Data
    $name = htmlspecialchars($_POST['patient_name']);
    $email = filter_var($_POST['patient_email'], FILTER_SANITIZE_EMAIL);
    $dept = $_POST['department'];
    $date = $_POST['app_date'];
    $notes = htmlspecialchars($_POST['notes']);

    // 2. Setup Email
    $to = "zaheerhussainhussain16@gmail.com"; // Change to your actual hospital email
    $subject = "NEW APPOINTMENT: $dept Department";
    
    $body = "You have a new appointment request:\n\n";
    $body .= "Patient Name: $name\n";
    $body .= "Patient Email: $email\n";
    $body .= "Department: $dept\n";
    $body .= "Requested Date: $date\n";
    $body .= "Symptoms/Notes: $notes\n";

    $headers = "From: HealthCareUniveristyHospital@gmail.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // 3. Send and Verify
    if (mail($to, $subject, $body, $headers)) {
        $message_sent = true;
    } else {
        $error = "Server mail configuration error. Please contact admin.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <nav class="navbar">
  <div class="nav-container">
    <div class="logo">
      <span href="#" class="plus-icon">+</span> Health<span>Care</span>
    </div>

    <input type="checkbox" id="nav-check">
    <label for="nav-check" class="nav-btn">
      <span></span>
      <span></span>
      <span></span>
    </label>

    <ul class="nav-links">
      <li><a href="./index.html">Home</a></li>
      <li><a href="./finddoc.html">Find a Doctor</a></li>
      <li><a href="./services.html">Services</a></li>
      <li><a href="#">Patient Portal</a></li>
      <li><a href="./appoint.html" class="cta-button">Book Appointment</a></li>
    </ul>
  </div>
</nav>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        .booking-container { max-width: 600px; margin: 0 auto; background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); border: 1px solid #e2e8f0; }
        .header { text-align: center; margin-bottom: 30px; }
        .header h1 { color: #0f172a; font-size: 2rem; }
        .form-group { margin-bottom: 20px; }
        label { display: block; font-size: 0.9rem; font-weight: 600; margin-bottom: 8px; color: #475569; }
        input, select, textarea { width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 1rem; outline: none; }
        input:focus, select:focus { border-color: #3b82f6; box-shadow: 2px solid #3b82f6; }
        .btn-submit { width: 100%; padding: 15px; background: #0f172a; color: white; border: none; border-radius: 8px; font-weight: 700; cursor: pointer; transition: 0.3s; font-size: 1rem; }
        .btn-submit:hover { background: #3b82f6; }
        .success-msg { background: #dcfce7; color: #166534; padding: 15px; border-radius: 8px; margin-bottom: 20px; text-align: center; }
    </style>
</head>
<body>

<div class="booking-container">
    <div class="header">
        <h1>Request Appointment</h1>
        <p>Fill in the details below to schedule your visit.</p>
    </div>
    <form action="" method="POST">
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="patient_name" placeholder="John Doe" required>
        </div>
        <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="patient_email" placeholder="john@example.com" required>
        </div>
        <div class="form-group">
            <label>Department</label>
            <select name="department" required>
                <option value="">Select Department</option>
                <option value="Cardiology">Cardiology</option>
                <option value="Neurology">Neurology</option>
                <option value="Patient Ward">Patient Ward</option>
                <option value="Diagnostics">Diagnostics</option>
            </select>
        </div>
        <div class="form-group">
            <label>Preferred Date</label>
            <input type="date" name="app_date" required>
        </div>
        <div class="form-group">
            <label>Additional Notes (Optional)</label>
            <textarea name="notes" rows="4" placeholder="Briefly describe your symptoms..."></textarea>
        </div>
        <button type="submit" class="btn-submit">Confirm Booking Request</button>
    </form>
</div>
</body>
</html>