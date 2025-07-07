<?php
include('connect/connection.php');
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Login Form</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">Login Form</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" style="font-weight:bold; color:black; text-decoration:underline">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form id="loginForm" method="POST">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                                <a href="recover_psw.php" class="btn btn-link">
                                    Forgot Your Password?
                                </a>
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

<script>
    const toggle = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    toggle.addEventListener('click', function(){
        if(password.type === "password"){
            password.type = 'text';
        }else{
            password.type = 'password';
        }
        this.classList.toggle('bi-eye');
    });

    $('#loginForm').on('submit', function(e) {
        e.preventDefault();
        var email = $('#email_address').val();
        var password = $('#password').val();
        $.ajax({
            url: 'api/login_api.php',
            type: 'POST',
            data: { email: email, password: password },
            dataType: 'json',
            success: function(response) {
            
                alert(response.message);
                if(response.success) {
                   alert('Login successful!');
                    $.ajax({
                        url: 'https://wooble.io/api/portfolio/FetchUserData.php',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            email: $('#email_address').val()
                        },
                        success: function (response) {
                            console.log('Data received:', response);
                            if (response.status === 'success') {
                                sessionStorage.setItem("email", response.data.email);
                                sessionStorage.setItem("userId", response.data.user_id);
                                sessionStorage.setItem("username", response.data.username);
                                window.location.href = '../feed/feed.php?username='+response.data.username;
                            } else {
                                alert('Login failed: ' + response.message);
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error('AJAX Error:', status, error);
                        }
                    });
                } else {
                    alert('Login failed: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                $('#loginResult').html('An error occurred: ' + error);
            }
        });
    });
</script>
