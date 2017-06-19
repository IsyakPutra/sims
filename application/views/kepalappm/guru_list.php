
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>DAFTAR GURU &nbsp <!-- <?php echo anchor('kepalappm/guru/create/','TAMBAH',array('class'=>'btn btn-warning btn-sm'));?> -->
		<?php echo anchor(site_url('kepalappm/guru/excel'), ' <i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-success btn-sm"'); ?>
		<?php echo anchor(site_url('kepalappm/guru/word'), '<i class="fa fa-file-word-o"></i> Word', 'class="btn btn-primary btn-sm"'); ?>
		<!-- <?php echo anchor(site_url('guru/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-primary btn-sm"'); ?></h3> -->
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th>No</th>
		    <th>NIG</th>
            <th>Nama Guru</th>
		    <th>Nama Panggilan</th>
		    <th>Jenis Kelamin</th>
		    <th>Tempat Lahir</th>
		    <th>Tanggal Lahir</th>
		    <th>Alamat Asal</th>
		    <th>Kelas Pengampu</th>
		    <th style="padding-left: 6%">Aksi</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($guru_data as $guru)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
            <td><?php echo $guru->value ?></td>
		    <td><?php echo $guru->guru ?></td>
		    <td><?php echo $guru->nama_panggilan ?></td>
		    <td><?php echo $guru->jenis_kelamin ?></td>
		    <td><?php echo $guru->tempat_lahir ?></td>
		    <td><?php echo $guru->tanggal_lahir ?></td>
		    <td><?php echo $guru->tempat_asal ?></td>
		    <td><?php echo $guru->kelas ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('kepalappm/guru/read/'.$guru->id_guru),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			// echo anchor(site_url('kepalappm/guru/update/'.$guru->id_guru),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			// echo '  '; 
			// echo anchor(site_url('kepalappm/guru/delete/'.$guru->id_guru),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Apakah anda yaking ingin menghapusnya?\')"'); 
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