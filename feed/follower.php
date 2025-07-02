<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Followers List</title>
    <link rel="stylesheet" href="follower.css"/>
</head>
<body>

<!--left side-->
<aside class="linkedin-sidebar">
    <div class="profile-card" data-username="${follower.username}">
        <div class="banner_img" >
            <img src="images.jpeg" id="banner_img" class="img-fluid" alt="Img not found"/>
        </div>
        <div class="profile_img" >
            <img src="" id="profile_img" class="img-fluid"/>
        </div>
        <div class="profile-info">
            <h2 id="profile-name">Subash </h2>
            <p class="bio" id="bio">Passionate </p>
            <p class="location" id="location" style="">Nandankanan</p>
        </div>
</aside>

<!--main contain-->
<div class="container">
    <div class="connections-header">
        <div class="left-section">
            <span id="total_followers">768 </span>
            <span>Connections </span>
            </div>

        <div class="right-section">
            <div class="search-box">
                    <span class="search-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                    </span>
                <input id="followerSearchInput" type="text" placeholder="Search by name"/>
            </div>
            <span class="filter-link">Search with filters</span>
        </div>

    </div>

    <div class="followers-container">
        <!-- script-->
    </div>
</div>


<!--jquery-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    let openedProfileEmail, openedProfileUserId;

    (function () {

        const Params = new URLSearchParams(window.location.search);

        let username = Params.get('username');
        if (!username) {
            username = sessionStorage.getItem('username');
        }
        console.log('username', username);

        const email = sessionStorage.getItem('email');
        console.log('email', email);

        const logInuser = sessionStorage.getItem('userId');
        console.log('logInuser', logInuser);




        // profile update
        $.ajax({
            url: 'https://wooble.io/api/portfolio/FetchUserData.php',
            method: 'POST',
            dataType: 'json',
            data: {username, email},
            success: function (response) {
                console.log('response', response);
                if (response.status === 'success') {
                    openedProfileEmail = response.data.email;
                    openedProfileUserId = response.data.user_id;


                    document.getElementById('profile-name').innerHTML = response.data.name;
                    document.getElementById('bio').innerHTML = response.data.bio;
                    document.getElementById('location').innerHTML = response.data.location;
                    document.getElementById('total_followers').innerHTML = response.data.total_followers;

                    // profile icon
                    let icon_image = response.data.profile_pic;
                    icon_image = atob(icon_image);
                    let modifiedName = icon_image.replace('.webp', '_400.png');
                    console.log('Modified file name:', modifiedName);
                    const reEncoded = btoa(modifiedName);
                    console.log('Re-encoded file name:', reEncoded);
                    userProfilePic = 'https://wooble.org/dms/' + reEncoded;

                    document.getElementById('profile_img').src = userProfilePic;


                    // banner image
                    let image = response.data.banner_img;
                    console.log('Banner image raw value:', image);
                    document.getElementById('banner_img').src = image;

                    fetchFollowers(openedProfileUserId, name='');

                }

            },
            error: function (xhr, status, error) {
                console.error('API Error:', xhr.responseText, status, error);

            }
        });


        // show follower-info
        document.addEventListener("click", function (e) {
            const follower = e.target.closest(".follower-info");

            if (follower) {
                const username = follower.dataset.username;

                console.log("Navigating to profile for:", username);
                window.location.href = '../profile/profile.php?username=' + username;
            }
        });


        // visit my profile as a user
        document.addEventListener("DOMContentLoaded", function () {
            const profileCard = document.querySelector('.profile-card');

            profileCard.addEventListener('click', function () {
                const userId = this.dataset.userId;
                console.log(" to profile for:", userId);
                window.location.href = '../profile/profile.php?username=' + username;
            });

        });






    })();

    // search button
    function fetchFollowers(openedProfileUserId, name='') {

        console.log('name',name);
        // follower Api
        $.ajax({
            url: 'https://wooble.io/api/portfolio/followers.php',
            method: 'POST',
            dataType: 'json',
            data: {
                user_id: openedProfileUserId,
                search: name,
            },
            beforeSend: function () {
                console.log('Sending  📊 Opened Profile user ID:', openedProfileUserId);
            },
            success: function (response) {

                if (response.status === 'success') {

                    follower_data(response.followers);


                    function follower_data(followers) {
                        console.log('API Response follower👋:', followers);
                        const followerData = [];

                        followers.forEach(function (followers) {
                            followerData.push({
                                name: followers.name,
                                profession: followers.profession,
                                username: followers.username,
                                profile_pic: 'https://wooble.org/dms/' + btoa(followers.profile_pic),
                                follow_date: followers.follow_date,
                            });
                        });


                        console.log('followerData:', followerData);


                        const container = document.querySelector('.followers-container');
                        container.innerHTML="";

                        followerData.forEach((follower, index) => {
                            const followerHTML = `
            <div class="follower">
                <div class="follower-info"  data-username="${follower.username}">
                    <img src="${follower.profile_pic}" class="avatar" alt="Avatar">
                    <div class="details">
                        <div class="name">${follower.name}</div>

                        <div class="profession">${follower.profession}</div>
                        <div class="connected">${follower.follow_date}</div>
                    </div>
                </div>
                <button class="message-btn">Message</button>
            </div>
        `;
                            container.insertAdjacentHTML('beforeend', followerHTML);


                        });

                    }

                }
            },
            error: function (xhr, status, error) {
                console.error('API Error:', xhr.responseText, status, error);
            }
        });
    }
// script for search length mora than 3
    document.getElementById("followerSearchInput").addEventListener("input", function () {
        const query = this.value.trim();

        if (query.length >= 3) {
            fetchFollowers(openedProfileUserId, query);
        } else {
            fetchFollowers(openedProfileUserId, '');
        }
    });


</script>


</body>
</html>
