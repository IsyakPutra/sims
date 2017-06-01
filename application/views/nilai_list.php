
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>NILAI LIST <?php echo anchor('nilai/create/','Create',array('class'=>'btn btn-danger btn-sm'));?>
		<?php echo anchor(site_url('nilai/excel'), ' <i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-primary btn-sm"'); ?>
		<?php echo anchor(site_url('nilai/word'), '<i class="fa fa-file-word-o"></i> Word', 'class="btn btn-primary btn-sm"'); ?>
		<?php echo anchor(site_url('nilai/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-primary btn-sm"'); ?></h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Id Siswa</th>
		    <th>Nama Siswa</th>
		    <th>Kelas</th>
		    <th>Membaca</th>
		    <th>Memaknai</th>
		    <th>Menerangkan</th>
		    <th>Uas1</th>
		    <th>Uas2</th>
		    <th>Uas3</th>
		    <th>Uas4</th>
		    <th>Uas5</th>
		    <th>Uas6</th>
		    <th>Uas7</th>
		    <th>Uas8</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($nilai_data as $nilai)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $nilai->id_siswa ?></td>
		    <td><?php echo $nilai->nama_siswa ?></td>
		    <td><?php echo $nilai->kelas ?></td>
		    <td><?php echo $nilai->membaca ?></td>
		    <td><?php echo $nilai->memaknai ?></td>
		    <td><?php echo $nilai->menerangkan ?></td>
		    <td><?php echo $nilai->uas1 ?></td>
		    <td><?php echo $nilai->uas2 ?></td>
		    <td><?php echo $nilai->uas3 ?></td>
		    <td><?php echo $nilai->uas4 ?></td>
		    <td><?php echo $nilai->uas5 ?></td>
		    <td><?php echo $nilai->uas6 ?></td>
		    <td><?php echo $nilai->uas7 ?></td>
		    <td><?php echo $nilai->uas8 ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('nilai/read/'.$nilai->),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('nilai/update/'.$nilai->),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('nilai/delete/'.$nilai->),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->