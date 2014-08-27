<?php

$model=new PARTY_IMAGE();
$type='';
$lob='';
 $db = Yii::app()->db->getPdoInstance(); 
 //$db = new PDO('odbc:SAMPLE', 'db2inst1', 'ibmdb2');
$stmt = $db->prepare("select ID,IMAGE from PARTY_IMAGE where ID=244");
$stmt->execute();
//$stmt->execute(array($_GET['ID']));
$stmt->bindColumn(1, $type);
$stmt->bindColumn(2, $lob, PDO::PARAM_LOB);
$stmt->fetch(PDO::FETCH_BOUND);

header("Content-Type: image/jpeg");
fpassthru($lob);

// etc.



?>