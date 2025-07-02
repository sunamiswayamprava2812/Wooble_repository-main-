<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="output.css"/>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <title>Tailwind Css</title>
</head>

<body class="h-screen text-white">
<!-- Navigation Bar -->
<?php include 'components/nav.php'; ?>


<!-- Home Section -->
<section
        id="home"
        class="flex flex-col md:flex-row justify-around gap-4 bg-gradient-to-r from-violet-800 to-purple-800"
>
    <div class="w-full sm:w-11/12 md:w-4/5 lg:w-3/5 p-4 sm:p-6 md:p-8 lg:p-10">
        <h1 class="text-3xl sm:text-4xl md:text-5xl">
            Hello I am <span class="text-blue-400" id="name">John Sina</span>
        </h1>
        <h3 class="text-xl sm:text-2xl font-medium mt-3" id="profession">Web Developer</h3>
        <p
                id="about-me"
                class="text-base sm:text-lg lg:text-lg font-light leading-snug lg:leading-relaxed tracking-wide w-full break-words"
        >
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eum, a consectetur. Asperiores amet dolores sequi voluptate sunt eveniet? Officiis neque amet atque voluptatum cupiditate eaque. Suscipit molestias distinctio tempore obcaecati.
        </p>


        <button
                class="mt-4 bg-black text-sm hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent cursor-pointer rounded"
        >
            Check My Resume
        </button>
<!--Social icons-->
        <div class="flex space-x-4 mt-4" id="social_icons">
            <!--js-->
        </div>

    </div>

    <section class="flex items-center justify-center">
        <div class="flex-1 flex justify-center md:justify-end">
            <img
                    src="https://via.placeholder.com/300"
                    alt="Profile"
                    id="profile"
                    style="padding: 3rem;"
                    class="w-60 sm:w-72 md:w-[50rem] lg:w-[20rem] aspect-square shadow-lg object-cover rounded-full"
            />
        </div>
    </section>

</section>


<!-- Services Section -->
<section
        class="py-20 px-8 text-center bg-gradient-to-r from-purple-800 to-violet-800"
        id="services"
>
    <h3 class="text-3xl font-bold mb-1">What I Do</h3>
    <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 rounded-sm"/>
    <div class="grid md:grid-cols-2 gap-6 xl:grid-cols-3 ">
        <div class="bg-purple-900 p-6 rounded-xl shadow-lg">
            <h3 class="text-3xl">UX/UI Design</h3>
            <p class="text-gray-300">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
                iure corporis accusantium impedit quae, ipsam quod tempore suscipit
                quos ab repellendus iste optio repellat, nostrum distinctio labore
                blanditiis harum laborum.
            </p>
        </div>
        <div class="bg-purple-900 p-6 rounded-xl shadow-lg">
            <h3 class="text-3xl">Creative Design</h3>
            <p class="text-gray-300">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
                iure corporis accusantium impedit quae, ipsam quod tempore suscipit
                quos ab repellendus iste optio repellat, nostrum distinctio labore
                blanditiis harum laborum.
            </p>
        </div>
        <div class="bg-purple-900 p-6 rounded-xl shadow-lg">
            <h3 class="text-3xl">Web Design</h3>
            <p class="text-gray-300">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
                iure corporis accusantium impedit quae, ipsam quod tempore suscipit
                quos ab repellendus iste optio repellat, nostrum distinctio labore
                blanditiis harum laborum.
            </p>
        </div>
        <div class="bg-purple-900 p-6 rounded-xl shadow-lg">
            <h3 class="text-3xl">Branding</h3>
            <p class="text-gray-300">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
                iure corporis accusantium impedit quae, ipsam quod tempore suscipit
                quos ab repellendus iste optio repellat, nostrum distinctio labore
                blanditiis harum laborum.
            </p>
        </div>
        <div class="bg-purple-900 p-6 rounded-xl shadow-lg">
            <h3 class="text-3xl">Photography</h3>
            <p class="text-gray-300">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
                iure corporis accusantium impedit quae, ipsam quod tempore suscipit
                quos ab repellendus iste optio repellat, nostrum distinctio labore
                blanditiis harum laborum.
            </p>
        </div>
        <div class="bg-purple-900 p-6 rounded-xl shadow-lg">
            <h3 class="text-3xl">Mobile App</h3>
            <p class="text-gray-300">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
                iure corporis accusantium impedit quae, ipsam quod tempore suscipit
                quos ab repellendus iste optio repellat, nostrum distinctio labore
                blanditiis harum laborum.
            </p>
        </div>
    </div>
</section>


<!-- Resume Section -->
<section
        class="py-20 px-8 text-center bg-gradient-to-r from-violet-800 to-purple-800"
        id="resume"
>
    <h3 class="text-3xl font-bold mb-1">My Resume</h3>
    <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 rounded-sm"/>

    <div
            class="flex justify-center p-4 max-w-md mx-auto backdrop-blur-md bg-white/10 border rounded-full z-auto"
    >
        <div class="flex list-none space-x-4 sm:text-base text-sm flex-wrap justify-center">
            <button
                    onclick="showCase('page1')"
                    class="hover:cursor-pointer hover:bg-black p-2 rounded-full focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-300 transition duration-300 ease-in-out"
            >
                Biography
            </button>
            <button
                    onclick="showCase('page2')"
                    class="hover:cursor-pointer hover:bg-black p-2 rounded-full focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-300 transition duration-300 ease-in-out"
            >
                Skill
            </button>
            <button
                    onclick="showCase('page3')"
                    class="hover:cursor-pointer hover:bg-black p-2 rounded-full focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-300 transition duration-300 ease-in-out"
            >
                Education
            </button>
        </div>
    </div>

    <div
            class="bg-transparent p-20 relative -inset-6 rounded-lg shadow-lg max-w-5xl m-auto"
    >
        <div class="grid md:grid-cols-2 gap-4 tab-content" id="page1">
            <div id="content1">
                <h4>Master Design</h4>
                <h4>University of london</h4>
                <p class="text-left">
                    Lorem ipsum dolor sit amet adipisicing amet adipisicing amet
                    adipisicing elit.
                </p>
            </div>
        </div>

        <div class="hidden md:grid-cols-2 gap-4 tab-content" id="page2">
            <div id="content1">
                <h4>Master Design</h4>
                <h4>University of london</h4>
                <p class="text-center">Lorem ipsum dolor sit amet adipisict.</p>
            </div>
            <div id="content2">
                <h4>Master Design</h4>
                <h4>University of london</h4>
                <p class="text-center">Lorem ipsum dolor sit amet adipisict.</p>
            </div>
        </div>

        <div class="hidden md:grid-cols-2 gap-4 tab-content" id="page3">
            <div id="content1">
                <h4>Master Design</h4>
                <h4>University of london</h4>
                <p class="text-center">
                    Lorem ipsum dolor sit amet adipisicing amet adipisicing amet
                    adipisicing elit.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
    function showCase(id) {
        ["page1", "page2", "page3"].forEach((page) => {
            document.getElementById(page).classList.toggle("hidden", page !== id);
        });
    }
</script>


<!-- Portfolio Section -->
<section
        class="py-20 px-4 sm:px-6 lg:px-12 xl:px-20 text-center bg-gradient-to-r from-purple-800 to-violet-800"
        id="portfolio"
>
    <div class="max-w-7xl mx-auto">
        <h3 class="text-3xl font-bold mb-1 text-white">Portfolio</h3>
        <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 rounded-sm" />

        <div class="grid md:grid-cols-2 xl:grid-cols-6 gap-6 mx-auto justify-items-center mt-12 max-w-full">
            <img src="pic1.jpg" alt="img not found" class="h-60 w-full sm:h-48 sm:w-96 object-cover transition-transform duration-300  shadow-md hover:scale-105 hover:shadow-2xl rounded-2xl  cursor-pointer" />
            <img src="pic2.jpeg" alt="img not found" class="h-60 w-full sm:h-48 sm:w-96 object-cover transition-transform duration-300  shadow-md hover:scale-105 hover:shadow-2xl rounded-2xl  cursor-pointer" />
            <img src="pic3.jpeg" alt="img not found" class="h-60 w-full sm:h-48 sm:w-96 object-cover transition-transform duration-300  shadow-md hover:scale-105 hover:shadow-2xl rounded-2xl  cursor-pointer" />
            <img src="pic4.jpeg" alt="img not found" class="h-60 w-full sm:h-48 sm:w-96 object-cover transition-transform duration-300  shadow-md hover:scale-105 hover:shadow-2xl rounded-2xl  cursor-pointer" />
            <img src="pic5.jpeg" alt="img not found" class="h-60 w-full sm:h-48 sm:w-96 object-cover transition-transform duration-300  shadow-md hover:scale-105 hover:shadow-2xl rounded-2xl  cursor-pointer" />
            <img src="pic6.jpeg" alt="img not found" class="h-60 w-full sm:h-48 sm:w-96 object-cover transition-transform duration-300  shadow-md hover:scale-105 hover:shadow-2xl rounded-2xl  cursor-pointer" />
            <img src="pic1.jpg" alt="img not found" class="h-60 w-full sm:h-48 sm:w-96 object-cover transition-transform duration-300  shadow-md hover:scale-105 hover:shadow-2xl rounded-2xl  cursor-pointer" />
            <img src="pic2.jpeg" alt="img not found" class="h-60 w-full sm:h-48 sm:w-96 object-cover transition-transform duration-300  shadow-md hover:scale-105 hover:shadow-2xl rounded-2xl  cursor-pointer" />
            <img src="pic3.jpeg" alt="img not found" class="h-60 w-full sm:h-48 sm:w-96 object-cover transition-transform duration-300  shadow-md hover:scale-105 hover:shadow-2xl rounded-2xl  cursor-pointer" />
            <img src="pic4.jpeg" alt="img not found" class="h-60 w-full sm:h-48 sm:w-96 object-cover transition-transform duration-300  shadow-md hover:scale-105 hover:shadow-2xl rounded-2xl  cursor-pointer" />
            <img src="pic5.jpeg" alt="img not found" class="h-60 w-full sm:h-48 sm:w-96 object-cover transition-transform duration-300  shadow-md hover:scale-105 hover:shadow-2xl rounded-2xl  cursor-pointer" />
            <img src="pic6.jpeg" alt="img not found" class="h-60 w-full sm:h-48 sm:w-96 object-cover transition-transform duration-300  shadow-md hover:scale-105 hover:shadow-2xl rounded-2xl  cursor-pointer" />
        </div>
    </div>
</section>





<!-- footer Section -->
<?php include 'components/footer.php'; ?>


<!--jquery-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    const params = new URLSearchParams(window.location.search);
    let username = params.get('username');
    if (!username) {
        username = 'nari-poonawala';
    }

    $.ajax({
        url: 'https://wooble.io/api/portfolio/FetchUserData.php',
        method: 'POST',
        data: {
            username: username
        },
        success: function (response) {
            console.log('API Response:', response);
            if (response.status === 'success') {
                document.getElementById('name').innerHTML = response.data.name;
                document.getElementById('profession').innerHTML = response.data.profession;
                document.getElementById('about-me').innerHTML = response.data.about_description;


                let image = response.data.profile_pic;
                image = atob(image);
                let modifiedName = image.replace('.webp', '_400.png');
                console.log('Modified file name:', modifiedName);
                const reEncoded = btoa(modifiedName);
                console.log('Re-encoded file name:', reEncoded);

                document.getElementById('profile').src = 'https://wooble.org/dms/' + reEncoded;
                document.getElementById('profile-icon').src = 'https://wooble.org/dms/' + response.data.profile_pic;
                document.getElementById('icon-name').innerHTML = response.data.name;


                // social icons
                const socialContainer = document.getElementById('social_icons');
                socialContainer.innerHTML = '';

                const socialLinks = {
                    linkedin: response.data.social_link_1,
                    instagram: response.data.social_link_2,
                    facebook: response.data.social_link_3,
                    github: response.data.social_link_4

                };

                console.log('Social Links:', response.data.socialLinks);


                const iconMap = {
                    linkedin: 'linkedin',
                    instagram: 'instagram-alt',
                    facebook: 'facebook',
                    github: 'github'
                };
                for (const [platform, url] of Object.entries(socialLinks)) {
                    if (url) {
                        const iconName = iconMap[platform];
                        socialContainer.innerHTML += `
                    <a href="${url}" target="_blank">
                        <box-icon class="hover:fill-blue-400" type="logo" name="${iconName}"></box-icon>
                    </a>
                `;
                    }
                }
            }

        },
        error: function (xhr, status, error) {
            console.error('API Error:', status, error);
        }
    });
</script>

</body>
</html>
