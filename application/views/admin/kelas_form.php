<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>FORMULIR KELAS</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td class="col-sm-3 control-label">Nama Kelas<?php echo form_error('kelas') ?></td>
            <td><input type="text" class="form-control" name="kelas" id="kelas" placeholder="Masukkan Nama Kelas" value="<?php echo $kelas; ?>" required/>
        </td>
	    <input type="hidden" name="id_kelas" value="<?php echo $id_kelas; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kelas') ?>" class="btn btn-danger">Batal</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->