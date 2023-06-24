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

    <title>Notes</title>
</head>

<body>
    <div>
        <ul style=" float: left; display: inline-flex; margin-bottom: 5%;" >
            <li style="" class="d-block" >
            <a class="btn btn-outline-warning m-4 p-3 " href="<?= base_url('index.php/notes_controller/addnote') ?>">افزودن یادداشت</a>
            </li>
            <li class="d-block">
            <a class="btn btn-outline-danger m-4 p-3" href="<?= base_url('index.php/login_controller/logout') ?>">خروج از حساب کاربری</a>
            </li>
        </ul>
        <div>

            <table style="margin-right: 12%;" class="table  table-striped w-75 ">
                <tr class="bg-light" >
                    <th>
                        عنوان یادداشت
                    </th>
                    <th>
                        شرح یادداشت
                    </th>
                    <th>
                        تاریخ ایجاد
                    </th>
                    <th>
                        عملیات
                    </th>
                </tr>
                <?php
                
                $query = $this->db->get('note');
                $data=$query->result();

                foreach ($data as $row): ?>
                
                    <tr>
                        <td>
                            <?php echo $row->title; ?>
                        </td>
                        <td>
                            <?php echo $row->description; ?>
                        </td>
                        <td>
                            <?php echo $row->date; ?>
                        </td>
                        <td>
                            <a href="<?= base_url('index.php/notes_controller/editnote/'.$row->id) ?>"  class="btn btn-warning" >ویرایش</a>
                            <a href="<?= base_url('index.php/notes_controller/deletnote/'.$row->id) ?>" class="btn btn-danger" >حذف</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html>