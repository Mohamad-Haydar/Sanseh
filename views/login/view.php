<?php require_once(rout() . "/views/partials/head.php"); ?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) && parse_url($_SERVER['REQUEST_URI'])['query'] === "register") {

    // fill the data of the user in a variable
    $registerData['name'] = $_POST['name'];
    $registerData['email'] = $_POST['email'];
    $registerData['password'] = $_POST['password'];
    $registerData['confirm'] = $_POST['confirm'];
    // validation of the register info
    $valid = new Validator();

    $name = $valid->string($_POST['name']);
    $email = $valid->email($_POST['email']);
    $password = $valid->password($_POST['password']);
    $confirm = $valid->confirm($_POST['confirm'], $_POST['password']);

    if (!$name) {
        $error['name-state'] = true;
        $error['state'] = true;
        $error['name-message'] = "enter a valid name!!";
    };
    if (!$email) {
        $error['email-state'] = true;
        $error['state'] = true;
        $error['email-message'] = "enter a valid email!!";
    }
    if (!$password) {
        $error['password-state'] = true;
        $error['state'] = true;
        $error['password-message'] = "enter a valid password!!";
    }
    if (!$confirm) {
        $error['confirm-state'] = true;
        $error['state'] = true;
        $error['confirm-message'] = "the password don't match";
    }
    if ($error['state'] == false) {
        $checkuser = $db->querry("select * from users where email = '{$registerData['email']}'")->getOne();
        if ($checkuser) {
            $error['email-state'] = true;
            $error['state'] = true;
            $error['email-message'] = "this email already exist.";
        } else {
            $pass = password_hash($registerData['password'], PASSWORD_BCRYPT);
            $db->querry("insert into users (name, email, password) values ('{$registerData['name']}', '{$registerData['email']}', '{$pass}');");
            header("Location: /");
            exit();
        }
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) && parse_url($_SERVER['REQUEST_URI'])['query'] === "login") {

    $registerData['email'] = $_POST['email'];
    $registerData['password'] = $_POST['password'];
    $valid = new Validator();
    $email = $valid->email($_POST['email']);
    $password = $valid->password($_POST['password']);
    if (!$email) {
        $error['email-state'] = true;
        $error['state'] = true;
        $error['email-message'] = "enter a valid email!!";
    }
    if (!$password) {
        $error['password-state'] = true;
        $error['state'] = true;
        $error['password-message'] = "enter a valid password!!";
    }
    if ($error['state'] == false) {
        $checkuser = $db->querry("select * from users where email = '{$registerData['email']}'")->getOne();
        if (!$checkuser) {
            $error['email-state'] = true;
            $error['state'] = true;
            $error['email-message'] = "this user doesn't exit.";
        } else {

            if (!password_verify($registerData['password'], $checkuser['password'])) {
                $error['password-state'] = true;
                $error['state'] = true;
                $error['password-message'] = "Wrong password";
            } else {
                $_SESSION['user'] = [
                    'name' => $checkuser['name'],
                    'email' => $registerData['email'],
                    'password' => $registerData['password']
                ];
                setcookie("name", $checkuser['name'], time() + 60 * 60 * 24 * 30);
                setcookie("email", $checkuser['email'], time() + 60 * 60 * 24 * 30);
                setcookie("password", $checkuser['password'], time() + 60 * 60 * 24 * 30);
                $_SESSION['card'] = [];
                header("Location: /");
                exit();
            }

            // noooo $pass = password_hash($registerData['password'], PASSWORD_BCRYPT);
            // noooo $db->querry("insert into users (name, email, password) values ('{$registerData['name']}', '{$registerData['email']}', '{$pass}');");
        }
    }
}
?>

<div class="login container">
    <h2><img src="/images/sanseh.png" alt="Sanseh"></h2>
    <div class="d-flex align-items-center justify-content-between">
        <!-- left part -->
        <div class="left">
            <img src="/images/undraw_fall_thyk 1.png" alt="left part">
        </div>
        <!-- right part forms -->
        <div class="right">
            <!-- if the form is the register form -->
            <?php if (parse_url($_SERVER['REQUEST_URI'])['query'] === "register") : ?>
                <h2>
                    <a href="/login?login"><button>Login</button></a>
                    <a href="/login?register"><button class="desired">Sign up</button></a>
                </h2>
                <form action="" method="POST" class="sign-up">
                    <div class="filed">
                        <label for="name"><img src="/images/name.png" alt=""></label>
                        <input type="text" id="name" name="name" placeholder="Name" class="name" value="<?= $error['state'] === true ? $registerData['name'] : "" ?>">
                    </div>
                    <?php if ($error['name-state']) echo "<p class='error'>{$error['name-message']}</p>"; ?>
                    <div class="filed">
                        <label for="email"><img src="/images/Vector(1).png" alt=""></label>
                        <input type="email" id="email" name="email" placeholder="Email" class="email" value="<?= $error['state'] === true ? $registerData['email'] : "" ?>">
                    </div>
                    <?php if ($error['email-state']) echo "<p class='error'>{$error['email-message']}</p>"; ?>

                    <div class="filed">
                        <label for="password"><img src="/images/Vector(2).png" alt=""></label>
                        <input type="password" id="password" name="password" placeholder="Password" class="pass" value="<?= $error['state'] === true ? $registerData['password'] : "" ?>">
                    </div>
                    <?php if ($error['password-state']) echo "<p class='error'>{$error['password-message']}</p>"; ?>

                    <div class="filed">
                        <label for="confirm"><img src="/images/Vector(2).png" alt=""></label>
                        <input type="password" id="confirm" name="confirm" placeholder="Confirm Password" class="pass" value="<?= $error['state'] === true ? $registerData['confirm'] : "" ?>">
                    </div>
                    <?php if ($error['confirm-state']) echo "<p class='error'>{$error['confirm-message']}</p>"; ?>

                    <button class="submit" name="sign-up">Sign Up</button>
                </form>

                <!-- if the form is the login form -->
            <?php elseif (parse_url($_SERVER['REQUEST_URI'])['query'] === "login") : ?>
                <h2>
                    <a href="/login?login"><button class="desired">Login</button></a>
                    <a href="/login?register"><button>Sign up</button></a>
                </h2>
                <form action="" method="POST" class="sign-up">
                    <div class="filed">
                        <label for="email"><img src="/images/Vector(1).png" alt=""></label>
                        <input type="emial" id="email" name="email" placeholder="Email" class="email" value="<?= $error['state'] ? $registerData['email'] : "" ?>">
                    </div>
                    <?php if ($error['email-state']) echo "<p class='error'>{$error['email-message']}</p>"; ?>

                    <div class="filed">
                        <label for="password"><img src="/images/Vector(2).png" alt=""></label>
                        <input type="password" id="password" name="password" placeholder="Password" class="pass" value="<?= $error['state'] ? $registerData['password'] : "" ?>">
                    </div>
                    <?php if ($error['password-state']) echo "<p class='error'>{$error['password-message']}</p>"; ?>

                    <button class="submit" name="login">Log In</button>
                </form>
            <?php endif; ?>
        </div>
    </div>

</div>