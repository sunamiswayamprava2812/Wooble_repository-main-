<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Password Recovery - OTP Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <style>
        body { background: #f8fafc; font-family: 'Montserrat', sans-serif; min-height: 100vh; }
        .centered-card { min-height: 100vh; display: flex; align-items: center; justify-content: center; }
        .card { border-radius: 1rem; box-shadow: 0 8px 32px 0 rgba(31,38,135,0.1); }
    </style>
</head>
<body>
<div class="centered-card">
    <div class="card p-4" style="max-width: 400px; width: 100%;">
        <h4 class="mb-3 text-center">Verify OTP</h4>
        <?php if (!isset($_SESSION['email'])): ?>
            <div class="alert alert-danger">Session expired. Please <a href="recover_psw.php">start again</a>.</div>
        <?php else: ?>
            <form method="POST">
                <div class="form-group">
                    <label for="otp_code">Enter OTP sent to your email</label>
                    <input type="text" class="form-control" id="otp_code" name="otp_code" maxlength="6" required autofocus>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="verify_otp">Verify OTP</button>
            </form>
        <?php endif; ?>
        <?php
        if (isset($_POST['verify_otp'])) {
            include('connect/connection.php');
            $email = $_SESSION['email'];
            $otp_code = $_POST['otp_code'];
            $stmt = $connect->prepare("SELECT * FROM login WHERE email = ? AND otp = ?");
            $stmt->bind_param("ss", $email, $otp_code);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                // Clear OTP for security
                $stmt = $connect->prepare("UPDATE login SET otp = NULL WHERE email = ?");
                $stmt->bind_param("s", $email);
                $stmt->execute();
                echo '<script>window.location.replace("reset_psw.php");</script>';
                exit;
            } else {
                echo '<div class="alert alert-danger mt-3">Invalid OTP. Please try again.</div>';
            }
        }
        ?>
    </div>
</div>
</body>
</html> 