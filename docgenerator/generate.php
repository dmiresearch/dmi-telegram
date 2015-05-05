<?php
	include './class.generatedocs.php';
	if(isset($_GET['msg'])){
		$msgSender = '0711714306';
		$msgBody = $_GET['msg'];
		date_default_timezone_set('Africa/Nairobi');
        $date = date('Y-m-d H.i.s');
        $targetFile = "./template/template.doc";
        $targetCopy = "./docs/kdf[text]".$date.".doc";
        $generator = new GenerateDoc($targetFile, $targetCopy);
        $paragraph = 'Message From: '.$msgSender.PHP_EOL.'Recieve Time: '.$date.PHP_EOL.'Message Body: '.$msgBody;
        $generator->generateDoc($paragraph);
	}else{
		echo 'no data';
	}

