<table id="tableBank" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th class="center">No</th>
			<th>Sasaran Mutu</th>
			<th>Nama Program</th>
			<th>Tahun Ajaran</th>
			<th>&nbsp;</th>
		</tr>
	</thead>

	<tbody>
	<?php
	$no=1;
	foreach ($d as $k => $v) 
	{
	?>
		<tr>
			<td style="text-align:center"><?=$no;?></td>
			<td style="text-align:left"><a href="<?=site_url()?>kegiatan/index/<?=$v->id?>" target="_blank"><?=$v->sasaran_mutu;?></a></td>
			<td style="text-align:left"><?=$program[$v->program_id]->program;?></td>
			<td style="text-align:left"><?=$v->tahun_ajaran;?></td>
			<td style="text-align:center">
				<button class="btn btn-primary btn-minier" type="button" onclick="edit('<?=$v->id?>')">
					<i class="fa fa-pencil"></i>
				</button>				
				<button class="btn btn-danger btn-minier" type="button" onclick="hapus('<?=$v->id?>')">
					<i class="fa fa-trash"></i>
				</button>
			</td>
		</tr>
	<?php
		$no++;
	}
	?>
	</tbody>
</table>
<script type="text/javascript">
	jQuery(function($) {
				var oTable1 = $('#tableBank').dataTable({
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null,
					  { "bSortable": false }
					],
					"aaSorting": [],			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			    } );
		});
</script>