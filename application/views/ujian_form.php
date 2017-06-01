<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>FORMULIR NILAI UJIAN</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td class="col-sm-3 control-label">Nama Siswa <?php echo form_error('id_siswa') ?></td>
            <td>
            <?php echo cmb_dinamis('id_siswa', 'siswa', 'siswa', 'id_siswa', $id_guru) ?>
        </td>
	    <tr><td>Guru Penguji<?php echo form_error('id_guru') ?></td>
            <td>
            <?php echo cmb_dinamis('id_guru', 'guru', 'guru', 'id_guru', $id_guru) ?>
        </td>
	    <tr><td>Kelas <?php echo form_error('id_kelas') ?></td>
            <td>
            <?php echo cmb_dinamis('id_kelas', 'kelas', 'kelas', 'id_kelas', $id_kelas) ?>
        </td>
	    <tr><td>Materi Ujian<?php echo form_error('id_materi') ?></td>
            <td>
            <?php echo cmb_dinamis('id_materi', 'materi', 'materi', 'id_materi', $id_materi) ?>
        </td>
	    <tr><td>UAS ke- <?php echo form_error('id_uas') ?></td>
            <td>
            <?php echo cmb_dinamis('id_uas', 'uas', 'uas', 'id_uas', $id_uas) ?>
        </td>
	    <tr><td>Nilai <?php echo form_error('nilai') ?></td>
            <td><input type="text" class="form-control" name="nilai" id="nilai" placeholder="Nilai Ujian" value="<?php echo $nilai; ?>" required/>
        </td>
	    <input type="hidden" name="id_ujian" value="<?php echo $id_ujian; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('ujian') ?>" class="btn btn-danger">Batal</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->