<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Verification</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">Verification Account</a>
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
                    <div class="card-header">Verification Account</div>
                    <div class="card-body">

                        <!-- Step 1: Email Input Form (shown only if no session email) -->
                        <div id="emailForm" style="display: none;">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input type="text" id="email" class="form-control" name="email" required autofocus>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="button" id="sendMailBtn" class="btn btn-primary">Send OTP</button>
                            </div>
                        </div>

                        <!-- Step 2: OTP Input Form -->
                        <div id="otpForm">
                            <div class="form-group row">
                                <label for="otp_code" class="col-md-4 col-form-label text-md-right">OTP Code</label>
                                <div class="col-md-6">
                                    <input type="text" id="otp_code" class="form-control" name="otp_code" required autofocus>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="button" id="verifyOtpBtn" class="btn btn-success">Verify OTP</button>
                                <button type="button" id="backToEmailBtn" class="btn btn-secondary">Back</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="mailResult" class="text-center mt-3"></div>
</main>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
<?php
session_start();
// Check if user came from registration (has session email)
if (isset($_SESSION['mail']) && !empty($_SESSION['mail'])) {
    echo "// Auto-send OTP when page loads (user came from registration)
    $(document).ready(function() {
        var email = '" . $_SESSION['mail'] . "';
        $('#mailResult').html('<div class=\"alert alert-info\">Sending OTP to ' + email + '...</div>');
        
        $.ajax({
            url: 'api/send_mail_api.php',
            type: 'POST',
            data: { email: email },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                  
                    $('#otp_code').focus();
                } else {
                    $('#mailResult').html('<div class=\"alert alert-danger\">' + response.message + '</div>');
                    $('#emailForm').show();
                    $('#otpForm').hide();
                }
            },
            error: function(xhr, status, error) {
                $('#mailResult').html('<div class=\"alert alert-danger\">An error occurred: ' + error + '</div>');
                $('#emailForm').show();
                $('#otpForm').hide();
            }
        });
    });";
} else {
    echo "// Show email form if no session email (user came directly to verification page)
    $(document).ready(function() {
        $('#emailForm').show();
        $('#otpForm').hide();
    });";
}
?>

var registeredEmail = "<?php echo isset($_SESSION['mail']) ? $_SESSION['mail'] : ''; ?>";

$('#sendMailBtn').on('click', function() {
    var email = $('#email').val();
    if (!email) {
        $('#mailResult').html('<div class="alert alert-danger">Please enter your email address.</div>');
        return;
    }
    
    $.ajax({
        url: 'api/send_mail_api.php',
        type: 'POST',
        data: { email: email },
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                $('#mailResult').html('<div class="alert alert-success">' + response.message + '</div>');
                $('#emailForm').hide();
                $('#otpForm').show();
                $('#otp_code').focus();
            } else {
                $('#mailResult').html('<div class="alert alert-danger">' + response.message + '</div>');
            }
        },
        error: function(xhr, status, error) {
            $('#mailResult').html('<div class="alert alert-danger">An error occurred: ' + error + '</div>');
        }
    });
});

$('#verifyOtpBtn').on('click', function() {
    var otp_code = $('#otp_code').val();
    if (!otp_code) {
        $('#mailResult').html('<div class="alert alert-danger">Please enter the OTP code.</div>');
        return;
    }
    
    $.ajax({
        url: 'api/verify_otp_api.php',
        type: 'POST',
        data: { otp_code: otp_code },
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                $('#mailResult').html('<div class="alert alert-success">' + response.message + '</div>');
                $.ajax({
                    url: 'https://wooble.io/api/portfolio/FetchUserData.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        email: registeredEmail
                    },
                    success: function (response) {
                        console.log('Data received:', response);
                        if (response.status === 'success') {
                            alert('Login successful!');
                            sessionStorage.setItem("email", response.data.email);
                            sessionStorage.setItem("userId", response.data.user_id);
                            sessionStorage.setItem("username", response.data.username);

                            // Delay the redirect by 2 seconds
                            setTimeout(function () {
                                window.location.href = '../feed/feed.php?username=' + response.data.username;
                            }, 2000);

                        } else {
                            alert('Login failed: ' + response.message);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error('AJAX Error:', status, error);
                    }
                });

            } else {
                $('#mailResult').html('<div class="alert alert-danger">' + response.message + '</div>');
            }
        },
        error: function(xhr, status, error) {
            $('#mailResult').html('<div class="alert alert-danger">An error occurred: ' + error + '</div>');
        }
    });
});

$('#backToEmailBtn').on('click', function() {
    $('#otpForm').hide();
    $('#emailForm').show();
    $('#mailResult').html('');
});
</script>
</html>
