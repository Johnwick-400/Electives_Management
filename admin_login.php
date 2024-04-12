<?php
    // Database connection parameters
    $servername = "localhost"; // Change this to your database server name
    $username = "root"; // Change this to your database username
    $password = "test"; // Change this to your database password
    $database = "elective"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch student data
    $sql_students = "SELECT * FROM student";
    $result_students = $conn->query($sql_students);

    // Fetch registration data
    $sql_registrations = "SELECT * FROM registrations";
    $result_registrations = $conn->query($sql_registrations);

    // Display student data in table
    echo "<h3>Students</h3>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Department</th></tr>";
    if ($result_students->num_rows > 0) {
        while ($row = $result_students->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["department"]."</td></tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No students found</td></tr>";
    }
    echo "</table>";

    // Display registration data in table
    echo "<h3>Registrations</h3>";
    echo "<table>";
    echo "<tr><th>id </th>  <th>Student ID</th><th>elective id</th><th>Registration Timestamp</th></tr>";
    if ($result_registrations->num_rows > 0) {
        while ($row = $result_registrations->fetch_assoc()) {
             echo "<tr><td>".$row["id"]."</td>  <td>".$row["student_id"]."</td><td>".$row["elective_id"]."</td><td>".$row["registration_timestamp"]."</td></tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No registrations found</td></tr>";
    }
    echo "</table>";

    // Close connection
    $conn->close();
    ?>