<?php
$aModule = array(
    'id'           => 'hdi_report',
    'title'        => 'HDI Report',
    'description'  => 'Report Module',
    'version'      => '0.9.1',
    'author'       => 'Rafael Dabrowski / HEINER DIRECT GmbH & Co. KG',
	'url'          => 'http://www.heiner-direct.com',
	'email'        => 'rafael.dabrowski@heiner-direct.com', 
    'extend' => array(),
    'files' => array(
        "hdi_report" => 'hdi_report/admin/hdi_report.php'
    ), 
    'templates' => array(
        'hdiReport_main.tpl' => 'hdi_report/out/admin/tpl/hdiReport_main.tpl'
    )
    
);
