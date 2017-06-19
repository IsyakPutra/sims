<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>FORMULIR SANTRI</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
        <tr><td class="col-sm-3 control-label">NIS <?php echo form_error('value') ?></td>
            <td><input type="text" class="form-control" name="value" id="value" placeholder="Nomor Induk Santri" value="<?php echo $value; ?>" required disabled/>
        </td>
        <tr><td class="col-sm-3 control-label">Nama Lengkap <?php echo form_error('siswa') ?></td>
            <td><input type="text" class="form-control" name="siswa" id="siswa" placeholder="Nama Lengkap" value="<?php echo $siswa; ?>" required/>
        </td>
        
        <tr><td>Nama Panggilan <div class="disabled btn-danger" style="text-align: center;"><?php echo form_error('nama_panggilan') ?></div></td>
            <td><input type="text" class="form-control" name="nama_panggilan" id="nama_panggilan" placeholder="Nama Panggilan" value="<?php echo $nama_panggilan; ?>" required/>
        </td>
        <tr><td>Tempat Lahir <?php echo form_error('tempat_lahir') ?></td>
            <td><input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" required/>
        </td>

        <tr><td>Tanggal Lahir <?php echo form_error('tanggal_lahir') ?></td>
            <td><input  type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>" required/>
        </td>
        
        <!-- <input type="date" id="dt" onchange="mydate1();"/>
        <input type="text" id="ndt" hidden /> -->
        <!-- <input type="button" Value="Date"  /> -->


     <!-- <script type="text/javascript">
            
//         function mydate()
// {
//   //alert("");
// document.getElementById("dt").hidden=false;
// document.getElementById("ndt").hidden=true;
// }
function mydate1()
{
 d=new Date(document.getElementById("dt").value);
dt=d.getDate();
mn=d.getMonth();
mn++;
yy=d.getFullYear();
document.getElementById("ndt").value=dt+"/"+mn+"/"+yy.hidden=true;

// document.getElementById("ndt").hidden=true;
document.getElementById("dt").hidden=false;
}
    </script>    -->
        </div>
         
           

        
        <!-- <tr><td>Umur <?php echo form_error('umur') ?></td>
            <td><input type="text" class="form-control" name="umur" id="umur" placeholder="Umur" value="<?php echo $umur; ?>" required/>
        </td> -->
        <tr><td>Jenis Kelamin <?php echo form_error('jenis_kelamnin') ?></td>
            <td>
            <div class="form-group">              
                <label class="radio-inline">
                    <input type="radio" name="jenis_kelamnin" id="jenis_kelamnin" value="Laki - laki" checked />Laki - laki</label>
                <label class="radio-inline">
                    <input type="radio" name="jenis_kelamnin" id="jenis_kelamnin" value="Perempuan" />Perempuan</label>
            </div> 
        </td></tr>
	    <tr><td>Golongan Darah <?php echo form_error('golongan_darah') ?></td>
            <td>
            <div class="form-group"> 
                <label class="radio-inline">
                    <input type="radio" name="golongan_darah" id="golongan_darah" value="Belum tahu" checked />Belum tahu</label>             
                <label class="radio-inline">
                    <input type="radio" name="golongan_darah" id="golongan_darah" value="A" />A</label>
                <label class="radio-inline">
                    <input type="radio" name="golongan_darah" id="golongan_darah" value="B" />B</label>
                <label class="radio-inline">
                    <input type="radio" name="golongan_darah" id="golongan_darah" value="AB" />AB</label>
                <label class="radio-inline">
                    <input type="radio" name="golongan_darah" id="golongan_darah" value="O" />O</label>                
            </div> 
        </td></tr>
	    <tr><td>No Hp <?php echo form_error('no_hp') ?></td>
            <td><input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp" value="<?php echo $no_hp; ?>" required/>
        </td>
	    <tr><td>Alamat Lengkap <?php echo form_error('alamat') ?></td>
            <td><textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
        </td></tr>
        <tr><td>Provinsi <?php echo form_error('provinsi') ?></td>
            <td><input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi" value="<?php echo $provinsi; ?>" required/>
        </td>
        <tr><td>Kota/Kabupaten <?php echo form_error('kabupaten') ?></td>
            <td><input type="text" class="form-control" name="kabupaten" id="kabupaten" placeholder="Kota/Kabupaten" value="<?php echo $kabupaten; ?>" required/>
        </td>
        <tr><td>Kecamatan/Kelurahan <?php echo form_error('kecamatan') ?></td>
            <td><input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Kecamatan/Kelurahan" value="<?php echo $kecamatan; ?>" required/>
        </td>
        <tr><td>Nama Ayah <?php echo form_error('nama_ayah') ?></td>
            <td><input type="text" class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah" value="<?php echo $nama_ayah; ?>" required/>
        </td>
        <tr><td>Pekerjaan Ayah <?php echo form_error('pekerjaan_ayah') ?></td>
            <td><input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" value="<?php echo $pekerjaan_ayah; ?>" required/>
        </td>
	    <tr><td>Nama Ibu <?php echo form_error('nama_ibu') ?></td>
            <td><input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu" value="<?php echo $nama_ibu; ?>" required/>
        </td>
        <tr><td>Pekerjaan Ibu <?php echo form_error('pekerjaan_ibu') ?></td>
            <td><input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" value="<?php echo $pekerjaan_ibu; ?>" required/>
        </td>
        <tr><td>Jumlah Saudara <?php echo form_error('jumlah_saudara') ?></td>
            <td><input type="text" class="form-control" name="jumlah_saudara" id="jumlah_saudara" placeholder="Jumlah Saudara" value="<?php echo $jumlah_saudara; ?>" />
        </td>
        <tr><td>Urutan <?php echo form_error('urutan') ?></td>
            <td><input type="text" class="form-control" name="urutan" id="urutan" placeholder="Urutan" value="<?php echo $urutan; ?>" required/>
        </td>
        <tr><td>Perguruan Tinggi <?php echo form_error('id_universitas') ?></td>
            <td>
            <?php echo cmb_dinamis('id_universitas', 'universitas', 'universitas', 'id_universitas', $id_universitas) ?>
        </td>
        <tr><td>Fakultas <?php echo form_error('id_fakultas') ?></td>
            <td>
            <?php echo cmb_dinamis('id_fakultas', 'fakultas', 'fakultas', 'id_fakultas', $id_fakultas) ?>
        </td>
        <tr><td>Jurusan <?php echo form_error('id_jurusan') ?></td>
            <td>
            <?php echo cmb_dinamis('id_jurusan', 'jurusan', 'jurusan', 'id_jurusan', $id_jurusan) ?>
        </td>
	    <tr><td>Tahun Masuk Perguruan Tinggi <?php echo form_error('tahun_masuk_universitas') ?></td>
            <td><input type="text" class="form-control" name="tahun_masuk_universitas" id="tahun_masuk_universitas" placeholder="Tahun Masuk Universitas" value="<?php echo $tahun_masuk_universitas; ?>" required/>
        </td>
	    <tr><td>Tahun Masuk PPM <?php echo form_error('tahun_masuk_ppm') ?></td>
            <td><input type="text" class="form-control" name="tahun_masuk_ppm" id="tahun_masuk_ppm" placeholder="Tahun Masuk PPM" value="<?php echo $tahun_masuk_ppm; ?>" required/>
        </td>
	    <tr><td>Kelas Masuk PPM<?php echo form_error('id_kelas') ?></td>
            <td>
            <?php echo cmb_dinamis('id_kelas', 'kelas', 'kelas', 'id_kelas', $id_kelas) ?>
        </td>
	    <input type="hidden" name="id_siswa" value="<?php echo $id_siswa; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('siswa') ?>" class="btn btn-danger">Batal</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->