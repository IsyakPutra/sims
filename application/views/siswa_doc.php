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
        <h2>Siswa List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Siswa</th>
		<th>Nama Panggilan</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Umur</th>
		<th>Jenis Kelamnin</th>
		<th>Golongan Darah</th>
		<th>No Hp</th>
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
		<th>Universitas</th>
		<th>Fakultas</th>
		<th>Jurusan</th>
		<th>Tahun Masuk Universitas</th>
		<th>Tahun Masuk Ppm</th>
		<th>Kelas</th>
		
            </tr><?php
            foreach ($siswa_data as $siswa)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $siswa->siswa ?></td>
		      <td><?php echo $siswa->nama_panggilan ?></td>
		      <td><?php echo $siswa->tempat_lahir ?></td>
		      <td><?php echo $siswa->tanggal_lahir ?></td>
		      <td><?php echo $siswa->umur ?></td>
		      <td><?php echo $siswa->jenis_kelamnin ?></td>
		      <td><?php echo $siswa->golongan_darah ?></td>
		      <td><?php echo $siswa->no_hp ?></td>
		      <td><?php echo $siswa->alamat ?></td>
		      <td><?php echo $siswa->provinsi ?></td>
		      <td><?php echo $siswa->kabupaten ?></td>
		      <td><?php echo $siswa->kecamatan ?></td>
		      <td><?php echo $siswa->nama_ayah ?></td>
		      <td><?php echo $siswa->pekerjaan_ayah ?></td>
		      <td><?php echo $siswa->nama_ibu ?></td>
		      <td><?php echo $siswa->pekerjaan_ibu ?></td>
		      <td><?php echo $siswa->jumlah_saudara ?></td>
		      <td><?php echo $siswa->urutan ?></td>
		      <td><?php echo $siswa->universitas ?></td>
		      <td><?php echo $siswa->fakultas ?></td>
		      <td><?php echo $siswa->jurusan ?></td>
		      <td><?php echo $siswa->tahun_masuk_universitas ?></td>
		      <td><?php echo $siswa->tahun_masuk_ppm ?></td>
		      <td><?php echo $siswa->kelas ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>