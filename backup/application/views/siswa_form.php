<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>SISWA</h3>
                      <div class='box box-primary'>

        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Id Jurusan <?php echo form_error('id_jurusan') ?></td>
            <td><input type="text" class="form-control" name="id_jurusan" id="id_jurusan" placeholder="Id Jurusan" value="<?php echo $id_jurusan; ?>" />
        </td>
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
            <td><input type="date" class="form-control"name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>" />
        </td>
        
	    <tr><td>Umur <?php echo form_error('umur') ?></td>
            <td><input type="number" class="form-control" name="umur" id="umur" placeholder="Umur" value="<?php echo $umur; ?>" />
        </td>
	    
            <tr>
                <td>Jenis Kelamnin <?php echo form_error('jenis_kelamnin') ?>                    
                </td>
                <td>
                <select input type="text" class="form-control" name="jenis_kelamnin" id="jenis_kelamnin" placeholder="Jenis Kelamnin" value="<?php echo $jenis_kelamnin; ?>" />
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                </select>
                </td>
            </tr>

	       <tr>
                <td>Golongan Darah <?php echo form_error('jenis_kelamnin') ?>                    
                </td>
                <td>
                <select input type="text" class="form-control" name="golongan_darah" id="golongan_darah" placeholder="Golongan Darah" value="<?php echo $golongan_darah; ?>" />
                    <option>Belum Tahu</option>
                    <option>A</option>
                    <option>B</option>
                    <option>AB</option>
                    <option>O</option>
                </select>
                </td>
            </tr>

	    <tr><td>Alamat <?php echo form_error('alamat') ?></td>
            <td><textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
        </td></tr>
	    <tr><td>Provinsi <?php echo form_error('provinsi') ?></td>
            <td><input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi" value="<?php echo $provinsi; ?>" />
        </td>
	    <tr><td>Kabupaten <?php echo form_error('kabupaten') ?></td>
            <td><input type="text" class="form-control" name="kabupaten" id="kabupaten" placeholder="Kabupaten" value="<?php echo $kabupaten; ?>" />
        </td>
	    <tr><td>Kecamatan <?php echo form_error('kecamatan') ?></td>
            <td><input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>" />
        </td>
	    <tr><td>Nama Ayah <?php echo form_error('nama_ayah') ?></td>
            <td><input type="text" class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah" value="<?php echo $nama_ayah; ?>" />
        </td>
	    <tr><td>Pekerjaan Ayah <?php echo form_error('pekerjaan_ayah') ?></td>
            <td><input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" value="<?php echo $pekerjaan_ayah; ?>" />
        </td>
	    <tr><td>Nama Ibu <?php echo form_error('nama_ibu') ?></td>
            <td><input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu" value="<?php echo $nama_ibu; ?>" />
        </td>
	    <tr><td>Pekerjaan Ibu <?php echo form_error('pekerjaan_ibu') ?></td>
            <td><input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" value="<?php echo $pekerjaan_ibu; ?>" />
        </td>
	    <tr><td>Jumlah Saudara <?php echo form_error('jumlah_saudara') ?></td>
            <td><input type="number" class="form-control" name="jumlah_saudara" id="jumlah_saudara" placeholder="Jumlah Saudara" value="<?php echo $jumlah_saudara; ?>" />
        </td>
	    <tr><td>Urutan <?php echo form_error('urutan') ?></td>
            <td><input type="number" class="form-control" name="urutan" id="urutan" placeholder="Urutan" value="<?php echo $urutan; ?>" />
        </td>
	    <tr><td>Universitas <?php echo form_error('universitas') ?></td>
            <td><input type="text" class="form-control" name="universitas" id="universitas" placeholder="Universitas" value="<?php echo $universitas; ?>" />
        </td>
	    <tr><td>Fakultas <?php echo form_error('fakultas') ?></td>
            <td><input type="text" class="form-control" name="fakultas" id="fakultas" placeholder="Fakultas" value="<?php echo $fakultas; ?>" />
        </td>
	    
        <tr>
                <td>Program Studi <?php echo form_error('jenis_kelamnin') ?>                    
                </td>
                <td>
                <select input type="text" class="form-control" name="prodi" id="prodi" placeholder="Program Studi" value="<?php echo $prodi; ?>" />
                    <option>D3</option>
                    <option>D4</option>
                    <option>S1</option>
                    <option>S2</option>
                    <option>S3</option>
                </select>
                </td>
            </tr>
	    <tr><td>Angkatan Universitas <?php echo form_error('angkatan_universitas') ?></td>
            <td><input type="date" class="form-control" name="angkatan_universitas" id="angkatan_universitas" placeholder="Angkatan Universitas" value="<?php echo $angkatan_universitas; ?>" />
        
	    <tr><td>Tahun Masuk Universitas <?php echo form_error('tahun_masuk_universitas') ?></td>
            <td><input type="date" class="form-control" name="tahun_masuk_universitas" id="tahun_masuk_universitas" placeholder="Tahun Masuk Universitas" value="<?php echo $tahun_masuk_universitas; ?>" />
        </td>
	    <tr><td>Angkatan Ppm <?php echo form_error('angkatan_ppm') ?></td>
            <td><input type="date" class="form-control" name="angkatan_ppm" id="angkatan_ppm" placeholder="Angkatan Ppm" value="<?php echo $angkatan_ppm; ?>" />
        </td>
	    <tr><td>Tahun Masuk Ppm <?php echo form_error('tahun_masuk_ppm') ?></td>
            <td><input type="date" class="form-control" name="tahun_masuk_ppm" id="tahun_masuk_ppm" placeholder="Tahun Masuk Ppm" value="<?php echo $tahun_masuk_ppm; ?>" />
        </td>
	    <tr>
                <td>Kelas <?php echo form_error('jenis_kelamnin') ?>                    
                </td>
                <td>
                <select input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas" value="<?php echo $kelas; ?>" />
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                </td>
            </tr>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('siswa') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->