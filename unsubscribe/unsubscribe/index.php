<?php

$user_agent = $_SERVER['HTTP_USER_AGENT'];

$report = 'https://investingnews.space/action';

foreach($_GET as $key => $value){
 $aff_sub4= $value;
 break;
}

$redirect = '../index.html';

 $client_ip = $_SERVER['REMOTE_ADDR'];
 
if ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) ) 
{
  $client_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  
}
else
if( isset($_SERVER['HTTP_CF_CONNECTING_IP']))
 {
   $client_ip = $_SERVER['HTTP_CF_CONNECTING_IP'];    
 }
 
 $curl_url = trim($report)."?action=7&external=".trim($aff_sub4)."&d=".trim($d)."&client_ip=".trim($client_ip)."&user_agent=".str_replace(" ","",$user_agent)."";
 
 $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $curl_url,
       CURLOPT_RETURNTRANSFER => true,
					CURLOPT_RETURNTRANSFER => 1,
					CURLOPT_FOLLOWLOCATION => true
        
    ));
 
  $output = curl_exec($ch);
  curl_close($ch);

   	header('Location: '.$redirect);
  exit;


?>

<script>
	<?php  echo "window.location.href='".$redirect."'" ?>
</script>
</head>
<body>
</body>