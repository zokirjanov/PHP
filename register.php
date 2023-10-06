<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Sign-up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required autocomplete="off">
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="username" required autocomplete="off">
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required autocomplete="off">
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" id="username" required>
                </div>
                <div class="links"> 
                    Already a member? <a href="index.php">Sign-in now</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>