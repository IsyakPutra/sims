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
        <h2>Nilai List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Siswa</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
		<th>Uas1</th>
		<th>Uas2</th>
		<th>Uas3</th>
		<th>Uas4</th>
		<th>Uas5</th>
		<th>Uas6</th>
		<th>Uas7</th>
		<th>Uas8</th>
		
            </tr><?php
            foreach ($nilai_data as $nilai)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $nilai->id_siswa ?></td>
		      <td><?php echo $nilai->nama_siswa ?></td>
		      <td><?php echo $nilai->kelas ?></td>
		      <td><?php echo $nilai->uas1 ?></td>
		      <td><?php echo $nilai->uas2 ?></td>
		      <td><?php echo $nilai->uas3 ?></td>
		      <td><?php echo $nilai->uas4 ?></td>
		      <td><?php echo $nilai->uas5 ?></td>
		      <td><?php echo $nilai->uas6 ?></td>
		      <td><?php echo $nilai->uas7 ?></td>
		      <td><?php echo $nilai->uas8 ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>