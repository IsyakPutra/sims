
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>SISWA LIST <?php echo anchor('siswa/create/','Create',array('class'=>'btn btn-danger btn-sm'));?>
		<?php echo anchor(site_url('siswa/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-primary btn-sm"'); ?></h3>
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
		    <th>Universitas</th>
		    <th>Fakultas</th>
		    <th>Prodi</th>
		    <th>Id Jurusan</th>
		    <th>Angkatan Universitas</th>
		    <th>Tahun Masuk Universitas</th>
		    <th>Angkatan Ppm</th>
		    <th>Tahun Masuk Ppm</th>
		    <th>Kelas</th>
		    <th>Id Kelas</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($siswa_data as $siswa)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $siswa->nama_lengkap ?></td>
		    <td><?php echo $siswa->nama_panggilan ?></td>
		    <td><?php echo $siswa->tempat_lahir ?></td>
		    <td><?php echo $siswa->tanggal_lahir ?></td>
		    <td><?php echo $siswa->umur ?></td>
		    <td><?php echo $siswa->jenis_kelamnin ?></td>
		    <td><?php echo $siswa->golongan_darah ?></td>
		    <td><?php echo $siswa->alamat ?></td>
		    <td><?php echo $siswa->provinsi ?></td>
		    <td><?php echo $siswa->kabupaten ?></td>
		    <td><?php echo $siswa->kecamatan ?></td>
		    <td><?php echo $siswa->nama_ayah ?></td>
		    <td><?php echo $siswa->pekerjaan_ayah ?></td>
		    <td><?php echo $siswa->nama_ibu ?></td>
		    <td><?php echo $siswa->pekerjaan_ibu ?></td>
		    <td><?php echo $siswa->jumlah_saudara ?></td>
		    <td><?php echo $siswa->urutan ?></td>
		    <td><?php echo $siswa->universitas ?></td>
		    <td><?php echo $siswa->fakultas ?></td>
		    <td><?php echo $siswa->prodi ?></td>
		    <td><?php echo $siswa->jurusan ?></td>
		    <td><?php echo $siswa->angkatan_universitas ?></td>
		    <td><?php echo $siswa->tahun_masuk_universitas ?></td>
		    <td><?php echo $siswa->angkatan_ppm ?></td>
		    <td><?php echo $siswa->tahun_masuk_ppm ?></td>
		    <td><?php echo $siswa->kelas ?></td>
		    <td><?php echo $siswa->id_kelas ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('siswa/read/'.$siswa->id_siswa),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('siswa/update/'.$siswa->id_siswa),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('siswa/delete/'.$siswa->id_siswa),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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