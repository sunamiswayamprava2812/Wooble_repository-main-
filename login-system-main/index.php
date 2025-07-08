<?php
include('connect/connection.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - Wooble</title>
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

        .login-card {
            border-radius: 1rem;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
            padding: 2.5rem 2rem;
            background: #fff;
            width: 100%;
            max-width: 400px;
        }

        .login-card .form-control {
            border-radius: 2rem;
        }

        .login-card .btn-primary {
            border-radius: 2rem;
            font-weight: bold;
            letter-spacing: 1px;
            background: linear-gradient(90deg, #6366f1 0%, #60a5fa 100%);
            border: none;
        }

        .login-card .btn-link {
            color: #6366f1;
            font-weight: 500;
        }

        .login-card .brand {
            font-size: 2rem;
            font-weight: 700;
            color: #6366f1;
            margin-bottom: 1.5rem;
            letter-spacing: 2px;
            text-align: center;
        }

        .toggle-password {
            cursor: pointer;
            position: absolute;
            right: 20px;
            top: 10px;
            color: #aaa;
        }
    </style>
</head>
<body>
<div class="centered-card">
    <div class="login-card">
        <div class="brand mb-4"> Login</div>
        <form id="loginForm" method="POST" autocomplete="off">
            <div class="form-group">
                <label for="email_address">E-Mail Address</label>
                <input type="text" class="form-control" id="email_address" name="email" required autofocus>
            </div>
            <div class="form-group position-relative">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <span class="toggle-password" onclick="togglePassword()">
                    <svg id="eyeIcon" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24" style="position: relative; top: 30px">
                        <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </span>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <div class="text-center mt-3">
                <a href="recover_psw.php" class="btn btn-link">Forgot Your Password?</a>
            </div>
            <div class="text-center mt-2">
                <span>Don't have an account?</span>
                <a href="register.php" class="btn btn-link">Register</a>
            </div>
        </form>
    </div>
</div>
<script>
    function togglePassword() {
        var passwordInput = document.getElementById('password');
        var eyeIcon = document.getElementById('eyeIcon');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.innerHTML = '<path d="M17.94 17.94A10.94 10.94 0 0 1 12 19c-7 0-11-7-11-7a21.77 21.77 0 0 1 5.06-6.06M1 1l22 22"/><circle cx="12" cy="12" r="3"/>';
        } else {
            passwordInput.type = 'password';
            eyeIcon.innerHTML = '<path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/><circle cx="12" cy="12" r="3"/>';
        }
    }
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
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
                                console.log('Login failed: ' + response.message);
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error('AJAX Error:', status, error);
                        }
                    });
                }
            },
            error: function(xhr, status, error) {
                $('#loginResult').html('An error occurred: ' + error);
            }
        });
    });
</script>
</body>
</html>
