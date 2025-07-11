<?php include '../feed/component/f-nav.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/png" href="wooble_logo.png"/>
    <link rel="stylesheet" href="feed.css"/>


    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet"
    />
    <title>Wooble</title>
</head>
<body>

<div id="jobPage">
    <div class="page-container">
        <!-- Left Sidebar -->
        <?php include 'component/profile-card.php'; ?>
        <main class="main">
            <h4>Job page</h4>
            <ul id="jobList"></ul>
        </main>
    </div>
</div>
</body>
</html>


