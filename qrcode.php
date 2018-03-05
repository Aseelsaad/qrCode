<?php

use Endroid\QrCode;
require_once 'vendor/autoload.php';
$qr = new Endroid\QrCode\QrCode();
// set the text for this QR code
$qr->setText('https://www.google.iq/?gfe_rd=cr&dcr=0&ei=-NGcWrX4GvPHXs22nLgH');
$qr->setSize(200);
$qr->setPadding(10);

// render the qr image
$qr->render();










 ?>
