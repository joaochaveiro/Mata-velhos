<?php
include "header.php";
?>
<div id="content" class="content">
	<div class="row">
		<!-- begin col-8 -->
		<div class="col-lg-12">
			
			<!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="index-4">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-sm btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-sm btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a class="btn btn-sm btn-icon btn-circle btn-info" id="back"><i class="fa fa-angle-left"></i></a>
					</div>
					<h4 class="panel-title" id="panel-title">Lista de Cuidadoss</h4>
				</div>
				<div class="panel-body" id="lista">
				</div>
				<div class="panel-footer text-right" id="panel-footer">
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-8 -->
	</div>
</div>

<div class="modal modal-message fade" id="MyModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="modal-title"></h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body" id="body-text">

			</div>
			<div class="modal-footer">
				<a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
				<a href="javascript:;" class="btn btn-primary">Save Changes</a>
			</div>
		</div>
	</div>
</div>
<?php
include "footer.php";
?>
<script src="js/cuidados.js"></script>
<script type="text/javascript">
	cuidados();
</script>