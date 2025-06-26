<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Login/Signup Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
    />
    <style>

        .login-signup-container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
<div class="container login-signup-container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    <ul
                        class="nav nav-tabs card-header-tabs flex-row justify-content-between"
                        id="myTab"
                        role="tablist"
                    >
                        <!-- header Login And SignUp -->
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link active fw-semibold"
                                id="login-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#login"
                                type="button"
                                role="tab"
                                aria-controls="login"
                                aria-selected="true"
                            >
                                Login
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link fw-semibold"
                                id="signup-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#signup"
                                type="button"
                                role="tab"
                                aria-controls="signup"
                                aria-selected="false"
                            >
                                Sign Up
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">

                        <!-- Login Section -->
                        <div
                            class="tab-pane fade show active"
                            id="login"
                            role="tabpanel"
                            aria-labelledby="login-tab"
                        >
                            <h2 class="card-title text-center">
                                Login to your account
                            </h2>

                            <!--Form LogIn Section -->

                            <form post="" action="" method="post" id="loginForm">
                                <div class="mb-3">
                                    <label for="loginEmail" class="form-label"
                                    >Email address</label
                                    >
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="loginEmail"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="loginPassword" class="form-label"
                                    >Password</label
                                    >
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="loginPassword"
                                    />
                                </div>
                                <div class="mb-3 form-check">
                                    <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="rememberMe"
                                    />
                                    <label class="form-check-label" for="rememberMe"
                                    >Remember me</label
                                    >
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">
                                        LogIn
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Sign Up Section -->
                        <div
                            class="tab-pane fade"
                            id="signup"
                            role="tabpanel"
                            aria-labelledby="signup-tab"
                        >
                            <h2 class="card-title text-center">
                                Create a new account
                            </h2>

                            <!-- form SignUp Section -->
                            <form post="" action="" method="post" id="signupForm">
                                <div class="mb-3">
                                    <label for="signupName" class="form-label"
                                    >Full Name</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="signupName"
                                        required
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="signupEmail" class="form-label"
                                    >Email address</label
                                    >
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="signupEmail"
                                        required
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="signupPassword" class="form-label"
                                    >Password</label
                                    >
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="signupPassword"
                                        required
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="confirmSignupPassword" class="form-label"
                                    >Confirm Password</label
                                    >
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="confirmSignupPassword"
                                        required
                                    />
                                </div>
                                <div class="mb-3 form-check">
                                    <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="signupTerms"
                                        required
                                    />
                                    <label class="form-check-label" for="signupTerms"
                                    >I agree to the terms and conditions</label
                                    >
                                </div>

                                <div class="d-grid gap-2">
                                    <button class="btn btn-success" type="submit">
                                        Sign Up
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<script>

    const loginForm = document.getElementById('loginForm');
    const loginEmail = document.getElementById('loginEmail');
    // const loginPassword = document.getElementById('loginPassword');
    const rememberMe = document.getElementById('rememberMe');

    loginForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const Inputemail = loginEmail.value;
        // const Inputpassword = loginPassword.value;
        const remember = rememberMe.checked;

        // if (remember) {
        //     alert('Remember Me is checked');
        // } else {
        //     alert('Remember Me is not checked');
        //     return;
        // }


        // console.log(`Login Email: ${Inputemail}`);
        // console.log(`Login Password: ${Inputpassword}`);

        $.ajax({
            url: 'https://wooble.io/api/portfolio/FetchUserData.php',
            type: 'POST',
            dataType: 'json',
            data: {
                email: Inputemail
            },
            success: function (response) {
                console.log('Data received:', response);
                if (response.status === 'success') {
                    alert('Login successful!');
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
    });


</script>

</body>
</html>