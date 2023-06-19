$(document).ready(function () {

    function fetchNotes() {
        $.ajax({
            type: "POST",
            url: 'notes/ajax.php',
            data: {
                action: 'getNotes'
            }, // serializes the form's elements.
            success: function (data) {
                data = JSON.parse(data)
                let notes = data.data;

                let output = ''




                $('.table').html(`
                    <tr>
                        <th class="pad">عنوان یادداشت</th>
                        <th class="pad">توضیحات</th>
                        <th class="pad">تاریخ ایجاد</th>
                        <th class="pad">عملیات</th>
                    </tr>
                `)
                notes.forEach(function (item, index) {
                    $('.table').append(`
                    <tr id="tr">
                    <td class="pad title" >${item.title}</td>
                    <td class="pad desc">${item.description}</td>
                    <td class="pad date">${item.date}</td>
                    <td class="pad">
                    <input type="button" id="edit" class="btn btn-warning edit" data-id="${item.id}" data-bs-toggle="modal" data-bs-target="#exampleModal" value="ویرایش">
                    <input type="button" id="deleteNote" class="btn btn-danger" data-id="${item.id}" value="حذف">
            
                    </td>
                </tr>`

                    )
                })

                // $(function replace() {
                $("#edit").click(function () {
                    let title = $(this).parents("tr").find('.title').html();
                    let desc = $(this).parents("tr").find('.desc').text();
                    let date = $(this).parents("tr").find('.date').text();
                    // console.log(title)
                    $('#title').attr('value', title);
                    $('#desc').attr('value', desc);
                    $('#date').attr('value', date);
                })
                // })


                $("#addd").click(
                    function () {
                        $('#exampleModalLabel').html("افزودن یادداشت")
                        $(".form").attr("id", "createNote"),
                            $("input[name='action']").attr("value", "createNote"),
                            $("button[id='re-edit']").html("ذخیره یادداشت")
                    })

                $("#edit").click(
                    function () {
                        console.log($(this).data('id'))
                        $('#exampleModalLabel').html("ویرایش یادداشت")
                        $(".form").attr("id", "updateNote"),
                            $("input[name='action']").attr("value", "updateNote"),
                            $("input[name='data[id]").val($(this).data('id')),
                            $("button[id='re-edit']").html("ویرایش یادداشت")
                    })

                // add
                $("#updateNote").submit(function (e) {
                    e.preventDefault(); // avoid to execute the actual submit of the form.
                    var form = $(this);
                    var actionUrl = form.attr('action');
                    $.ajax({
                        type: "POST",
                        url: actionUrl,
                        data: form.serialize(), // serializes the form's elements.
                        success: function (data) {
                            data = JSON.parse(data)
                            let success = swal('', data.message, 'success')
                            if (success) {
                                $("#cls").click();
                            }
                            fetchNotes()
                            console.log(data)
                        },
                        error: function () {

                        }
                    });

                });


                $("#createNote").submit(function (e) {
                    e.preventDefault(); // avoid to execute the actual submit of the form.
                    var form = $(this);
                    var actionUrl = form.attr('action');
                    $.ajax({
                        type: "POST",
                        url: actionUrl,
                        data: form.serialize(), // serializes the form's elements.
                        success: function (data) {
                            data = JSON.parse(data)
                            let success = swal('', data.message, 'success')
                            if (success) {
                                $("#cls").click();
                            }
                            fetchNotes()


                        },
                        error: function () {

                        }
                    });

                });
                $('#deleteNote').click(function () {

                    // Confirm
                    if (confirm('Are you sure want to delete this row?')) {


                        // id need to delete
                        var id = $(this).attr('data-id')


                        // Delete by ajax request
                        $.ajax({
                            type: "post",
                            url: "notes/ajax.php",
                            dataType: "text",
                            data: {
                                action: 'deleteNotes',
                                id:id
                            },
                            success: function (result) {
                                result = $.trim(result);
                                if (result == 'OK') {
                                    // Remove HTML row
                                    $(this).parent().parent().remove();
                                }
                                else {
                                    alert('request fails');
                                }
                                // fetchNotes()
                            }

                        });
                    }});
            },

            error: function () {

            }

        });



    }


    fetchNotes()
});

