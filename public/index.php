<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <?php include("../pages/header.php"); ?>
    <div class="form-container">
        <form action="">
            <h2>Login</h2>
            <p><label >Email / Username</label>
                <input type="text" class="txt"  required>
            </p>
            <p><label >Password</label>
                <input type="password" name="" id="pass1" class="txt" required>
                <span id="vis1" class="vis material-symbols-outlined" onclick="visiable(1)">
                    visibility
                </span>
                <span id="vis-b1" class="vis material-symbols-outlined" onclick="disiable(1)">
                    visibility_off
                </span>
            </p>
            <input type="submit" value="Login">
        </form>
        <div class="right-div">

        </div>
    </div>
    <!-- <div class="form-container"> -->

    <!-- </div> -->
    <script src="script.js"></script>
</body>
<script src="assets/js/script.js"></script>
</html>