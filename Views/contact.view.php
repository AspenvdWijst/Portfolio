<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Views/CSS/style.css">
</head>
<body>
<?php include 'layouts/header.php'; ?>
<section>
    <form method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="message">Type here your message:</label><br>
        <textarea id="message" name="message" rows="5" cols="50"></textarea><br>
        <input type="submit">
    </form>
    <img src="../Images_fonts/450793594_793226346213287_225845.jpg" class="bgimg" alt="test"/>
</section>
<footer>

</footer>
</body>
</html>