<?php include 'process.php'; ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/reglog7.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;0,600;0,700;1,500;1,600;1,700&family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

</head>

<body>

    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logos">
                    <a href="home.php"><img src="./assets/img/datesfruits.jpg"
                            style="border-radius: 10rem; height: 70px; width: 70px"></a>
                </div>
            </div>
        </div>
    </div>

    <form method="post" action="login.php" id="register_form">
        <?php if (isset($_SESSION['response'])) { ?>
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show alert-dismissible fade show col-sm-6 mx-auto"
            role="alert" style="padding: 8px; margin-left:auto">
            <b class="mx-auto" style="background-color: green; padding:5px"><?= $_SESSION['response'] ?></b>
        </div>
        <?php } unset($_SESSION['response']); ?>
        <h1>Login</h1><br>
        <p style="margin-bottom: 30px;color: #c6c6c6">Welcome to Dates Fruit PH! Discover the Exquisite Delights and
            Abundant Nutritional Benefits of Dates: Nature's Sweet and Nourishing Fruit. Login now and explore our extensive collection!</p>
        </div>
        <div>
            <input type="text" name="username" placeholder="Enter your Username" value="<?php echo $username; ?>"
                required>
        </div>
        <div>
            <input type="password" name="password" placeholder="Enter your Password" value="<?php echo $password; ?>"
                required>
        </div>
        <div <?php if (isset($login_error)): ?> class="form_error" <?php endif ?>>
            <?php if (isset($login_error)): ?>
            <span><?php echo $login_error; ?></span>
            <?php endif ?>
        </div>
        <div>
            <button type="submit" name="login" id="reg_btn">Login</button>
        </div>
    </form>

</html>
