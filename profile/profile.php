<?php session_start();
include 'db_connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
            crossorigin="anonymous"></script>

    <!--    bootstrap-->
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
            crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="profile.css"/>

    <title>profile</title>
</head>

<body data-profile-user-id="1234">
<!-- header -->
<header class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <!-- clickble  icon-->
        <div style=" padding: 10px; display: flex; justify-content: flex-end;">
            <div class="profile d-flex align-items-center">
                <img id="userProfileIcon" src="face.jpg" alt="User Profile" class="rounded-circle me-2"
                     style="width: 40px; height: 40px; object-fit: cover; cursor: pointer;">
                <h6 id="icon-name">Gerold lorem</h6>
            </div>
        </div>


        <div id="profileDialogOverlay" class="profile-dialog-overlay hidden">
            <div class="profile-dialog-content">
                <button class="close-btn" id="closeDialogBtn">&times;</button>
                <div class="profile-dialog-header">
                    <img src="face.jpg" id="userprofileicon2" alt="User Profile">
                    <div>
                        <h5 id="name">Gerold lorem</h5>
                        <p id="user_id">User Id: 60040786769</p>
                        <p id="mail">Gerold@wooble.org</p>
                    </div>
                </div>
            </div>
        </div>
        <!--humburger-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <form class="d-flex my-2 my-lg-0 order-lg-last" role="search">
                <input
                        class="form-control me-2"
                        type="search"
                        placeholder="Search here people and pages"
                        aria-label="Search"/>
                <button class="btn btn-outline-success" type="submit">
                    Search
                </button>
            </form>

            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#" aria-label="Profile">
                        <span class="d-inline-block p-2">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    fill="currentColor"
                                    class="bi bi-person-circle"
                                    viewBox="0 0 16 16"
                                    style="margin-top: -4px">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path
                                        fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                                />
                            </svg>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" aria-label="Chat">
                        <span class="d-inline-block p-2">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    fill="currentColor"
                                    class="bi bi-chat-dots"
                                    viewBox="0 0 16 16"
                                    style="margin-top: -4px"
                            >
                                <path
                                        d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"
                                />
                                <path
                                        d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 0-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"
                                />
                            </svg>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" aria-label="Notifications">
                        <span class="d-inline-block p-2">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    fill="currentColor"
                                    class="bi bi-bell"
                                    viewBox="0 0 16 16"
                                    style="margin-top: -4px"
                            >
                                <path
                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
                            </svg>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

<!-- First Section -->

<section class="first-section container">
    <div class="card">
        <img src="images.jpeg" id="banner-image" class="img-fluid w-100" alt="Img not found"/>
        <div class="card-body text-center">
            <h4 id="profile-name" style="margin: -20px;">🐣</h4>
            <p id="bio" style="margin-top: 15px">🐝🪱</p>
            <div class="profession-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5"/>
                    <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z"/>
                </svg>
                <p id="profession">hello</p>
            </div>
            <div class="location-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                </svg>
                <p id="location">hello</p>
            </div>


            <div style="display: flex; gap: 10px; justify-content: center ">

                <!--  follow btn-->
                <button id="connectBtn" style="display:none" class="follow-btn button" data-follower-id="">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                    </svg>
                <span style="margin-left: 6px;">Follow</span>
            </button>

                <!-- message btn-->
                <button class="button" onclick="openChatBox()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-send-fill" viewBox="0 0 16 16">
                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/>
                    </svg>
                    <span>message</span>
                </button>
            </div>

            <!-- followers count-->
            <div class="followers-count" data-username="frank-green">
                <p id="followCount">${data.total_followers}</p>
                <p>followers</p>
            </div>

        </div>

        <hr>
        <div class="scrolling-tabs card-body">
            <ul class="nav flex-nowrap">
                <li class="nav-link active text-dark" id="timeline">Timeline</li>
                <li class="nav-link text-dark" id="projects">Projects</li>
                <li class="nav-link text-dark" id="impact-zone">Impact Zone</li>

            </ul>
        </div>


        <div class="image-class">
            <div class="image-create">


                <img
                        src="face.jpg"
                        id="profile-image"
                        alt="img not found"
                        class="img-thumbnail"
                        style="position: relative; border-radius: 50%; object-fit: cover; border: 5px solid white; cursor: pointer"
                        data-bs-toggle="modal"
                        data-bs-target="#imageModal"
                />


            </div>
        </div>

        <!--use modal for profile image -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" style="height:auto;">
                <div class="profile-item" id="profile-item">
                    <h3 style="margin: 10px 20px">Profile Photo</h3>
                </div>
                <div class="modal-content bg-transparent border-0">
                    <div class="modal-body p-0 " style="left: 50%; transform: translate(-50%,-50%)">
                        <img src="#" style="border-radius: 50%; position: relative; top: 4rem;" alt="Preview"
                             class="img-fluid" id="modal-image"/>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- message Chatbox (hidden by default) -->
<div id="chatBox" class="chat-box" style="display:none;">
    <div class="chat-header">
        <img src="face.jpg" id="chat-profile-icon"
             style="height: 45px;width: 45px;border: 2px solid white;border-radius: 50%;object-fit: cover;"
             alt="img not found"/>
        <div style="margin-top: 15px">
            <span id="chat_loggername">Chat with Support</span>
          <p id="chat_profession" style="font-size: 11px; color: #7a7878; margin-top: -3px; letter-spacing: 0.2px;">hat wit</p>
        </div>
        <button class="close-chat" onclick="closeChatBox()" style="margin: -1rem 0px 0px 8.5rem;">×</button>
    </div>
    <div class="chat-messages" id="chatMessages">
        <!--script-->
    </div>
    <div class="chat-input-area">
        <input type="text" id="chatInput" placeholder="Type a message...">
        <button onclick="sendMessage()">Send</button>
    </div>
</div>


<!-- TimeLine -->

<div id="timelineContent" class="content-section">

    <div class="timeline-section">


        <!-- Update Modal -->
        <div id="updateModal" class="modal-overlay">
            <div class="modal-content">
                <h3>Update Timeline Item</h3>
                <label>Title:</label>
                <input type="text" id="updateTitle"> <br>

                <label>Description:</label>
                <input type="text" id="updateDescription"><br>

                <label>Image File:</label>
                <input type="file" id="updateImageFile" accept="image/*" onchange="previewImageFromFile()"><br>
                <img id="imagePreview" src="" width="100">

                <div class="btn">
                    <button onclick="applyUpdate()">Save Changes</button>
                    <button onclick="closeModal()">Cancel</button>
                </div>

            </div>
        </div>

    </div>

</div>


<!-- Project -->
<section class="second-section">
    <div id="projectContent" style="display: none" class="content-section">
        <!--        <div class="cards-item" id="cardsContainer">-->
        <!---->
        <!---->
        <!--        </div>-->

        <div class="container my-5">
            <div id="cardsContainer" class="row justify-content-center g-4">
                <!--script-->
            </div>
        </div>
    </div>
</section>


<!-- Photos -->
<div id="impactzoneContent" class="content-section container my-4" style="display: none;">

    <div class="container my-5">
        <div id="galleryRow" class="row justify-content-center g-4">
            <!--script-->
        </div>
    </div>


</div>



<!-- javascript -->

<script>

    let profileUserId;
    let senderId = sessionStorage.getItem('userId');

    document.addEventListener('DOMContentLoaded', function () {
        const updateBtn = document.getElementById('update-profile-pic');
        const fileInput = document.getElementById('profile-pic-input');
        const modalImage = document.getElementById('modal-image');

        const userEmail = "subash.mandal@wooble.org";  // Update with dynamic email if needed

        updateBtn.addEventListener('click', function () {
            fileInput.click();
        });

        fileInput.addEventListener('change', function () {
            const file = this.files[0];
            if (!file || !file.type.startsWith('image/')) {
                console.warn("Please select a valid image file.");
                return;
            }

            const formData = new FormData();
            formData.append('file', file);
            formData.append('type', 'profile-pic');
            console.log('formdata', formData);

            const corsProxy = 'https://wooble.io';
            const uploadUrl = 'https://wooble.org/wooble_file_handling/file_upload';


            // Upload image file
            fetch(uploadUrl, {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(uploadResponse => {
                    console.log('Upload Response:', uploadResponse);

                    if (uploadResponse.status === 'success' && uploadResponse.file_name) {
                        const uploadedFileName = uploadResponse.file_name;

                        // Update image preview
                        const imageUrl = `https://wooble.org/dms/${uploadedFileName}`;
                        modalImage.src = imageUrl;

                        console.log('Image URL:', imageUrl);


                        // Send file name to UpdateProfilePic API
                        const updateUrl = corsProxy + 'https://wooble.io/api/portfolio/UpdateProfilePic.php';
                        const updateForm = new FormData();
                        updateForm.append('email', userEmail);
                        updateForm.append('files', uploadedFileName);

                        return fetch(updateUrl, {
                            method: 'POST',
                            body: updateForm
                        });
                    } else {
                        throw new Error("Image upload failed.");
                    }
                })
                .then(response => response.json())
                .then(updateResponse => {
                    console.log('Update Response:', updateResponse);
                    if (updateResponse.status === 'success') {
                        alert('Profile picture updated successfully!');
                    } else {
                        alert('Failed to update profile picture.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });


<!--Friend-->

    document.addEventListener("DOMContentLoaded", function () {
        const timeline = document.getElementById("timeline");
        const projects = document.getElementById("projects");
        const impactzone = document.getElementById("impact-zone");
        const videos = document.getElementById("videos");

        const contentSections = document.querySelectorAll(".content-section");
        const timelineContent = document.getElementById("timelineContent");
        const projectContent = document.getElementById("projectContent");
        const impactzoneContent = document.getElementById("impactzoneContent");
        const videosContent = document.getElementById("videosContent");

        function hideAllContentSections() {
            contentSections.forEach((section) => {
                section.style.display = "none";
            });
        }

        timeline.addEventListener("click", function () {
            hideAllContentSections();
            timelineContent.style.display = "block";
        });

        projects.addEventListener("click", function () {
            hideAllContentSections();
            projectContent.style.display = "block";
        });

        impactzone.addEventListener("click", function () {
            hideAllContentSections();
            impactzoneContent.style.display = "block";
        });

        videos.addEventListener("click", function () {
            hideAllContentSections();
            videosContent.style.display = "block";
        });

        hideAllContentSections();
        timelineContent.style.display = "block";
    });

    document.querySelectorAll('.scrolling-tabs .nav-link').forEach(tab => {
        tab.addEventListener('click', function () {
            document.querySelectorAll('.scrolling-tabs .nav-link').forEach(t => t.classList.remove('active'));
            this.classList.add('active');

        });
    });


<!--clickable close btn-->

    document.addEventListener('DOMContentLoaded', function () {
        const userProfileIcon = document.getElementById('userProfileIcon');
        const profileDialogOverlay = document.getElementById('profileDialogOverlay');
        const closeDialogBtn = document.getElementById('closeDialogBtn');

        userProfileIcon.addEventListener('click', function () {
            profileDialogOverlay.classList.remove('hidden');
        });

        closeDialogBtn.addEventListener('click', function () {
            profileDialogOverlay.classList.add('hidden');
        });

        profileDialogOverlay.addEventListener('click', function (event) {
            if (event.target === profileDialogOverlay) {
                profileDialogOverlay.classList.add('hidden');
            }
        });
    });


<!--Dropdowm btn with js-->

    function attachDropdownHandlers() {
        const dropdownButtons = document.querySelectorAll('.dropdown-button');

        dropdownButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.stopPropagation();
                const container = button.closest('.dropdown-container');
                document.querySelectorAll('.dropdown-container').forEach(c => {
                    if (c !== container) c.classList.remove('active');
                });
                container.classList.toggle('active');
            });
        });

        document.addEventListener('click', () => {
            document.querySelectorAll('.dropdown-container').forEach(c => c.classList.remove('active'));
        });
    }


    function deleteItem(button) {
        const timelineItem = button.closest('.timeline-item');
        if (confirm('Are you sure you want to delete this item?')) {
            timelineItem.remove();
        }
    }

    let currentItem = null;

    function update(button) {
        currentItem = button.closest('.timeline-item');

        const title = currentItem.querySelector('h6').textContent;
        const desc = currentItem.querySelector('p').textContent;
        const imgSrc = currentItem.querySelector('img').getAttribute('src');

        document.getElementById('updateTitle').value = title;
        document.getElementById('updateDescription').value = desc;
        document.getElementById('imagePreview').src = imgSrc;

        document.getElementById('updateModal').classList.add('active');
    }

    function applyUpdate() {
        if (!currentItem) return;

        const newTitle = document.getElementById('updateTitle').value;
        const newDesc = document.getElementById('updateDescription').value;
        const previewImgSrc = document.getElementById('imagePreview').src; // Get the preview image src

        currentItem.querySelector('h6').textContent = newTitle;
        currentItem.querySelector('p').textContent = newDesc;
        currentItem.querySelector('img').setAttribute('src', previewImgSrc);

        console.log("New image path:", previewImgSrc);
        console.log("Updated image element:", currentItem.querySelector('img'));

        closeModal();
    }


    function closeModal() {
        document.getElementById('updateModal').classList.remove('active');
        currentItem = null;
    }

    function previewImageFromFile() {
        const fileInput = document.getElementById('updateImageFile');
        const preview = document.getElementById('imagePreview');
        const file = fileInput.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
            };
            reader.readAsDataURL(file);
        } else {
            preview.src = '';
        }
    }


    // message Chatbox script
    function openChatBox() {
        console.log(profileUserId);

        $.ajax({
            url: '../API/fetchMessages.php',
            method: 'POST',
            dataType: 'json',
            data: {
                senderUserId: senderId,
                user_id: profileUserId,
            },
            beforeSend: function () {
                console.log('Sending user data' + profileUserId, senderId);
            },
            success: function (response) {
                console.log('API 🐣 Response:', response);

                const chatBox = document.getElementById('chatMessages');
                chatBox.innerHTML = '';

                if (Array.isArray(response) && response.length > 0) {
                    response.forEach(msg => {
                        const msgDiv = document.createElement('div');
                        msgDiv.className = msg.sender_id === senderId ? 'message sent' : 'message received';
                        msgDiv.textContent = msg.message;
                        chatBox.appendChild(msgDiv);
                    });

                    chatBox.scrollTop = chatBox.scrollHeight;
                }

            },
            error: function (xhr, status, error) {
                console.error('API Error:', xhr.responseText, status, error);
            }
        });

        document.getElementById('chatBox').style.display = 'flex';
    }

    function closeChatBox() {
        document.getElementById('chatBox').style.display = 'none';
    }


    // send message
    function sendMessage() {
        const input = document.getElementById('chatInput');
        const message = input.value.trim();
        const chatBox = document.getElementById('chatMessages');

        if (message !== "") {
            console.log("Message:", message);

            // Add message to chat box
            const msgDiv = document.createElement("div");
            msgDiv.className = "message sent";
            msgDiv.textContent = message;
            chatBox.appendChild(msgDiv);
            chatBox.scrollTop = chatBox.scrollHeight;

            // Store message

            $.ajax({
                url: '../API/storeMessage.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    sender_id: senderId,
                    receiver_id: profileUserId,
                    message: message,
                },
                beforeSend: function () {
                    console.log('Sending user data' + profileUserId, senderId, message);
                },
                success: function (response) {
                    console.log('API Response:', response);
                    if (response.status === 'success') {

                    }
                },
                error: function (xhr, status, error) {
                    console.error('API Error:', xhr.responseText, status, error);
                }
            });


            input.value = "";
        }
    }

</script>


<!--jquery-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

    (function () {
        // const username = sessionStorage.getItem('username');
        // const email = sessionStorage.getItem('email');
        // console.log(username);
        // console.log(email);


        const Params = new URLSearchParams(window.location.search);
        let username = Params.get('username');


        if (!username) {
            username = sessionStorage.getItem('username');
        }
        const email = sessionStorage.getItem('email');

        console.log('search username' + username);
        // console.log(email);


        $.ajax({
            url: 'https://wooble.io/api/portfolio/FetchUserData.php',
            method: 'POST',
            dataType: 'json',
            data: {
                username: username,
            },
            beforeSend: function () {
                console.log('Sending user data' + username);
            },
            success: function (response) {
                console.log('API Response:', response);
                if (response.status === 'success') {

                    // follow-button connect
                    document.getElementById('connectBtn').dataset.followerId = response.data.user_id;

                    document.getElementById('icon-name').innerHTML = response.data.name;
                    document.getElementById('profile-name').innerHTML = response.data.name;
                    document.getElementById('chat_loggername').innerHTML = response.data.name;
                    document.getElementById('bio').innerHTML = response.data.bio;
                    document.getElementById('profession').innerHTML = response.data.profession;
                    document.getElementById('chat_profession').innerHTML = response.data.profession;
                    document.getElementById('location').innerHTML = response.data.location;
                    document.getElementById('user_id').innerHTML = response.data.user_id;
                    document.getElementById('name').innerHTML = response.data.name;
                    document.getElementById('mail').innerHTML = response.data.email;
                    document.getElementById('followCount').innerHTML = response.data.total_followers;

                    profileUserId = String(response.data.user_id); // ensure string comparison
                    const loggedInUserId = String(sessionStorage.getItem("userId")); // ensure string comparison
                    const connectBtn = document.getElementById("connectBtn");


                    // follow button show only in other users id
                    if (connectBtn) {
                        connectBtn.dataset.followerId = profileUserId;

                        if (profileUserId !== loggedInUserId) {
                            connectBtn.style.display = "inline-flex"; // Show for other users
                        } else {
                            connectBtn.style.display = "none"; // Hide for own profile
                        }
                    }


                    // banner image
                    let image = response.data.banner_img;
                    console.log('Banner image raw value:', image);
                    document.getElementById('banner-image').src = image;



                    // icon-image
                    let iconimage = response.data.profile_pic;
                    // console.log('https://wooble.org/dms/'+iconimage);
                    document.getElementById('userProfileIcon').src = 'https://wooble.org/dms/' + iconimage;

                    let iconimage2 = response.data.profile_pic;
                    // console.log('https://wooble.org/dms/'+iconimage);
                    document.getElementById('userprofileicon2').src = 'https://wooble.org/dms/' + iconimage2;

                    let profileimage = response.data.profile_pic;
                    console.log('https://wooble.org/dms/' + iconimage);
                    document.getElementById('profile-image').src = 'https://wooble.org/dms/' + profileimage;

                    // chat-profile icon
                    let profile_image = response.data.profile_pic;
                    console.log('https://wooble.org/dms/' + iconimage);
                    document.getElementById('chat-profile-icon').src = 'https://wooble.org/dms/' + profile_image;

                    // modal image
                    let modalimage = response.data.profile_pic;
                    modalimage = atob(modalimage);
                    let modifiedName = modalimage.replace('.webp', '_400.png');
                    console.log('Modified file name:', modifiedName);
                    const reEncoded = btoa(modifiedName);
                    console.log('Re-encoded file name:', reEncoded);

                    document.getElementById('modal-image').src = 'https://wooble.org/dms/' + reEncoded;


                }
            },
            error: function (xhr, status, error) {
                console.error('API Error:', xhr.responseText, status, error);
            }
        });

        // timeline Api
        $.ajax({
            url: 'https://wooble.io/api/timeline/fetch_timeline.php',
            method: 'POST',
            dataType: 'json',
            data: {
                username: username,
                email: email,
            },
            beforeSend: function () {
                console.log('Sending user data' + username);
            },
            success: function (response) {

                if (response.success === true) {

                    timeline_data(response.data);

                    function timeline_data(data) {
                        console.log('API Response timeline:', data);
                        const timelineData = [];

                        data.forEach(function (item) {
                            timelineData.push({
                                date: item.start_date,
                                title: item.title,
                                desc: item.subtitle,
                                img: item.img ? 'https://wooble.org/dms/' + btoa(item.img) : 'https://st.depositphotos.com/2142621/2870/i/450/depositphotos_28708655-stock-photo-oh-no.jpg',
                                description: item.description,
                            });
                        });

                        console.log('timelineData:', timelineData);

                        const timelineSection = document.querySelector('.timeline-section');

                        timelineData.forEach((item, index) => {
                            const timelineItem = document.createElement('div');
                            timelineItem.className = 'timeline-item';
                            timelineItem.innerHTML = `

    <div class="timeline-card flex">
      <img src="${item.img}" alt="Image" width="50">
      <div class="item">
        <div class="timeline-date">${item.date}</div>
        <h6 id="title">${item.title}</h6>
        <p id="subtitle">${item.desc}</p>
            <p >${item.description}</p>
        <div class="dropdown-container">
          <button class="dropdown-button" aria-label="More options">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
            </svg>
          </button>
          <div class="dropdown-menu">
            <button onclick="update(this)">Update Item</button>
            <button onclick="deleteItem(this)">Delete Item</button>
          </div>
        </div>


      </div>
    </div>
  `;
                            timelineSection.appendChild(timelineItem);

                        });
                        attachDropdownHandlers();
                    }

                }
            },
            error: function (xhr, status, error) {
                console.error('API Error:', xhr.responseText, status, error);
            }
        });

        // project Api
        $.ajax({
            url: 'https://wooble.io/api/project/fetchProject_from_username.php',
            method: 'POST',
            dataType: 'json',
            data: {
                username: username,
            },
            beforeSend: function () {
                console.log('fetching project  data: ' + username);
            },
            success: function (response) {
                console.log('project data is', response);
                if (response.status === true) {

                    cards_data(response.projects);

                    //function card_data
                    function cards_data(data) {
                        console.log('API Response project:', data);

                        const cardsData = [];

                        data.forEach(function (project) {
                            cardsData.push({
                                image: project.banner_image ? 'https://wooble.org/dms/' + btoa(project.banner_image) : 'https://st.depositphotos.com/2142621/2870/i/450/depositphotos_28708655-stock-photo-oh-no.jpg',
                                title: project.project_title,
                            });
                        });
                        console.log('cardsData', cardsData);

                        const cardsContainer = document.getElementById("cardsContainer");

                        cardsData.forEach((project, index) => {
                            const cardDiv = document.createElement("div");
                            cardDiv.className = "col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center";

                            cardDiv.innerHTML = `
 <div class="card" style="width: 18rem;">
        <img src="${project.image}" class="card-img-top" alt="image not found">
        <div class="card-body">
          <p class="card-text">${project.title}</p>
        </div>
      </div>

        `;

                            cardsContainer.appendChild(cardDiv);
                        });
                    }
                }
            },
            error: function (xhr, status, error) {
                console.error('API Error:', xhr.responseText, status, error);
            }
        });

        //imapct Zone
        $.ajax({
            url: 'https://wooble.io/api/impact/fetchAllImpacts.php',
            method: 'POST',
            dataType: 'json',
            data: {
                username: username,
            },
            beforeSend: function () {
                console.log('fetching Imapct Zone data: ' + username);
            },
            success: function (response) {
                console.log('Imapct Zone data is', response);
                if (response.success === true) {

                    impactzone_data(response.impacts);

                    // function impactzone-data

                    function impactzone_data(data) {
                        console.log('API Response impactzone_data', data);

                        const impactzoneData = [];

                        data.forEach(function (impacts) {
                            impactzoneData.push({
                                imageSrc: impacts.image_url ? 'https://wooble.org/dms/' + btoa(impacts.image_url) : 'https://st.depositphotos.com/2142621/2870/i/450/depositphotos_28708655-stock-photo-oh-no.jpg',
                                text: impacts.title
                            });
                        });

                        console.log('impactzoneData', impactzoneData);

                        const galleryRow = document.getElementById("galleryRow");


                        impactzoneData.forEach((impacts, index) => {
                            const col = document.createElement("div");
                            col.className = "col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center";

                            col.innerHTML = `
      <div class="card" style="width: 18rem;">
        <img src="${impacts.imageSrc}" class="card-img-top" alt="image not found">
        <div class="card-body">
          <p class="card-text">${impacts.text}</p>
        </div>
      </div>
    `;

                            galleryRow.appendChild(col);
                        });
                    }
                }
            },
            error: function (xhr, status, error) {
                console.error('API Error:', xhr.responseText, status, error);
            }
        });






    })();

    // follow button
    document.addEventListener("click", function (e) {
        const followBtn = e.target.closest(".follow-btn");

        if (followBtn) {
            const followerId = followBtn.dataset.followerId;
            const logInuser = sessionStorage.getItem('userId');

            console.log('logInuser:', logInuser);
            console.log('followerId:', followerId);


            $.ajax({
                url: 'https://wooble.io/api/qna/follow_user.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    action: 'toggle_follow',
                    user_id: logInuser,
                    follower_id: followerId
                },
                success: function (response) {
                    console.log('Follow API Response:', response);

                    const followCountElem = document.getElementById('followCount');
                    let currentCount = parseInt(followCountElem.textContent, 10) || 0;

                    if (response.followed === true) {

                        followBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg>Unfollow `;
                        followBtn.dataset.followed = "true";
                        followCountElem.textContent = currentCount + 1;

                    } else {
                        console.warn('Follow toggle failed:', response.message);
                        followBtn.innerHTML = ` <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                </svg>Follow`;
                        followBtn.dataset.followed = "false";
                        followCountElem.textContent = Math.max(currentCount - 1, 0);
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Follow API Error:', xhr.responseText, status, error);
                }
            });
        }
    });


</script>


</body>
</html>
