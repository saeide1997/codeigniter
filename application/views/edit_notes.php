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
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.main.css') ?>">

    <title>Add Note</title>
</head>

<body>
    <div class="d-flex align-items-center flex-row wp-row">
        <div class="wp-row w-50 m-5 p-2 ">
            <button class="btn btn-warning  p-3"><a style="color:white;text-decoration: none;" class="h4"
                    href="<?= base_url('index.php/notes_controller/getNotes') ?>">مشاهده یادداشتها</a></button>
        </div>
        <div class="div container  m-5 wp-row">
            <?php

            // var_dump($note->title);die();
           
            echo form_open('notes_controller/setnote/'.$note->id);
    

            $title = form_input(
                array(
                    'name' => 'title',
                    'placeholder' => 'عنوان یادداشت خود را وارد کنید.....',
                    'class' => 'form p-2 m-2 input border rounded bg-light w-50',
                    'value'=> $note->title
                )
            );
            $desc = form_textarea(
                array(
                    'name' => 'description',
                    'placeholder' => 'شرح یادداشت خود را وارد کنید.....',
                    'cols' => '30',
                    'rows' => '5',
                    'class' => 'border rounded bg-light w-50 m-2',
                    'value' => $note->description
                )
            );
            ?>
            <label class="label h4 p-2">عنوان یادداشت:</label> <br>
            <?php echo $title ?><br>
            <label class="label h4 p-2">شرح یادداشت:</label><br>
            <?php echo $desc ?><br>
            <label class="h4 p-2">تاریخ ایجاد یادداشت:</label><br>
            <input class="border rounded bg-light p-2 m-2" value="<?= $note->date ?>" type="date" name="date"><br>
            
            <input class="btn btn-success p-3 m-2" type="submit" value="ویرایش یادداشت">
        </div>
        
    </div>

</body>

</html>