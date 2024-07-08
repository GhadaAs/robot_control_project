<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_control";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["action"];
    $sql = "INSERT INTO commands (directions) VALUES ('$action')";

    if ($conn->query($sql) === TRUE) {
        echo "New command recorded successfully: " . $action;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // تنفيذ الأمر بناءً على القيمة المدخلة
    switch ($action) {
        case "forward":
            echo "Moving forward";
            break;
        case "backward":
            echo "Moving backward";
            break;
        case "left":
            echo "Turning left";
            break;
        case "right":
            echo "Turning right";
            break;
        case "stop":
            echo "Stopping";
            break;
    }
}

$conn->close();
?>