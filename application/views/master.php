

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.main.css') ?>">
    
    <title>home</title>
</head>
<body>
    <div class="d-flex justify-content-end wp-row" >
    

        <div class="wp-item" style="direction:ltr;">
            <button  class="btn btn-warning p-3 m-3 w-100  " ><a style="color:white;text-decoration: none;" href="?module=login&action=logout">خروج</a></button>
        </div>
        <div class="wp-item" style="direction:ltr;" >
        <button id="addd" class="btn btn-warning p-3 m-3 w-100  " data-bs-toggle="modal" data-bs-target="#exampleModal" >افزودن یادداشت جدید</button>
        </div>

        <div class="wp-item"  style="direction:ltr;">
            <button  class="btn btn-warning p-3 m-3 w-100 "  ><a style="color:white; text-decoration: none;" href="?module=login&action=register">ثبتنام</a></button>
        </div>
        <div class="wp-item" style="direction:ltr;">
            <button  class="btn btn-warning p-3 m-3  w-100" ><a style="color:white; text-decoration: none;" href="?module=login&action=login">ورود</a></button>
        </div>

        </div>


<!--
    <div class="ldiv" >
        <ul>
            <li class="list" ><a href="?module=notes&action=items">مشاهده یادداشت ها</a></li>
            <li class="list" ><a href="?module=notes&action=add">افزودن یادداشت جدید</a></li>
        </ul>
    </div>  -->


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/jquery-3.7.0.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/costum.js"></script>
</body>
</html>