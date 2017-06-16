
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Lihat Menu</h3>
        <table class="table table-bordered">
	    <tr><td>Nama Menu</td><td><?php echo $name; ?></td></tr>
	    <tr><td>Link</td><td><?php echo $link; ?></td></tr>
	    <tr><td>Ikon</td><td><?php echo $icon; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $is_active; ?></td></tr>
	    <tr><td>Jenis</td><td><?php echo $is_parent; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('menu') ?>" class="btn btn-danger">Batal</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->