<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aspen's portfolio webpage">
    <meta name="keywords" content="HTML, CSS, javascript, PHP, portfolio, Aspen">
    <meta name="author" content="Aspen van der Wijst">
    <link rel="stylesheet" href="/Views/CSS/style.css">
    <link rel="icon" type="image/x-icon" href="../../layout/Images/favicon.ico">
</head>
<body>
<nav>
    <a class="HomeButton" id="Home" href="../">Aspen</a>
    <a class="AboutMe" href="../about">About me</a>
    <div class="dropdown"> <!--This is the general class in which I worked with the dropdown menu-->
        <a class="MyProjects" href="../projects">My projects</a>
        <div id="dropdown" class="dropdownContent">
            <a href="../projects#software" class="softwaredevelop">Software Development</a>
            <a href="../projects#media" class="mediaproj">Media</a>
        </div>
    </div>
    <a class="Downloads" href="../downloads">Downloads</a>
    <a class="Contact" href="../contact">Contact</a>
</nav>
</body>
</html>