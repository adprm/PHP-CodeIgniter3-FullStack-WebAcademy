<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<!-- script modal -->
<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

<body id="page-top">
    <!-- navbar -->
	<?php $this->load->view("admin/_partials/navbar.php") ?>

	<div id="wrapper">
        <!-- sidebar -->
		<?php $this->load->view("admin/_partials/sidebar.php") ?>
        <!-- content -->
		<div id="content-wrapper">
            <div class="container-fluid">
                <!-- url breadcrumb -->
				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/events/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Title</th>
										<th>Date</th>
										<th>Image</th>
										<th>Description</th>
                                        <th>Location</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($event as $event): ?>
									<tr>
										<td width="150">
											<?php echo $event->event_title ?>
										</td>
										<td>
											<?php echo $event->event_date ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/event/'.$event->event_image) ?>" width="64" />
										</td>
										<td class="small">
											<?php echo substr($event->event_desk, 0, 120) ?>...
                                        </td>
                                        <td class="small">
											<?php echo $event->event_loc ?>
                                        </td>
                                        <!-- event -->
										<td width="250">
											<a href="<?php echo site_url('admin/events/edit/'.$event->event_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/events/delete/'.$event->event_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>
		</div>
		<!-- /.content-wrapper -->
	</div>
	<!-- /#wrapper -->

<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>