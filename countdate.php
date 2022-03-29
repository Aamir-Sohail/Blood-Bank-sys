<?php
$donationdate = strtotime("4-12-2021");
$now = time();
$diff =   $now- $donationdate ;
echo floor($diff/(60*60*24));

?>