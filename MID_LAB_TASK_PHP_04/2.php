<?php
$amount = 89.69;
$vat = 15;

echo round($amount * (($vat / 100) + 1), 2);
?>