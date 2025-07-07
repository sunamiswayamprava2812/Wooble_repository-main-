<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Login Form</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">User Password Recover</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Password Recover</div>
                    <div class="card-body">
                        <form action="#" method="POST" name="recover_psw">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <input type="submit" value="Recover" name="recover">
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
</body>
</html>

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

            $otp = rand(100000, 999999); // Generate a 6-digit OTP

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
            $mail->Password='tqztennlqdpgjhho';

            $mail->SMTPDebug = 2;
            $mail->Debugoutput = 'html';

            $mail->setFrom('sunami@wooble.org', 'Password Reset');

            $mail->addAddress($_POST["email"]);


            $mail->isHTML(true);
            $mail->Subject="Recover your password";
            $mail->Body="<b>Dear User</b>
             <h3>We received a request to reset your password.</h3>
             <p>Your OTP for password reset is: <b>$otp</b></p>
             <p>Kindly click the below link to reset your password</p>
             <a href='http://localhost:63342/login-system-main/reset_psw.php?token=$token'>Reset Password</a>
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
                        window.location.replace("notification.html");
                    </script>
                <?php
                         }
         }
     }
 }


?>
