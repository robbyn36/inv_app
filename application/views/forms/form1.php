<!-- load header file -->
<?php $this->load->view('header.php'); ?>

<h3>Form 1</h3>
<p>Form yang di gunakan khsus untuk Non Project</p>
<div class="btn-group btn-group-xs" role="group" aria-label="...">
	<!-- <form method="post" action="<?php echo base_url()."forms/c_form1/tambah_form" ?>"> -->
		<button type="submit" name="tambah_form" class="btn btn-info" id="add_form1"><span class="glyphicon glyphicon-plus"></span> Form Baru</button>
	<!-- </form> -->
</div>
<hr>
<!-- table list form 1 -->
<div class="table-list">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td scope="row">1</td>
				<td>Mark</td>
				<td>Otto</td>
				<td>@mdo</td>
			</tr>
			<tr>
				<td scope="row">2</td>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
			</tr>
		</tbody>
	</table>
</div>
<!-- load footer dari halaman -->
<?php $this->load->view('footer.php'); ?>