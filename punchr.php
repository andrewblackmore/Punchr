<?php 
	$pagerror = "";
	
	$message = $_REQUEST['Body'];
	$phone = $_REQUEST['From'];
	
	/*
	$message = "0000";
	$phone = "+18166688410";
	*/
	$sqldb = '574396_wtfloyaltycard';
	$sqluser = '574396_screwgoog';
	$sqlpass = 'Punchr123';
	//$sqlpath = '72.3.204.167';
	$sqlpath = "mysql50-102.wc2.dfw1.stabletransit.com";
	
	$conn = mysqli_connect($sqlpath,$sqluser,$sqlpass, $sqldb);
	$result = mysqli_query($conn, "SELECT COUNT(*) FROM user WHERE phone_number='".$phone."'");
	$row = mysqli_fetch_array($result);
	
	if($row[0] == 0)
	{
		$result = mysqli_query($conn, "INSERT INTO user (phone_number, first_punch) VALUES ('".$phone."', '".date("Y-m-d H:i:s"));
	}
	
	$sinfo = mysqli_query($conn, "SELECT * FROM stores WHERE pin='".mysqli_real_escape_string($conn, $message)."'");
	
	if($sinfo == false)
	{
		$pagerror = "Failed: store information";
	}
	else
	{
		$storeinfo = mysqli_fetch_array($sinfo);
		$result = mysqli_query($conn, "SELECT COUNT(*) FROM user_store WHERE phone_number='".$phone."' AND store_id='".$storeinfo['store_id']."'");
		$row = mysqli_fetch_array($result);

		if($row[0] == 0)
		{
			$result = mysqli_query($conn, "INSERT INTO user_store (phone_number, store_id, prizes_won, locked, release_code) VALUES ('".$phone."', '".$storeinfo['store_id']."', 0, 0, '')");
		}
		
		$pinfo = mysqli_query($conn, "SELECT * FROM user_store WHERE phone_number='".$phone."' AND store_id='".$storeinfo['store_id']."'");
		if($pinfo == false)
		{
			$pagerror = "Failed: punch info";
		}
		else
		{
			$punchinfo = mysqli_fetch_array($pinfo);
			$npunch = mysqli_query($conn, "SELECT COUNT(*) FROM punches WHERE phone_number='".$phone."' AND store_id='".$storeinfo['store_id']."'");
			$numpunches = mysqli_fetch_array($npunch);
			
			if($storeinfo['prize_punches'] == $numpunches[0] + 1)
			{
				$prizes = $punchinfo['prizes_won'] + 1;
				$displaymessage = $storeinfo['prize_message'];
				$result = mysqli_query($conn, "UPDATE user_store SET prizes_won='".$prizes."' WHERE phone_number='".$phone."' AND store_id='".$storeinfo['store_id']."'");
			}
			else 
			{
				$prizes = $punchinfo['prizes_won'];
				$displaymessage = $storeinfo['punch_message'];	
			}
		
			$result = mysqli_query($conn, "INSERT INTO punches (phone_number, store_id, date_time) VALUES ('".$phone."', '".$storeinfo['store_id']."', '".date("Y-m-d H:i:s")."')");	
		}
		
	}
	
	if(!empty($pagerror))
	{
		$xml_data = "<?xml version=\"1.0\" encoding=\"UTF-8\"?><Response><Sms>".$pagerror."</Sms></Response>";
	}
	else
	{
		$xml_data = "<?xml version=\"1.0\" encoding=\"UTF-8\"?><Response><Sms>".$displaymessage."</Sms></Response>";
	}

	header("content-type: text/xml");
	echo $xml_data;
	
?>

