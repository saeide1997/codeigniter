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
<div id="app">
	<ul style=" float: left; display: inline-flex; margin-bottom: 5%;">
		<li style="" class="d-block">
			<a class="btn btn-outline-warning m-4 p-3" @click.prevent="createNote"
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
			<tr class="bg-light">
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

			<tr v-for="note in notes">
				<td>{{ note.title }}</td>
				<td>{{ note.description }}</td>
				<td>{{ note.date }}</td>
				<td>
					<button @click.prevent="editNote(note)"
					   class="btn btn-warning">ویرایش</button>
					<button
					   class="btn btn-danger">حذف</button>
				</td>
			</tr>

		</table>
	</div>

	<div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
		 aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form class="form">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<input type="hidden" name="action" value="createNote">
						<input type="hidden" name="data[id]" value="">
						<label class="label h4 p-2">عنوان یادداشت</label> <br>
						<input v-model="title" id="title" class="input border rounded bg-light w-50" type="text"><br>
						<label class="label h4 p-2">شرح یادداشت</label><br>
						<textarea id="desc" v-model="description" class="input border rounded bg-light w-50"
								  cols="30" rows="5"></textarea><br>
						<label class="h4 p-2">تاریخ ایجاد یادداشت</label><br>
						<input id="date" v-model="date" class="border rounded bg-light p-2 m-2" type="date"><br>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
						<button type="button" @click.prevent="saveNote()" class="btn btn-primary">ذخیره یادداشت</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url('/assets/js/jquery-3.7.0.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/bootstrap.bundle.min.js') ?>"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<script>
	let app = Vue.createApp({
		data() {
			return {
				title: '',
				description: '',
				date: '',
				notes: [],
				editID: ''
			}
		},
		mounted() {
			this.fetchNotes()
		},
		methods: {
			createNote() {
				$('#myModal').modal('show')
			},
			saveNote() {
				$.ajax({
					type: "post",
					url: "saveNote",
					dataType: "json",
					data: {
						action: 'saveNote',
						title: this.title,
						description: this.description,
						date: this.date,
						editID: this.editID
					},
					success: (result) => {
						$('#myModal').modal('hide')
						this.fetchNotes()
					}

				});
			},
			editNote(note) {
				this.editID = note.id
				this.title = note.title
				this.description = note.description
				this.date = note.date

				$('#myModal').modal('show')
			},
			fetchNotes(){
				$.ajax({
					type: "post",
					url: "getNotes",
					dataType: "json",
					success: (result) => {
						this.notes = result
					}
				});
			}
		}
	})

	app.mount('#app')
</script>
</body>

</html>
