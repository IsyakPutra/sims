<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>FORMULIR GURU</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td class="col-sm-3 control-label">Nama Guru <?php echo form_error('guru') ?></td>
            <td><input type="text" class="form-control" name="guru" id="guru" placeholder="Nama Lengkap" value="<?php echo $guru; ?>" required/>
        </td>
	    <tr><td>Nama Panggilan <?php echo form_error('nama_panggilan') ?></td>
            <td><input type="text" class="form-control" name="nama_panggilan" id="nama_panggilan" placeholder="Nama Panggilan" value="<?php echo $nama_panggilan; ?>" required/>
        </td>
	    <tr><td>Jenis Kelamin <?php echo form_error('jenis_kelamin') ?></td>
            <td>
            
            <div class="form-group">              
                <label class="radio-inline">
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" checked />Perempuan</label>
                <label class="radio-inline">
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" />Laki-laki</label>
            </div>                          
                    
      </td></tr>
	    <tr><td>Tempat Lahir <?php echo form_error('tempat_lahir') ?></td>
            <td><input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" required/>
        </td>
	    <tr><td>Tanggal Lahir <?php echo form_error('tanggal_lahir') ?></td>
            <td><input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>" required/>
        </td>
	    <tr><td>Alamat Asal <?php echo form_error('tempat_asal') ?></td>
            <td><textarea type="text" class="form-control textbox" name="tempat_asal" id="tempat_asal" placeholder="Alamat Asal" value="<?php echo $tempat_asal; ?>" required/></textarea>
        </td>
	    <tr><td>Kelas Pengampu<?php echo form_error('id_kelas') ?></td>
            <td>
            <?php echo cmb_dinamis('id_kelas', 'kelas', 'kelas', 'id_kelas', $id_kelas) ?>
        </td>
	    <input type="hidden" name="id_guru" value="<?php echo $id_guru; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('guru') ?>" class="btn btn-danger">Batal</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->