
<footer
        class="bg-black py-10 max-w-full px-4 md:px-12 lg:px-24 xl:px-32 text-white"
>
    <div
            class="flex flex-col md:flex-row justify-start xl:justify-between items-start"
    >
        <h1
                class="text-4xl md:text-6xl xl:text-7xl font-bold leading-tight mb-6 xl:mb-0"
        >
            How can we <br class="hidden sm:inline"/>
            help you? Get <br class="hidden sm:inline"/>
            in touch
        </h1>

        <!-- <img src="" alt="logo not found" class="hidden sm:block md:relative md:right-6"> -->
    </div>

    <!--  Email Form -->
    <div
            class="flex flex-col md:flex-row justify-between items-start mt-8 gap-8 xl:gap-16"
    >
        <p class="text-gray-400 text-base md:text-lg max-w-2xl">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro enim
            ratione neque illum fuga unde suscipit a quaerat? Quos dolores dolorum
            temporibus minus officiis mollitia totam perferendis dignissimos
            molestiae est.
        </p>

        <div class="w-full max-w-md">
            <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Enter your email..."
                    class="w-full h-12 mb-4 px-4 text-white placeholder-gray-700 bg-[#e0e0e0] rounded-md focus:outline-none focus:ring-2 focus:ring-violet-300 focus:bg-transparent focus:placeholder-white transition-all"
            />
            <button
                    class="w-full bg-violet-600 hover:bg-violet-700 text-white h-12 rounded-md transition-all hover:cursor-pointer"
            >
                Submit
            </button>
        </div>
    </div>

    <!-- Footer Navigation Links -->
    <div
            class="mt-12 flex flex-col lg:flex-row items-center lg:items-start justify-center xl:justify-between text-gray-300 space-y-8 lg:space-y-0 lg:space-x-20 xl:space-x-32"
    >
        <!-- Links Column 1 -->
        <ul class="flex flex-col space-y-2 text-center lg:text-left">
            <li><a href="#home" class="hover:underline">Home</a></li>
            <li><a href="../tailwind_Css/Service.php" class="hover:underline">Services</a></li>
            <li><a href="../feed/feed.php" class="hover:underline">feed</a></li>
            <li><a href="../tailwind_Css/portfolio.php" class="hover:underline">Portfolio</a></li>
            <li><a href="../profile/profile.php" class="hover:underline">Profile</a></li>
        </ul>

        <!-- Divider -->
        <hr class="hidden lg:block w-px h-25 bg-gray-400 border-0"/>

        <!-- Links Column 2 -->
        <ul class="flex flex-col space-y-2 text-center lg:text-left">
            <li>
                <a
                        href="../Privacy-Policy"
                        class="hover:underline"
                >Privacy Policy</a
                >
            </li>
            <li><a href="../Cookie_Policy" class="hover:underline">Cookie Policy</a></li>
            <li>
                <a
                        href="../Terms-and-Conditions"
                        class="hover:underline"
                >Terms & Conditions</a
                >
            </li>
            <li>
                <a href="../Cancellation-and-Refund%20Policy" class="hover:underline">Cancellation & Refund Policy</a>
            </li>
        </ul>

        <!-- Divider -->
        <hr class="hidden lg:block w-px h-25 bg-gray-400 border-0"/>

        <!-- Social Icons -->
        <div class="text-center lg:text-left p-8 space-x-3" id="social-icons">
            <!--js-->
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    (function () {
        const username = sessionStorage.getItem('username');
        const email = sessionStorage.getItem('email');
        console.log(username);
        console.log(email);

        $.ajax({
            url: 'https://wooble.io/api/portfolio/FetchUserData.php',
            method: 'POST',
            data: {
                username: username
            },
            success: function (response) {
                console.log('API Response:', response);
                if (response.status === 'success') {


                    // social icons
                    const social_Container = document.getElementById('social-icons');
                    social_Container.innerHTML = '';

                    const socialLinks = {
                        linkedin: response.data.social_link_1,
                        instagram: response.data.social_link_2,
                        facebook: response.data.social_link_3,
                        github:response.data.github
                    };

                    console.log('Social Links:', response.data.socialLinks);


                    const iconMap = {
                        linkedin: 'linkedin',
                        instagram: 'instagram-alt',
                        facebook: 'facebook',
                        github: 'github',
                    };
                    for (const [platform, url] of Object.entries(socialLinks)) {
                        if (url) {
                            const iconName = iconMap[platform];
                            social_Container.innerHTML += `
                    <a href="${url}" target="_blank">
                        <box-icon class="fill-gray-300  hover:fill-blue-400" type="logo" name="${iconName}"></box-icon>
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


    })();


</script>

