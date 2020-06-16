<?php
include_once APPPATH. 'third_party/fpdf/fpdf.php';

class pdf extends FPDF {
var $widths;
var $aligns;

	function __construct() {
		parent::__construct("L","cm","legal");
	}


	}
?>