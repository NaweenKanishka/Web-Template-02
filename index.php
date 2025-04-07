<?php
$conn = new mysqli('localhost', 'root', '', 'testdb');

// Fetch about section
$aboutResult = $conn->query("SELECT content FROM about_section WHERE id = 1");
$about = $aboutResult->fetch_assoc();

// Fetch welcome section
$welcomeResult = $conn->query("SELECT content FROM about_section WHERE id = 2");
$welcome = $welcomeResult->fetch_assoc();

$trustResult = $conn->query("SELECT content FROM about_section WHERE id = 3");
$trust = $trustResult->fetch_assoc();

$bottomaboutResult = $conn->query("SELECT content FROM about_section WHERE id = 4");
$bottomabout = $bottomaboutResult->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="header-sidebar">
            <div class="link-in-sidebar">
                <div class="logo-">
                    <img src="IAS-01.png" alt="">
                </div>
                <button onclick="document.querySelector('.header-sidebar').classList.remove('show')">✖</button>


                <a href="">Services</a>
                <div class="options-">
                    <ul>
                        <li>Option 01</li>
                        <li>Option 02</li>
                        <li>Option 03</li>
                        <li>Option 04</li>
                    </ul>
                </div>
                <a href="">Le</a>
                <a href="">Locations</a>
                <a href="">Media Library</a>
                <a href="">Contact</a>
            </div>
        </div>

        <div class="header-cont">

            <div class="link-">
                <div class="logo-">
                    <img src="Images/My first  logo black-01.png" alt="">
                </div>

                <nav>
                    <a href="">Home</a>
                    <a href="">Locations</a>
                    <a href="">Media Library</a>
                    <select name="course" id="course">
                        <option value="">Services</option>
                        <option value="">Post design</option>
                        <option value="">Leaflet Designing</option>
                        <option value="">Option 04</option>
                    </select>
                    <a href="">Contact</a>
                </nav>

            </div>
            <div class="logins">
                <a href="login-index.html">Sign in</a>
                <a href="">Register</a>

            </div>
            <button id="toggleSidebar">☰</button>

        </div>
    </header>

    <div class="body-container1">
        <div class="first-content">

            <div class="image-">
                <img src="Images/roboimage.jpg" alt="">
            </div>
            <div class="text-">
                <div>
                    <h1>Naween Kanishka</h1>
                    <p><?php echo $about['content']; ?></p>
                    <div class="select-div">

                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="body-container">
        <div class="sec-content">
            <div>
                <!--<div class="name">
                    <h2>Tools</h2>
                </div> -->

                <div class="all-images-">
                    <div class="images">
                        <img src="Images/adobe-photoshop.png" alt="">
                    </div>
                    <div class="images">
                        <img src="Images/adobe-illustrator.png" alt="">
                    </div>
                    <div class="images">
                        <img src="Images/adobe-lightroom.png" alt="">
                    </div>
                    <div class="images">
                        <img src="Images/premiere.png" alt="">
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="body-container3">
        <div class="third-content">
            <div>
                <div class="name">
                    <h1>Welcome</h1>
                    <p><?php echo $welcome['content']; ?></p>
                </div>


                <div class="values">
                    <div class="value-cont">
                        <h1>80+</h1>
                        <p>Projects</p>
                    </div>
                    <div class="value-cont">
                        <h1>80+</h1>
                        <p>Projects</p>
                    </div>
                    <div class="value-cont">
                        <h1>80+</h1>
                        <p>Projects</p>
                    </div>
                    <div class="value-cont">
                        <h1>80+</h1>
                        <p>Projects</p>
                    </div>
                </div>
                <div class="button-">
                    <button>Get Your Offer!</button>
                </div>
            </div>
        </div>

    </div>


    <div class="body-container">
        <div class="third-content">
            <div class="name">
                <h1>Why you trust us?</h1>
                <p><?php echo $trust['content']; ?></p>
            </div>
        </div>

    </div>

    <div class="body-container6">
        <div class="first-content">

            <div class="text-">
                <div>
                    <h1>Naween Kanishka</h1>
                    <p><?php echo $bottomabout['content']; ?></p>
                </div>

            </div>
            <div class="image-">
                <img src="Images/roboimage.jpg" alt="">
            </div>

        </div>

    </div>


    <div class="body-container">
        <div class="fifth-content">
            <div class="package-cont">
                <div class="packages">
                    <h2>Special Monthlt Package</h2>
                </div>

                <div class="packages">

                </div>
            </div>
        </div>

    </div>


    <footer>
        <div class="footer-cont">
            <div class="cont-in">
                <h2>Footer contents</h2>
            </div>

        </div>

        <div class="copyright">
            <p>All rights reserved</p>
        </div>
    </footer>









    <script>
        const toggleBtn = document.getElementById('toggleSidebar');
        const sidebar = document.querySelector('.header-sidebar');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('show');
        });
    </script>

</body>

</html>