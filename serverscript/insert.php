<?php
if ($_SERVER[""] == "POST") {
    // Collect form data
    $name = $_POST['name']; // Adjust field names as needed
    $email = $_POST['email']; // Adjust field names as needed
    $number = $_POST['number']; // Adjust field names as needed
    $textarea = $_POST['textarea']; // Adjust field names as needed

    // Insert data into the table (replace 'your_table' with your actual table name)
    $sql = "INSERT INTO contact_us (name) VALUES ('$name')";
    $sql = "INSERT INTO contact_us (email) VALUES ('$email')";
    $sql = "INSERT INTO contact_us (number) VALUES ('$number')";
    $sql = "INSERT INTO contact_us (textarea) VALUES ('$textarea')";

    if ($conn->query($sql) === TRUE) {
        echo " Record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
