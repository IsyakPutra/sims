<link href="fullcalender/lib/cupertino/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<link href="fullcalender/fullcalendar.css" rel="stylesheet" type="text/css" />
<link href="fullcalender/fullcalendar.print.css" rel="stylesheet" type="text/css" media="print" />
<script src="fullcalender/lib/moment.min.js" type="text/javascript"></script>
<script src="fullcalender/lib/jquery.min.js" type="text/javascript"></script>
<script src="fullcalender/lib/jquery-ui.custom.min.js" type="text/javascript"></script>
<script src="fullcalender/fullcalendar.min.js" type="text/javascript"></script>
<?php

public function __construct(){
	parent::__construct();
	$this->load->helper('url');
}

public function kalender(){
	$this->load->view('calender_siswa');
}


?>