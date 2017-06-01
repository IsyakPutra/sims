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
        <h2>Jadwalku List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Tgl1</th>
		<th>Tgl2</th>
		<th>Judul</th>
		
            </tr><?php
            foreach ($jadwalku_data as $jadwalku)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $jadwalku->tgl1 ?></td>
		      <td><?php echo $jadwalku->tgl2 ?></td>
		      <td><?php echo $jadwalku->judul ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>