<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            background: #dddddd;
            min-height: 100vh;
            width: 95vw;
            border-radius: 10px;
            margin: 2vh auto;
            position: relative;
            overflow: hidden;
        }


        .image-icon {
            width: 12rem;
            height: 12rem;
            margin: 0 auto;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: absolute;
            border: 5px solid #fff;
            top: 12%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
        }

        .image-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }


        .page-container {
            margin-top: 10rem;
            padding: 2rem;
            background-color: #fff;
            text-align: center;
            width: 100%;
            padding-top: 7rem;
            height: 90vh;
        }


        .about-me {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: space-between;
            gap: 2rem;
            flex-wrap: wrap;
            padding: 2rem;
            text-align: left;
        }

        .about-me > div {
            flex: 1;
            min-width: 280px;
        }

        .about-me img {
            width: 250px;
            max-width: 100%;
            height: auto;
            object-fit: cover;
            border: 3px solid #ccc;
            border-radius: 10px;
        }

        #profile-name {
            font-size: 2.8rem;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .bio-content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
            font-style: italic;
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 1.5rem;
        }

        .bio-content svg {
            color: #777;
        }

        .toggle-button {
            border: none;
            font-size: 0.9em;
            font-weight: bold;
            color: #007bff;
            background: transparent;
            cursor: pointer;
            margin-top: 0.8rem;
            padding: 5px 0;
            transition: color 0.3s ease;
        }

        .toggle-button:hover {
            color: #0056b3;
        }

        .more-text {
            display: none;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #444;
        }

        p {
            font-size: 1rem;
            line-height: 1.8;
        }

        @media (max-width: 768px) {
            .container {
                width: 100vw;
                margin: 0;
                border-radius: 0;
            }

            .image-icon {
                width: 9rem;
                height: 9rem;
                top: 10%;
            }

            .page-container {
                margin-top: 5rem;
                padding: 1.5rem;
                padding-top: 6rem;
                border-radius: 0;
            }

            #profile-name {
                font-size: 2.2rem;
            }

            .bio-content {
                font-size: 0.95rem;
            }

            .about-me {
                flex-direction: column;
                align-items: center;
                text-align: center;
                padding: 1.5rem 1rem;
            }

            .about-me > div {
                min-width: unset;
                width: 100%;
            }

            .about-me img {
                width: 200px;
                margin-top: 1.5rem;
            }

            h2 {
                font-size: 1.8rem;
            }
        }


        @media (max-width: 480px) {
            .image-icon {
                width: 7rem;
                height: 7rem;
                top: 10%;
            }

            .page-container {
                margin-top: 4rem;
                padding: 1rem;
                padding-top: 5rem;
            }

            #profile-name {
                font-size: 1.8rem;
            }

            .bio-content {
                font-size: 0.9rem;
            }

            .about-me {
                padding: 1rem;
            }

            h2 {
                font-size: 1.5rem;
            }

            p {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>

<section class="container">
    <div class="image-icon">
        <img src="face1.jpg" alt="Profile Image" id="image">
    </div>

    <div class="page-container">
        <h3> Hii I'm</h3><h2 id="profile-name">Loading Name...</h2>
        <div class="bio-content">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-person"
                 viewBox="0 0 16 16">
                <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
            </svg>
            <p id="bio">Loading Bio...</p>
        </div>

        <div class="about-me">
            <div class="about-me-text">
                <h2>ABOUT ME</h2>
                <p id="about-me">
                    Loading description...
                </p>
            </div>
            <img src="pic4.jpeg" alt="Profile Image" id="profile-img">
        </div>
    </div>
</section>

<script>

    function toggleMore(button) {
        const moreText = button.previousElementSibling;
        if (moreText.style.display === "inline") {
            moreText.style.display = "none";
            button.textContent = "...See more";
        } else {
            moreText.style.display = "inline";
            button.textContent = "See less";
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    (function () {
        const username = sessionStorage.getItem('username');
        const email = sessionStorage.getItem('email');

        $.ajax({
            url: 'https://wooble.io/api/portfolio/FetchUserData.php',
            method: 'POST',
            dataType: 'json',
            data: {username, email},
            success: function (response) {
                if (response.status === 'success') {
                    document.getElementById('profile-name').innerHTML = response.data.name;
                    document.getElementById('bio').innerHTML = response.data.bio;


                    const fullText = response.data.about_description;
                    const previewLength = 100;
                    let aboutMeContent = '';

                    if (fullText && fullText.length > previewLength) {
                        const preview = fullText.slice(0, previewLength);
                        const remaining = fullText.slice(previewLength);
                        aboutMeContent = `
                            ${preview}
                            <span class="more-text">${remaining}</span>
                            <button class="toggle-button" onclick="toggleMore(this)">...See more</button>
                        `;
                    }
                    document.getElementById('about-me').innerHTML = aboutMeContent;




                    let iconimage = response.data.profile_pic;
                    iconimage = atob(iconimage);
                    let modifiedName = iconimage.replace('.webp', '_400.png');
                    console.log('Modified file name:', modifiedName);
                    const reEncoded = btoa(modifiedName);
                    console.log('Re-encoded file name:', reEncoded);

                    document.getElementById('image').src = 'https://wooble.org/dms/' + reEncoded;
                    document.getElementById('profile-img').src = 'https://wooble.org/dms/' + reEncoded;
                    document.getElementById('icon-name').innerHTML = response.data.name;
                }

            },
            error: function (xhr, status, error) {
                console.error('API Error:', xhr.responseText, status, error);

            }
        });
    })();
</script>
</body>
</html>