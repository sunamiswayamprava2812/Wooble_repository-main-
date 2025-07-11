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
    <title>Notification</title>
</head>
<body>
<div id="notificationsPage">
        <div class="page-container">
            <!-- Left Sidebar -->
            <?php include 'component/profile-card.php'; ?>
            <main class="main">
                <h4>Notifications</h4>
                <ul id="notificationList"></ul>
            </main>
        </div>
</div>


<!-- feed.js -->
<script src="feed.js"></script>
<script>
    // Load notifications when page loads
    document.addEventListener('DOMContentLoaded', function () {
        loadNotifications();
    });
</script>

<!--jquery-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // load notification()
    function loadNotifications() {
        const userId = sessionStorage.getItem('userId');

        $.ajax({
            url: '../API/get_notifications.php',
            method: 'POST',
            dataType: 'json',
            contentType: 'application/json',
            data: JSON.stringify({
                user_id: userId
            }),
            success: function (response) {
                const list = $('#notificationList');
                list.empty();

                if (response.status === 'success' && response.data.length > 0) {
                    response.data.forEach(n => {
                        let text = '';
                        if (type === 'post-like') {
                            text = `<b>${sender_username}</b> liked your post.`;
                        } else if (type === 'comment') {
                            text = `<b>${sender_username}</b> commented: "${commentText || 'on your post'}"`;
                        } else {
                            text = `<b>${sender_username}</b> sent a notification.`;
                        }

                        list.append(`<li style="margin-bottom:10px;">${text}<br><small>${n.created_at}</small></li>`);
                    });
                } else {
                    list.append('<p>No notifications yet.</p>');
                }
            },
            error: function (xhr) {
                console.error('Failed to load notifications:', xhr.responseText);
            }
        });
    }
</script>


</body>
</html>






