<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.reg.css') ?>">

    <title>Notes</title>
</head>

<body>
    <div>
        <ul style=" float: left; display: inline-flex; margin-bottom: 5%;">
            <li style="" class="d-block">
                <a class="btn btn-outline-warning m-4 p-3 "
                    href="<?= base_url('index.php/notes_controller/addnote') ?>">افزودن یادداشت</a>
            </li>
            <li class="d-block">
                <a class="btn btn-outline-danger m-4 p-3"
                    href="<?= base_url('index.php/login_controller/logout') ?>">خروج از حساب کاربری</a>
            </li>
        </ul>
        <div>



            <table style="margin-right: 12%;" class="table  table-striped w-75 ">
                <thead></thead>
                <tbody></tbody>
                <!-- <tr class="bg-light" >
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
                </tr> -->





                <!-- <?php
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
                            <a href="<?= base_url('index.php/notes_controller/editnote/' . $row->id) ?>"  class="btn btn-warning" >ویرایش</a>
                            <a href="<?= base_url('index.php/notes_controller/deletnote/' . $row->id) ?>" class="btn btn-danger" >حذف</a>
                        </td>
                    </tr>
                <?php endforeach; ?> -->
            </table>
        </div>
    </div>
    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> افزودن یادداشت</h1>
                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"
                    style="direction: ltr;"></button>
            </div>
            <div class="modal-body">
                <form class="form" id="createNote" action="notes/ajax.php" method="POST">
                    <input type="hidden" name="action" value="createNote">
                    <input type="hidden" name="data[id]" value="">
                    <label class="label h4 p-2">عنوان یادداشت</label> <br>
                    <input id="title" class="input border rounded bg-light w-50" type="text" name="data[title]"><br>
                    <label class="label h4 p-2">شرح یادداشت</label><br>
                    <textarea id="desc" class="input border rounded bg-light w-50" name="data[description]" cols="30"
                        rows="5"></textarea><br>
                    <label class="h4 p-2">تاریخ ایجاد یادداشت</label><br>
                    <input id="date" class="border rounded bg-light p-2 m-2" type="date" name="data[date]"><br>

                    <!-- <a class="btn-info" href="./items.php">فهرست یادداشتها</a> -->
            </div>
            <div class="modal-footer">
                <button type="button" id="cls" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                <button type="submit" id="re-edit" class="btn btn-primary">ذخیره یادداشت</button>
            </div>
            </form>
        </div>
    </div>



    <!---

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
  Launch demo modal
</button>


<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->






    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo base_url('/assets/js/jquery-3.7.0.js') ?>"></script>
    <script src="<?php echo base_url('/assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('/assets/js/costum.js') ?>"></script>
</body>

</html>