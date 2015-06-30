<?php
header('Content-Type: text/plain');

$sDSN = 'mysql:host=mysql;port=3306';
$sUser = 'root';
$sPassword = 'DO4TS0HMN6zkd3S';

$aOption = [
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
];

$oDB = new PDO($sDSN, $sUser, $sPassword, $aOption);

$sQuery = 'SHOW STATUS';
$oRes = $oDB->query($sQuery);
$lStatus = $oRes->fetchAll(PDO::FETCH_ASSOC);

foreach ($lStatus as $aRow) {
	echo $aRow['Variable_name'];
	echo ': ';
	echo $aRow['Value'];
	echo "\n";
}
