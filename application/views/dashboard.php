<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.reg.css') ?>">
    <title>Document</title>
</head>

<body>
    <header>
        <img style="width: 100%;height: 12rem;" src="<?php echo base_url('/assets/img/header.png') ?>" alt="">
    </header>

    <p class="text-warning" style="  font-size: 4rem;  margin-top: 4rem;  text-align: center;">به یادداشت خوش آمدید :)
    </p>
    <p class="h2 text-danger pt-5" style="text-align: center">برای دیدن یادداشت های خود کلیلک کنید.</p>
    <?php
    $this->load->helper('form');

    echo form_open('notes_controller/index');
    $button = form_submit(array('name' => 'submit', 'value' => 'یادداشتهای من', 'class' => 'btn btn-warning p-3', 'style' => 'margin-right: 44%; margin-top:2%')); ?>
    <?= $button ?>
    <?php echo form_close(); ?>
    <footer></footer>
</body>

</html>