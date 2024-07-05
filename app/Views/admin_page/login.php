<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet" />
    <title>login</title>
</head>
<body>
    <div class="container">
        <div class="sub_card">
            <header>Login</header>
            <p>You need login to access the admin data</p>
            <form action="" method="">
                <div class="field_input">
                    <label for="email">Username/Email</label>
                    <input type="email" name="email" id="username" required />
                </div>
                <div class="field_input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required />
                </div>
                <div class="btn_input">
                    <input type="submit" class="btn" name="submit" value="Login" required />
                </div>
            </form>
        </div>
    </div>
</body>

</html>