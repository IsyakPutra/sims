
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Lihat Guru</h3>
        <table class="table table-bordered">
	    <tr><td>Nama Lengkap</td><td><?php echo $guru; ?></td></tr>
	    <tr><td>Nama Panggilan</td><td><?php echo $nama_panggilan; ?></td></tr>
	    <tr><td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td></tr>
	    <tr><td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td></tr>
	    <tr><td>Tanggal Lahir</td><td><?php echo $tanggal_lahir; ?></td></tr>
	    <tr><td>Tempat Asal</td><td><?php echo $tempat_asal; ?></td></tr>
	    <tr><td>Kelas Pengampu</td><td><?php echo $kelas; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('guru') ?>" class="btn btn-danger">Batal</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->