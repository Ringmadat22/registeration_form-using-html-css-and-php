<?php
// Connect to the database
$host = 'localhost';
$dbname = 'student_registration';
$username = 'root';  // Adjust as needed
$password = '';  // Adjust as needed

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $date_of_birth = $conn->real_escape_string($_POST['date_of_birth']);
    $email = $conn->real_escape_string($_POST['email']);
    $country = $conn->real_escape_string($_POST['country']);
    $region = $conn->real_escape_string($_POST['region']);
    $address = $conn->real_escape_string($_POST['address']);
    $age = (int)$_POST['age'];
    $course = $conn->real_escape_string($_POST['course']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $agree = isset($_POST['agree']) ? 1 : 0;  // Checkbox: 1 if checked, 0 if not

    // Validate required fields
    if (empty($first_name) || empty($last_name) || empty($date_of_birth) || empty($email) || empty($country) || empty($region) || empty($age) || empty($course) || empty($phone) || !$agree) {
        echo "All fields are required and you must agree to the terms.";
        exit;
    }

    // Insert data into the database
    $sql = "INSERT INTO students (first_name, last_name, date_of_birth, email, country, region, address, age, course, phone, agreed_to_terms) 
            VALUES ('$first_name', '$last_name', '$date_of_birth', '$email', '$country', '$region', '$address', $age, '$course', '$phone', $agree)";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
