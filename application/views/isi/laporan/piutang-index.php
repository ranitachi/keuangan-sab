<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<?=$this->load->view('layout/top-menu','',TRUE)?>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<div class="page-header">
									<h1>
										Laporan
										<small>
											<i class="ace-icon fa fa-angle-double-right"></i>
											Data Piutang Siswa
										</small>
									</h1>
								</div>
							</div>
							<div class="col-xs-2">
								<div class="row">
									<div class="col-xs-12">
										<form class="form-horizontal" role="form" id="datasiswa">
											<div class="form-group">
												<label class="col-sm-12 control-label no-padding-right" for="form-field-1" style="text-align:left"> Tahun Ajaran </label>
												<div class="col-sm-12">
													<select name="tahunajaran" id="tahunajaran" class="col-xs-12 col-sm-12 chosen-select" data-rel="chosen">
														<option value="-1">-Pilih Tahun Ajaran-</option>
														<option value="0">-Semua-</option>
														<?php
														foreach ($tahunajaran as $k => $v)
														{
															echo '<option value="'.$v->id_ajaran.'">'.$v->tahun_ajaran.'</option>';
														}
														?>
													</select>
													<!-- <input type="text" id="password" name="password" placeholder="Kosongkan Bila Tidak Diganti"  value=""/> -->
												</div>
											</div>
											
										</form>

									</div><!-- /.col -->
								</div><!-- /.col -->

							</div>
							<div class="col-xs-10">
								<!-- /.page-header -->


								<div class="row">
									<div class="col-xs-12">
										<center>
											<div id="loader-data"><img src="<?=base_url()?>assets/img/loading-bl-blue.gif"></div>
										</center>
										<div id="data" style="border:1px solid #ddd;padding:15px;">Silahkan Pilih Tahun Ajaran Terlebih Dahulu</div>
									</div>
								</div>
								<input type="hidden" id="vall">
							</div>

						</div>
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			<?=$this->load->view($footer,'',TRUE)?>
<style type="text/css">
	#siswa_chosen
	{
		width:100% !important;
	}
</style>
<script type="text/javascript">
	$('.chosen-select').chosen({allow_single_deselect:true});
	$('#loader-kelas').hide();
	$('#loader-data').hide();
	$('#tahunajaran').change(function(){
		var ta=$(this).val();
		$('#loader-kelas').show();
		reload(ta);
	});
    reload(0);
	// $('#dkelas').change(function(){
	// 	var id=$(this).val();
	// 	var nis=$('#siswa').val();
	// 	$('#data').load('<?=site_url()?>laporan/datapersiswa/'+nis+'/'+id,function(){
	// 			// $('#dkelas').chosen({allow_single_deselect:true});
	// 	});
	// });

	function reload(ta)
	{
		
		$('#loader-data').show();
		$('#data').css({'background':'white','opacity':'0.2'});
		$('#data').load('<?=site_url()?>laporan/datapiutangsiswa/'+ta,function(){
			$('#loader-data').hide();
			$('#data').css({'background':'transparent','opacity':'1.0'});
		});
	}
</script>
