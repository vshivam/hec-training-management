<?php
mysql_connect("localhost", "root", "") or DIE('Could not Connect:' . mysql_error());
mysql_select_db('HEC_Employee_Details') or DIE('Connection to host failed. Please Retry');
?>
