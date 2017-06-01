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
        <h2>Ujian List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Siswa</th>
		<th>Id Guru</th>
		<th>Id Kelas</th>
		<th>Id Materi</th>
		<th>Id Uas</th>
		<th>Nilai</th>
		
            </tr><?php
            foreach ($ujian_data as $ujian)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $ujian->id_siswa ?></td>
		      <td><?php echo $ujian->id_guru ?></td>
		      <td><?php echo $ujian->id_kelas ?></td>
		      <td><?php echo $ujian->id_materi ?></td>
		      <td><?php echo $ujian->id_uas ?></td>
		      <td><?php echo $ujian->nilai ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>