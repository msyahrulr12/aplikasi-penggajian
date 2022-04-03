<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penggajian - Form Login</title>

    <link href="<?php echo base_url('assets/css/login.css'); ?>" rel="stylesheet">
</head>
<body>
    
    <!-- message error -->
    <?php if ($messageError = session()->getFlashdata('error')): ?>
        <div>
            <?php echo $messageError; ?>
        </div>
    <?php endif ?>
    <!-- end message error -->

    <!-- form login -->
    <form action="<?php echo site_url('Authentication/doLogin'); ?>" method="POST">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <button>Login</button>
    </form>
    <!-- end form login -->
</body>
</html>