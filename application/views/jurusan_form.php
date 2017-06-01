<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>FORMULIR JURUSAN</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td class="col-sm-3 control-label">Nama Jurusan <?php echo form_error('jurusan') ?></td>
            <td><input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Masukkan Nama Jurusan" value="<?php echo $jurusan; ?>" required/>
        </td>
	    <input type="hidden" name="id_jurusan" value="<?php echo $id_jurusan; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jurusan') ?>" class="btn btn-danger">Batal</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->