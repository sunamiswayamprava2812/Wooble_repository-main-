<?php
$loginUrl = "../L_S_Page";
$Profile = "../profile/profile.php";
?>

<!--Header Section-->
<nav class="bg-blue-900/80 backdrop-blur-md border border-white/10 p-2">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex gap-4">
            <img src="" alt="img not found" id="profile-icon" style=" height: 2rem;
    width: 2rem;
    border-radius: 50%;">
            <h5 id="icon-name">Image</h5>
        </div>

        <div class="hidden md:flex space-x-5">
            <a href="#home" class="text-gray-300 hover:text-white p-2">Home</a>
            <a href="../tailwind_Css/Service.php" class="text-gray-300 hover:text-white p-2">Services</a>
            <a href="../feed/feed.php" class="text-gray-300 hover:text-white p-2">Feed</a>
            <a href="../tailwind_Css/portfolio.php" class="text-gray-300 hover:text-white p-2">Portfolio</a>
            <a href="../profile/profile.php" class="text-gray-300 hover:text-white p-2">Profile</a>

            <a href="logout.php"
               class="hover:cursor-pointer text-white font-bold p-2 rounded-md transition duration-300 focus:outline-none focus:ring-2 focus:ring-white text-center flex items-center"
               role="button">
                LogOut
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-box-arrow-right ml-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                    <path fill-rule="evenodd"
                          d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                </svg>
            </a>


        </div>


        <div class="md:hidden">
            <button id="menu-btn" class="focus:outline-none">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                  </svg> -->
                <box-icon name="menu" color="#ffffff"></box-icon>
            </button>
        </div>
    </div>
    <div id="menu" class="hidden flex-col md:hidden">
        <a href="#home" class="block text-gray-300 hover:text-white p-2">Home</a>
        <a href="../tailwind_Css/Service.php" class="block text-gray-300 hover:text-white p-2">Services</a>
        <a href="../feed/feed.php" class="block text-gray-300 hover:text-white p-2">feed</a>
        <a href="../tailwind_Css/portfolio.php" class="block text-gray-300 hover:text-white p-2">Portfolio</a>
        <a href="../profile/profile.php" class="block text-gray-300 hover:text-white p-2">Profile</a>

        <a href="logout.php">
            <button class="hover:cursor-pointer text-white font-bold p-2 rounded-md transition duration-300 focus:outline-none focus:ring-2 focus:ring-white text-center flex items-center">
                LogOut
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-box-arrow-right ml-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                    <path fill-rule="evenodd"
                          d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                </svg>
            </button>
        </a>
    </div>
</nav>

<script>
    const menuBtn = document.getElementById("menu-btn");
    const menu = document.getElementById("menu");

    menuBtn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>





