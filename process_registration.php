<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting form data
    $name = $_POST['name'];
    $nim = $_POST['nim'];
    $program_study = $_POST['program_study'];
    $religion = $_POST['religion'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $birth_date = $_POST['birth_date'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $region = $_POST['region'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $postal_code = $_POST['postal_code'];

    // Database connection
    $servername = "localhost";
    $username = "root"; // replace with your MySQL username
    $password = ""; // replace with your MySQL password
    $dbname = "vocational_registration";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the table
    $sql = "INSERT INTO registrations (name, nim, program_study, religion, email, phone, birth_date, gender, address, region, city, province, postal_code) 
            VALUES ('$name', '$nim', '$program_study', '$religion', '$email', '$phone', '$birth_date', '$gender', '$address', '$region', '$city', '$province', '$postal_code')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Registration Successful!</h2>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>


