<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>JADWALKU</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Tgl1 <?php echo form_error('tgl1') ?></td>
            <td><input type="text" class="form-control" name="tgl1" id="tgl1" placeholder="Tgl1" value="<?php echo $tgl1; ?>" />
        </td>
	    <tr><td>Tgl2 <?php echo form_error('tgl2') ?></td>
            <td><input type="text" class="form-control" name="tgl2" id="tgl2" placeholder="Tgl2" value="<?php echo $tgl2; ?>" />
        </td>
	    <tr><td>Judul <?php echo form_error('judul') ?></td>
            <td><textarea class="form-control" rows="3" name="judul" id="judul" placeholder="Judul"><?php echo $judul; ?></textarea>
        </td></tr>
	    <input type="hidden" name="jadwal_id" value="<?php echo $jadwal_id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jadwalku') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->