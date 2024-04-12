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

    // Fetch electives data
    $sql = "SELECT * FROM electives";
    $result = $conn->query($sql);

    // Display electives data in table
    echo "<table>";
    echo "<tr><th>Course Code</th><th>Elective Name</th><th>Offering Department</th><th>Offering Strength</th><th>Start Time</th><th>End Time</th></tr>";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["course_code"]."</td><td>".$row["elective_name"]."</td><td>".$row["offering_department"]."</td><td>".$row["offering_strength"]."</td><td>";
        }
    } else {
        echo "<tr><td colspan='6'>No electives found</td></tr>";
    }
    echo "</table>";

    // Close connection
    $conn->close();
    ?>