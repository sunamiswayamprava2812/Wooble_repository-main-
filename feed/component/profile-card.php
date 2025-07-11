<aside class="left-sidebar">

    <div class="profile-card profile-pic">
        <div class="profilepic" style="cursor: pointer">
            <div class="profile-bg">
                <!-- Placeholder for background image -->
                <img src="#"
                     alt="banner-img not found" id="banner_img"
                     style="width: 100%; height: 100%; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
            </div>

            <img src="#"
                 alt="Profile Picture" class="profile-img" id="profile-image">
            <div class="profile-name" id="name">Virat Kohli</div>
            <div class="profile-title" id="bio">
                Based on the screenshot you provided, while there is an image in a post that appears to show
                athletes or
                a sports team, the names of the players themselves are not visible or mentioned in the text of the
                screenshot.
            </div>
            <div class="location" id="location">
                khordha , Odisha
            </div>
        </div>

        <div class="profile-stats">
            <div class="followers" style="cursor: pointer">
                <span>followers</span>
                <span id="total_followers">500+</span>
            </div>
            <div>
                <a href="#">Views of post</a>
                <span>250</span>
            </div>
        </div>
    </div>

    <div class="profile-cards-item">
        <div class="cards">
            <div class="card-header">
                <p>Profile viewers</p>
                <p>218</p>
            </div>
            <div class="card-header">
                <p>Post impressions</p>
                <p>86</p>
            </div>
        </div>

        <div class="cards">

            <p>Achieve your career goals</p>
            <p>Try Premium for ₹0</p>
        </div>

        <div class="cards-item">
            <ul class="cards-list">
                <li class="card-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                        <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                    </svg>
                    <span>Saved items</span>
                </li>
                <li class="card-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                    </svg>
                    <span>Groups</span>
                </li>
                <li class="card-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-file-text-fill" viewBox="0 0 16 16">
                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1"/>
                    </svg>
                    <span>Newsletters</span>
                </li>
                <li class="card-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-calendar2-event-fill" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M11.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                    </svg>
                    <span>Events</span>
                </li>
            </ul>
        </div>
    </div>

    <!--toggle button-->
    <button class="see-more-btn d-md-none">
        See more
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
             fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                  d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67"/>
        </svg>
    </button>

</aside>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    const username = sessionStorage.getItem('username');
    const email = sessionStorage.getItem('email');
    // fetch API for profile
    $.ajax({
        url: 'https://wooble.io/api/portfolio/FetchUserData.php',
        method: 'POST',
        dataType: 'json',
        data: {username, email},
        success: function (response) {
            if (response.status === 'success') {

                document.getElementById('name').innerHTML = response.data.name;
                document.getElementById('bio').innerHTML = response.data.bio;
                document.getElementById('location').innerHTML = response.data.location;
                document.getElementById('total_followers').innerHTML = response.data.total_followers;

                // profile image and icon
                let icon_image = response.data.profile_pic;
                icon_image = atob(icon_image);
                let modifiedName = icon_image.replace('.webp', '_400.png');
                console.log('Modified file name:', modifiedName);
                const reEncoded = btoa(modifiedName);
                console.log('Re-encoded file name:', reEncoded);
                userProfilePic = 'https://wooble.org/dms/' + reEncoded;

                document.getElementById('profile-image').src = userProfilePic;


                // banner image
                let image = response.data.banner_img;
                console.log('Banner image raw value:', image);
                document.getElementById('banner_img').src = image;
            }

        },
        error: function (xhr, status, error) {
            console.error('API Error:', xhr.responseText, status, error);

        }
    });
    // visit my profile as a user
    document.addEventListener("DOMContentLoaded", function () {
        const profileCard = document.querySelector('.profilepic');

        profileCard.addEventListener('click', function () {
            const userId = this.dataset.userId;
            console.log(" to profile for:", userId);
            window.location.href = '../profile/profile.php?username=' + username;
        });

    });
</script>