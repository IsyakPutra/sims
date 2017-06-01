
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>SISWAA LIST <?php echo anchor('siswaa/create/','Create',array('class'=>'btn btn-danger btn-sm'));?>
		<?php echo anchor(site_url('siswaa/excel'), ' <i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-primary btn-sm"'); ?>
		<?php echo anchor(site_url('siswaa/word'), '<i class="fa fa-file-word-o"></i> Word', 'class="btn btn-primary btn-sm"'); ?>
		<?php echo anchor(site_url('siswaa/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-primary btn-sm"'); ?></h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Nama Lengkap</th>
		    <th>Nama Panggilan</th>
		    <th>Tempat Lahir</th>
		    <th>Tanggal Lahir</th>
		    <th>Umur</th>
		    <th>Jenis Kelamnin</th>
		    <th>Golongan Darah</th>
		    <th>Alamat</th>
		    <th>Provinsi</th>
		    <th>Kabupaten</th>
		    <th>Kecamatan</th>
		    <th>Nama Ayah</th>
		    <th>Pekerjaan Ayah</th>
		    <th>Nama Ibu</th>
		    <th>Pekerjaan Ibu</th>
		    <th>Jumlah Saudara</th>
		    <th>Urutan</th>
		    <th>Id Universitas</th>
		    <th>Id Fakultas</th>
		    <th>Id Jurusan</th>
		    <th>Angkatan Universitas</th>
		    <th>Tahun Masuk Universitas</th>
		    <th>Angkatan Ppm</th>
		    <th>Tahun Masuk Ppm</th>
		    <th>Id Kelas</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($siswaa_data as $siswaa)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $siswaa->nama_lengkap ?></td>
		    <td><?php echo $siswaa->nama_panggilan ?></td>
		    <td><?php echo $siswaa->tempat_lahir ?></td>
		    <td><?php echo $siswaa->tanggal_lahir ?></td>
		    <td><?php echo $siswaa->umur ?></td>
		    <td><?php echo $siswaa->jenis_kelamnin ?></td>
		    <td><?php echo $siswaa->golongan_darah ?></td>
		    <td><?php echo $siswaa->alamat ?></td>
		    <td><?php echo $siswaa->provinsi ?></td>
		    <td><?php echo $siswaa->kabupaten ?></td>
		    <td><?php echo $siswaa->kecamatan ?></td>
		    <td><?php echo $siswaa->nama_ayah ?></td>
		    <td><?php echo $siswaa->pekerjaan_ayah ?></td>
		    <td><?php echo $siswaa->nama_ibu ?></td>
		    <td><?php echo $siswaa->pekerjaan_ibu ?></td>
		    <td><?php echo $siswaa->jumlah_saudara ?></td>
		    <td><?php echo $siswaa->urutan ?></td>
		    <td><?php echo $siswaa->id_universitas ?></td>
		    <td><?php echo $siswaa->id_fakultas ?></td>
		    <td><?php echo $siswaa->id_jurusan ?></td>
		    <td><?php echo $siswaa->angkatan_universitas ?></td>
		    <td><?php echo $siswaa->tahun_masuk_universitas ?></td>
		    <td><?php echo $siswaa->angkatan_ppm ?></td>
		    <td><?php echo $siswaa->tahun_masuk_ppm ?></td>
		    <td><?php echo $siswaa->id_kelas ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('siswaa/read/'.$siswaa->id_siswa),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('siswaa/update/'.$siswaa->id_siswa),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('siswaa/delete/'.$siswaa->id_siswa),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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