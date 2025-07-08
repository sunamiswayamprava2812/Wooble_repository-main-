<?php session_start();
include('connect/connection.php');
global $connect;

if (isset($_POST["register"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $check_query = mysqli_query($connect, "SELECT * FROM login where email ='$email'");
    $rowCount = mysqli_num_rows($check_query);

    if (!empty($email) && !empty($password)) {
        if ($rowCount > 0) {
            echo "<script>alert('User with email already exists!');</script>";
        } else {
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            $otp = rand(100000, 999999);
            $_SESSION['otp'] = $otp;
            $_SESSION['mail'] = $email;

            $result = mysqli_query($connect, "INSERT INTO login (email, password, status) VALUES ('$email', '$password_hash', 0)");
            if ($result) {
                echo "<script>
                            alert('Register Successfully! Please check your email for OTP verification.');
                            window.location.replace('verification.php');
                        </script>";
            } else {
                echo "<script>alert('Database error, please try again.');</script>";
            }


            require "Mail/phpmailer/PHPMailerAutoload.php";
            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Username = 'sunami@wooble.org';
            $mail->Password = 'tqztennlqdpgjhho';

            $mail->setFrom('sunami@wooble.org', 'OTP Verification');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = "Your verify code";
            $mail->Body = "<p>Dear $email, </p> <h3>Your verify OTP code is $otp <br></h3>";

            $mail->SMTPDebug = 2;
            $mail->Debugoutput = 'html';
        }
    } else {
        echo "<script>alert('Please fill all fields!');</script>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register - Wooble</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <style>
        body {
            background: #f8fafc;
            font-family: 'Montserrat', sans-serif;
            min-height: 100vh;
        }

        .centered-card {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .register-card {
            border-radius: 1rem;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
            padding: 2.5rem 2rem;
            background: #fff;
            width: 100%;
            max-width: 400px;
        }

        .register-card .form-control {
            border-radius: 2rem;
        }

        .register-card .btn-primary {
            border-radius: 2rem;
            font-weight: bold;
            letter-spacing: 1px;
            background: linear-gradient(90deg, #6366f1 0%, #60a5fa 100%);
            border: none;
        }

        .register-card .btn-link {
            color: #6366f1;
            font-weight: 500;
        }

        .register-card .brand {
            font-size: 2rem;
            font-weight: 700;
            color: #6366f1;
            margin-bottom: 1.5rem;
            letter-spacing: 2px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="centered-card">
    <div class="register-card">
        <div class="brand mb-4">Register</div>
        <form method="POST" autocomplete="off">
            <div class="form-group">
                <label for="email">E-Mail Address</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
            <div class="text-center mt-3">
                <span>Already have an account?</span>
                <a href="index.php" class="btn btn-link">Login</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
