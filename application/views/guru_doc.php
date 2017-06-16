<!doctype html>
<html>
    <head>
        
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
        <h2>Daftar Guru</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
        <th>NIG</th>
		<th>Nama Lengkap</th>
		<th>Nama Panggilan</th>
		<th>Jenis Kelamin</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Tempat Asal</th>
		<th>Kelas Pengampu</th>
		
            </tr><?php
            foreach ($guru_data as $guru)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $guru->value ?></td>
              <td><?php echo $guru->guru ?></td>
		      <td><?php echo $guru->nama_panggilan ?></td>
		      <td><?php echo $guru->jenis_kelamin ?></td>
		      <td><?php echo $guru->tempat_lahir ?></td>
		      <td><?php echo $guru->tanggal_lahir ?></td>
		      <td><?php echo $guru->tempat_asal ?></td>
		      <td><?php echo $guru->kelas ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>