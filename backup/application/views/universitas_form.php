<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>UNIVERSITAS</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Id Universitas <?php echo form_error('id_universitas') ?></td>
            <td><input type="text" class="form-control" name="id_universitas" id="id_universitas" placeholder="Id Universitas" value="<?php echo $id_universitas; ?>" />
        </td>
	    <tr><td>Universitas <?php echo form_error('universitas') ?></td>
            <td><input type="text" class="form-control" name="universitas" id="universitas" placeholder="Universitas" value="<?php echo $universitas; ?>" />
        </td>
	    <input type="hidden" name="" value="<?php echo $; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('universitas') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->