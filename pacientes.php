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
					<h4 class="panel-title" id="panel-title">Quick Post</h4>
				</div>
				<div class="panel-body" id="lista">
				</div>
				<div class="panel-footer text-right">
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-8 -->
	</div>
</div>
<?php
include "footer.php";
?>
<script src="js/pacientes.js"></script>
<script type="text/javascript">
	pacientes();
</script>