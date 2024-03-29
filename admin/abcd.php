<?php
// Database connection credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

// Set DSN (Data Source Name)
$dsn = "mysql:host=$servername;dbname=$dbname";

// Create a PDO instance
try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Prepare the SQL query
$sql = "INSERT INTO tbladmin (name, email, mobile, password) VALUES (?, ?, ?, ?)";

// Prepare a statement for the query
$stmt = $conn->prepare($sql);

// Bind the values to the placeholders
$stmt->bindParam(1, $value1);
$stmt->bindParam(2, $value2);
$stmt->bindParam(3, $value3);
$stmt->bindParam(4, $value4);
// Set the values for the placeholders


							
					
							
							
$value1 = "ali";
$value2 = "ali@gmail.com";
$value3 = "07784367";
$value4 = "1234";
// Execute the query
try {
    $stmt->execute();
    echo "New record created successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the statement
$stmt->closeCursor();

// Close the connection
$conn->close();
?>
