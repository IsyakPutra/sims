<?php
$config = array(
        'create' => array(           
        array(
            'field' => 'nama_panggilan',
            'label' => 'Nama Panggilan',
            'rules' => 'trim|required|is_unique[siswa.nama_panggilan]'
            )
        ),
        'edit' => array(
        array(
            'field' => 'nama_panggilan',
            'label' => 'Nama Panggilan',
            'rules' => 'trim|required|is_unique[siswa.nama_panggilan]'
            )
        ),
        'gurucreate' => array(           
        array(
            'field' => 'nama_panggilan',
            'label' => 'Nama Panggilan',
            'rules' => 'trim|required|is_unique[guru.nama_panggilan]'
            )
        ),
        'guruedit' => array(           
        array(
            'field' => 'nama_panggilan',
            'label' => 'Nama Panggilan',
            'rules' => 'trim|required|is_unique[guru.nama_panggilan]'
            )
        )
    );


?>