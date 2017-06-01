<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>NILAI</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Id Siswa <?php echo form_error('id_siswa') ?></td>
            <td><input type="text" class="form-control" name="id_siswa" id="id_siswa" placeholder="Id Siswa" value="<?php echo $id_siswa; ?>" />
        </td>
	    <tr><td>Nama Siswa <?php echo form_error('nama_siswa') ?></td>
            <td><input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="Nama Siswa" value="<?php echo $nama_siswa; ?>" />
        </td>
	    <tr><td>Kelas <?php echo form_error('kelas') ?></td>
            <td><input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas" value="<?php echo $kelas; ?>" />
        </td>
	    <tr><td>Membaca <?php echo form_error('membaca') ?></td>
            <td><input type="text" class="form-control" name="membaca" id="membaca" placeholder="Membaca" value="<?php echo $membaca; ?>" />
        </td>
	    <tr><td>Memaknai <?php echo form_error('memaknai') ?></td>
            <td><input type="text" class="form-control" name="memaknai" id="memaknai" placeholder="Memaknai" value="<?php echo $memaknai; ?>" />
        </td>
	    <tr><td>Menerangkan <?php echo form_error('menerangkan') ?></td>
            <td><input type="text" class="form-control" name="menerangkan" id="menerangkan" placeholder="Menerangkan" value="<?php echo $menerangkan; ?>" />
        </td>
	    <tr><td>Uas1 <?php echo form_error('uas1') ?></td>
            <td><input type="text" class="form-control" name="uas1" id="uas1" placeholder="Uas1" value="<?php echo $uas1; ?>" />
        </td>
	    <tr><td>Uas2 <?php echo form_error('uas2') ?></td>
            <td><input type="text" class="form-control" name="uas2" id="uas2" placeholder="Uas2" value="<?php echo $uas2; ?>" />
        </td>
	    <tr><td>Uas3 <?php echo form_error('uas3') ?></td>
            <td><input type="text" class="form-control" name="uas3" id="uas3" placeholder="Uas3" value="<?php echo $uas3; ?>" />
        </td>
	    <tr><td>Uas4 <?php echo form_error('uas4') ?></td>
            <td><input type="text" class="form-control" name="uas4" id="uas4" placeholder="Uas4" value="<?php echo $uas4; ?>" />
        </td>
	    <tr><td>Uas5 <?php echo form_error('uas5') ?></td>
            <td><input type="text" class="form-control" name="uas5" id="uas5" placeholder="Uas5" value="<?php echo $uas5; ?>" />
        </td>
	    <tr><td>Uas6 <?php echo form_error('uas6') ?></td>
            <td><input type="text" class="form-control" name="uas6" id="uas6" placeholder="Uas6" value="<?php echo $uas6; ?>" />
        </td>
	    <tr><td>Uas7 <?php echo form_error('uas7') ?></td>
            <td><input type="text" class="form-control" name="uas7" id="uas7" placeholder="Uas7" value="<?php echo $uas7; ?>" />
        </td>
	    <tr><td>Uas8 <?php echo form_error('uas8') ?></td>
            <td><input type="text" class="form-control" name="uas8" id="uas8" placeholder="Uas8" value="<?php echo $uas8; ?>" />
        </td>
	    <input type="hidden" name="" value="<?php echo $; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('nilai') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->