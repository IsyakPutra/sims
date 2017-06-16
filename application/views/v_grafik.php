 <section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary text-center">
        <div class="box-header with-border">
          <h3 class="box-title"><strong>GRAFIK NILAI MUNAQOSYAH SANTRI</strong></h1>
        </div>
        <div class="box-body">
          <div class="btn-group">
            <?php if (isset($grafik1)): ?>
              <?= $grafik1 ?>
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="box box-primary text-center">
        <div class="box-header with-border">
          <h3 class="box-title">Grafik Putra-Putri</h3>
        </div>
        <div class="box-body">
          <div class="btn-group">
            <?php foreach ($uas as $row): ?>
              <a href="<?= base_url('grafik/uas/'.$row->id_uas) ?>" class="btn btn-primary"><?= $row->uas ?></a>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="box box-primary text-center">
        <div class="box-header with-border">
          <h3 class="box-title">Grafik Kelas</h3>
        </div>
        <div class="box-body">
          <div class="btn-group">
            <?php foreach ($uas as $row): ?>
              <a href="<?= base_url('grafik/kelas/'.$row->id_uas) ?>" class="btn btn-primary"><?= $row->uas ?></a>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>