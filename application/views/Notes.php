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
        <div>

            <table class="table border striped">
                <tr>
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

                foreach ($query->result() as $row): ?>
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
                            <a href="" class="btn btn-warning" >ویرایش</a>
                            <a href="" class="btn btn-danger" >حذف</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html>