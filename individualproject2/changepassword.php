<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
if (!isset($_POST["nocsrftoken"]) || $_POST["nocsrftoken"] !== $_SESSION["nocsrftoken"]) {
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Security Alert</title>
        <style>
            body {
                background-color: #f8d7da;
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .alert-box {
                background-color: #f44336;
                color: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.2);
                width: 400px;
                text-align: center;
                animation: dropDown 0.5s ease-out;
            }
            @keyframes dropDown {
                from { transform: translateY(-50px); opacity: 0; }
                to { transform: translateY(0); opacity: 1; }
            }
        </style>
        <script>
            setTimeout(function() {
                window.location.href = "logout.php";
            }, 5000);
        </script>
    </head>
    <body>
        <div class="alert-box">
            <h2>CSRF Attack Detected!</h2>
            <p>Logging out for security...</p>
        </div>
    </body>
    </html>';
    exit();
}

$mysqli = new mysqli("localhost", "kalagam1", "Mahi@123", "waph");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION["username"];
    $newpassword = htmlspecialchars(trim($_POST["newpassword"]));

    if (!empty($newpassword)) {
        $stmt = $mysqli->prepare("UPDATE user SET password=md5(?) WHERE username=?");
        $stmt->bind_param("ss", $newpassword, $username);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $message = "Password updated successfully.";
        } else {
            $message = "Password update failed.";
        }
        $stmt->close();
    } else {
        $message = "Password cannot be empty.";
    }
} else {
    $message = "Invalid request.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
        }
        a {
            display: block;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="box">
    <h3>Welcome <?= htmlspecialchars($_SESSION["username"]) ?>!</h3>
    <p><?= $message ?></p>
    <a href="profile.php">Back to profile</a>
    <a href="logout.php">Logout</a>
</div>
</body>
</html>
