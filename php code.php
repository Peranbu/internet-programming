<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Assuming you're trying to insert data from an HTML form into a table named 'myTable'
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"]; // change 'name' to your actual form field name
  $email = $_POST["email"]; // change 'email' to your actual form field name

  $sql = "INSERT INTO myTable (name, email) VALUES ('$name', '$email')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>


    <script>
        function printFormData() {
            var voter = document.getElementById('voter').value;
            var loginver = document.getElementById('loginver').value;
            var OTP = document.getElementById('OTP').value;
            var Candidate = document.getElementById('Candidate').value;
            alert("Voter ID: " + voter + ", Login Verification: " + loginver + ", OTP: " + OTP + ", Candidate: " + Candidate);
        }
    </script>
