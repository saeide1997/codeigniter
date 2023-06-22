<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.reg.css') ?>">
    <title>Document</title>
</head>

<body>
    <div class="d-flex align-items-center flex-row wp-row">
        <div class="border p-4 m-3 container wp-item ">
            <!-- <p class="h1">ورود به سایت</p>  -->
            <?php
            $this->load->helper('form');

            echo form_open('login_controller/auth');

            $username = form_input(array('name' => 'username', 'placeholder' => 'نام کاربری', 'class' => 'register-form m-2 p-3 border rounded w-50'));
            $password = form_input(array('name' => 'password', 'placeholder' => 'رمز ورود', 'class' => "register-form m-2 p-3 border rounded w-50"));
            $submit = form_submit(array('name' => 'submit', 'value' => 'ورود', 'class' => "btn-reg btn btn-success m-3 text-light"));
            $remember = form_checkbox('remember', '1');
            $forget = form_label('رمز عبورتان را فراموش کرده اید؟');

            ?>
            <?php echo $username;
            echo form_error('username', "<b style='color:red;'>", '</b>') ?><br>
            <?php echo $password;
            echo form_error('password', "<b style='color:red;'>", '</b>') ?><br>
            <p class="remember_me p-3 text-info">
                <label>
                    <?= $remember; ?>
                    مرا به خاطر بسپار.
                </label>
            </p>
            <a class="submit text-dark m-3">
                <?= $forget ?>
            </a><br>
            <?= $submit ?>
            <?php echo form_close() ?>
        </div>
        <div class="p-4 m-3 wp-item">
            <input style="width:80%" type="image" src="<?php echo base_url('/assets/img/login.png') ?>" alt="login">
        </div>
    </div>




</body>

</html>