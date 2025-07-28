<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Password Recovery - Wooble</title>
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

        .recover-card {
            border-radius: 1rem;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
            padding: 2.5rem 2rem;
            background: #fff;
            width: 100%;
            max-width: 400px;
        }

        .recover-card .form-control {
            border-radius: 2rem;
        }

        .recover-card .btn-primary {
            border-radius: 2rem;
            font-weight: bold;
            letter-spacing: 1px;
            background: linear-gradient(90deg, #6366f1 0%, #60a5fa 100%);
            border: none;
        }

        .recover-card .btn-link {
            color: #6366f1;
            font-weight: 500;
        }

        .recover-card .brand {
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
    <div class="recover-card">
        <div class="brand mb-4">Password Recovery</div>
        <form action="#" method="POST" name="recover_psw" autocomplete="off">
            <div class="form-group">
                <label for="email_address">E-Mail Address</label>
                <input type="text" id="email_address" class="form-control" name="email" required autofocus>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="recover">Recover</button>
            <div class="text-center mt-3">
                <a href="index.php" class="btn btn-link">Back to Login</a>
            </div>
        </form>
    </div>
</div>
<?php session_start() ?>
<?php
    if(isset($_POST["recover"])){
        include('connect/connection.php');
        $email = $_POST["email"];

        $stmt = $connect->prepare("SELECT * FROM login WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->num_rows;

        if($count <= 0){
            ?>
            <script>
                alert("<?php  echo "Sorry, no emails exists "?>");
            </script>
            <?php
        } else {
            $fetch = $result->fetch_assoc();

            if($fetch["status"] == 0){
            ?>
               <script>
                   alert("Sorry, your account must verify first, before you recover your password !");
                   window.location.replace("index.php");
               </script>
           <?php
        }else{

            $token = bin2hex(random_bytes(50));

            $_SESSION['token'] = $token;
            $_SESSION['email'] = $email;

           $otp = rand(100000, 999999);

            // Store OTP in the database for the user
            $stmt = $connect->prepare("UPDATE login SET otp = ? WHERE email = ?");
            $stmt->bind_param("ss", $otp, $email);
            $stmt->execute();

            require "Mail/phpmailer/PHPMailerAutoload.php";
            $mail = new PHPMailer;
            $mail->Hostname = 'localhost';
            $mail->isSMTP();

            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';

            $mail->Username='sunami@wooble.org';
            $mail->Password='nqqdsihpxjnynzaq';

            $mail->SMTPDebug = 2;
            $mail->Debugoutput = 'html';

            $mail->setFrom('sunami@wooble.org', 'Password Reset');

            $mail->addAddress($_POST["email"]);


            $mail->isHTML(true);
            $mail->Subject="Recover your password";
            $mail->Body="<b>Dear User</b>
             <h3>We received a request to reset your password.</h3>
             <p>Your OTP for password reset is: <b>$otp</b></p>
             <p>Please use this OTP to verify your identity and reset your password.</p>
             <br><br>
             <p>With regards,</p>
             <b>Wooble</b>";

                         if(!$mail->send()){
                 echo $mail->ErrorInfo;
                 ?> 
                     <script>
                         alert("Failed to send email. Please try again.");
                     </script>
                 <?php
             } else {
                ?>
                    <script>
                        window.location.replace("recover_notification.html");
                    </script>
                <?php
                         }
         }
     }
 }


?>
