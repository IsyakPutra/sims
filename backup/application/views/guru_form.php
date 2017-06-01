<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>GURU</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Nama Lengkap <?php echo form_error('nama_lengkap') ?></td>
            <td><input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $nama_lengkap; ?>" />
        </td>
	    <tr><td>Nama Panggilan <?php echo form_error('nama_panggilan') ?></td>
            <td><input type="text" class="form-control" name="nama_panggilan" id="nama_panggilan" placeholder="Nama Panggilan" value="<?php echo $nama_panggilan; ?>" />
        </td>
	    <tr><td>Tempat Lahir <?php echo form_error('tempat_lahir') ?></td>
            <td><input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" />
        </td>
	    <tr><td>Tanggal Lahir <?php echo form_error('tanggal_lahir') ?></td>
            <td><input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>" />
        </td>
	    <tr><td>Tempat Asal <?php echo form_error('tempat_asal') ?></td>
            <td><input type="text" class="form-control" name="tempat_asal" id="tempat_asal" placeholder="Tempat Asal" value="<?php echo $tempat_asal; ?>" />
        </td>
	    <input type="hidden" name="id_guru" value="<?php echo $id_guru; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('guru') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->