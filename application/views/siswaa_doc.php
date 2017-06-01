<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Siswaa List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Lengkap</th>
		<th>Nama Panggilan</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Umur</th>
		<th>Jenis Kelamnin</th>
		<th>Golongan Darah</th>
		<th>Alamat</th>
		<th>Provinsi</th>
		<th>Kabupaten</th>
		<th>Kecamatan</th>
		<th>Nama Ayah</th>
		<th>Pekerjaan Ayah</th>
		<th>Nama Ibu</th>
		<th>Pekerjaan Ibu</th>
		<th>Jumlah Saudara</th>
		<th>Urutan</th>
		<th>Id Universitas</th>
		<th>Id Fakultas</th>
		<th>Id Jurusan</th>
		<th>Angkatan Universitas</th>
		<th>Tahun Masuk Universitas</th>
		<th>Angkatan Ppm</th>
		<th>Tahun Masuk Ppm</th>
		<th>Id Kelas</th>
		
            </tr><?php
            foreach ($siswaa_data as $siswaa)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $siswaa->nama_lengkap ?></td>
		      <td><?php echo $siswaa->nama_panggilan ?></td>
		      <td><?php echo $siswaa->tempat_lahir ?></td>
		      <td><?php echo $siswaa->tanggal_lahir ?></td>
		      <td><?php echo $siswaa->umur ?></td>
		      <td><?php echo $siswaa->jenis_kelamnin ?></td>
		      <td><?php echo $siswaa->golongan_darah ?></td>
		      <td><?php echo $siswaa->alamat ?></td>
		      <td><?php echo $siswaa->provinsi ?></td>
		      <td><?php echo $siswaa->kabupaten ?></td>
		      <td><?php echo $siswaa->kecamatan ?></td>
		      <td><?php echo $siswaa->nama_ayah ?></td>
		      <td><?php echo $siswaa->pekerjaan_ayah ?></td>
		      <td><?php echo $siswaa->nama_ibu ?></td>
		      <td><?php echo $siswaa->pekerjaan_ibu ?></td>
		      <td><?php echo $siswaa->jumlah_saudara ?></td>
		      <td><?php echo $siswaa->urutan ?></td>
		      <td><?php echo $siswaa->id_universitas ?></td>
		      <td><?php echo $siswaa->id_fakultas ?></td>
		      <td><?php echo $siswaa->id_jurusan ?></td>
		      <td><?php echo $siswaa->angkatan_universitas ?></td>
		      <td><?php echo $siswaa->tahun_masuk_universitas ?></td>
		      <td><?php echo $siswaa->angkatan_ppm ?></td>
		      <td><?php echo $siswaa->tahun_masuk_ppm ?></td>
		      <td><?php echo $siswaa->id_kelas ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>