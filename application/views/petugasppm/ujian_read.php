
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Lihat Munaqosyah</h3>
        <table class="table table-bordered">
	    <tr><td>Nama Santri</td><td><?php echo $siswa; ?></td></tr>
	    <tr><td>Guru Penguji</td><td><?php echo $guru; ?></td></tr>
	    <tr><td>Kelas</td><td><?php echo $kelas; ?></td></tr>
	    <tr><td>Materi Munaqosyah</td><td><?php echo $materi; ?></td></tr>
	    <tr><td>Munaqosyah ke-</td><td><?php echo $uas; ?></td></tr>
	    <tr><td>Nilai</td><td><?php echo $nilai; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('petugasppm/ujian') ?>" class="btn btn-danger">Batal</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->