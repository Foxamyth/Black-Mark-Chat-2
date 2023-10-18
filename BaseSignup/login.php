<!-- Black Mark Chat -->
<!-- Tirta P.A -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BMChat</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Black Mark Chat </header>
            <form action="#">
                <div class="error-text">This is an error message!</div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" placeholder="Enter your password " id="password">
                    <label for="showpassword" class="fas fa-eye-slash eye-icon" id="eye"></label>
                    <input type="checkbox" onclick="ShowPassword()" id="showpassword" hidden>
                </div>
                <div class="field button">
                    <input type="submit" value="Join to chat now!">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="#">Signup now!</a></div>
        </section>
    </div>

    <script src="../javascript/pass-show-hide.js"></script>

</body>
</html>