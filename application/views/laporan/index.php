<div id="content" class="content">
	<ol class="breadcrumb pull-right">
		<li><a href="<?= base_url() ?>dashboard">Dashboard</a></li>
		<li class="active">Laporan</li>
	</ol>
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Laporan</h4>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" action="<?= base_url() ?>laporan/pdf" method="GET" target="_blank">
						<div class="form-group">
							<label class="col-md-3 control-label">Priode Laporan</label>
							<div class="col-md-9">
								<input type="month" required name="p" class="form-control" placeholder="Disabled input">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label"></label>
							<div class="col-md-9">
								<button type="submit" class="btn btn-sm btn-success">Create</button>
							</div>
						</div>

					</form>

				</div>

			</div>

		</div>
	</div>
</div>

<script type="text/javascript">
	function alert() {
		$("#alert-box").css({
			"display": "block"
		});
	}
</script>
