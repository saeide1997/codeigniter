<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.reg.css') ?>">
    <title>Document</title>
</head>

<body>
    <div class="d-flex align-items-center flex-row wp-row">
        <div class="p-4 text-success mt-0 m-5 container wp-item border  ">
            <?php
            $this->load->helper('form');

            echo form_open('register_controller/auth');

            $username = form_input(array('name' => 'username', 'placeholder' => 'نام کاربری', 'class' => 'register-form m-2 p-3 border rounded w-50'));
            $email = form_input(array('name' => 'email', 'type'=>'email', 'placeholder' => 'پست الکترونیکی', 'class' => 'register-form m-2 p-3 border rounded w-50'));
            $password = form_input(array('name' => 'password', 'type'=>'password','placeholder' => 'رمز ورود', 'class' => "register-form m-2 p-3 border rounded w-50"));
            $repassword = form_input(array('name' => 'repassword', 'type'=>'password', 'placeholder' => 'تکرار رمز ورود', 'class' => "register-form m-2 p-3 border rounded w-50"));
            $submit = form_submit(array('name' => 'submit', 'value' => 'ثبت نام', 'class' => "btn-reg btn btn-success m-3 text-light"));


            ?>
            <?php echo $username;
            echo form_error('username', "<p style='color:red;'>", '</p>') ?><br>
            <?php echo $email;
            echo form_error('email', "<p style='color:red;'>", '</p>') ?><br>
            <?php echo $password;
            echo form_error('password', "<p style='color:red;'>", '</p>') ?><br>
            <?php echo $repassword;
            echo form_error('repassword', "<p style='color:red;'>", '</p>') ?><br>
            
            <?= $submit ?>
            <?php echo form_close() ?>
        </div>
        <div class="p-4 m-3 wp-item">
            <input style="width:80%" type="image" src="<?php echo base_url('/assets/img/login.png') ?>" alt="register">
        </div>

    </div>



</body>

</html>