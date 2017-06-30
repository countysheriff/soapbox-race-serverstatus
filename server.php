<?php 
$json_url = "http://199.217.112.103:8680/soapbox-race-core/Engine.svc/GetServerInformation";
$json = file_get_contents($json_url);
$data = json_decode($json, TRUE);

$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "User-Agent: Mozilla/5.0\r\n"
  )
);

$array = file_get_contents("http://199.217.112.103:8680/soapbox-race-core/Engine.svc/GetServerInformation?format=json", false, stream_context_create($options));
$json_a=json_decode($array,true);

$OpenBetaserverMessage = $json_a['messageSrv'];
$OpenBetahomepageUrl = $json_a['homePageUrl'];
$OpenBetafacebookUrl = $json_a['facebookUrl'];
$OpenBetadiscordUrl = $json_a['discordUrl'];
$OpenBetaserverName = $json_a['serverName'];
$OpenBetacountry = $json_a['country'];
$OpenBetatimezone = $json_a['timezone'];
$OpenBetabannerUrl = $json_a['bannerUrl'];
$OpenBetaadminList = $json_a['adminList'];
$OpenBetaownerList = $json_a['ownerList'];
$OpenBetaregisteredUsers = $json_a['numberOfRegistered'];
$OpenBetaonlineUsers = $json_a['onlineNumber'];

$json_url2 = "http://93.188.208.221:8680/soapbox-race-core/Engine.svc/GetServerInformation";
$json2 = file_get_contents($json_url2);
$data2 = json_decode($json2, TRUE);

$options2 = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "User-Agent: Mozilla/5.0\r\n"
  )
);

$array2 = file_get_contents("http://93.188.208.221:8680/soapbox-race-core/Engine.svc/GetServerInformation?format=json", false, stream_context_create($options2));

$json_a=json_decode($array2,true);

$RussianserverMessage = $json_a['messageSrv'];
$RussianhomepageUrl = $json_a['homePageUrl'];
$RussianfacebookUrl = $json_a['facebookUrl'];
$RussiandiscordUrl = $json_a['discordUrl'];
$RussianserverName = $json_a['serverName'];
$Russiancountry = $json_a['country'];
$Russiantimezone = $json_a['timezone'];
$RussianbannerUrl = $json_a['bannerUrl'];
$RussianadminList = $json_a['adminList'];
$RussianownerList = $json_a['ownerList'];
$RussianregisteredUsers = $json_a['numberOfRegistered'];
$RussianonlineUsers = $json_a['onlineNumber'];

$json_url3 = "http://173.230.136.12:8680/soapbox-race-core/Engine.svc/GetServerInformation";
$json3 = file_get_contents($json_url3);
$data3 = json_decode($json3, TRUE);

$options3 = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "User-Agent: Mozilla/5.0\r\n"
  )
);

$array3 = file_get_contents("http://173.230.136.12:8680/soapbox-race-core/Engine.svc/GetServerInformation?format=json", false, stream_context_create($options3));

$json_a=json_decode($array3,true);

$ClosedBetaserverMessage = $json_a['messageSrv'];
$ClosedBetahomepageUrl = $json_a['homePageUrl'];
$ClosedBetafacebookUrl = $json_a['facebookUrl'];
$ClosedBetadiscordUrl = $json_a['discordUrl'];
$ClosedBetaserverName = $json_a['serverName'];
$ClosedBetacountry = $json_a['country'];
$ClosedBetatimezone = $json_a['timezone'];
$ClosedBetabannerUrl = $json_a['bannerUrl'];
$ClosedBetaadminList = $json_a['adminList'];
$ClosedBetaownerList = $json_a['ownerList'];
$ClosedBetaregisteredUsers = $json_a['numberOfRegistered'];
$ClosedBetaonlineUsers = $json_a['onlineNumber'];

echo "<pre>";

echo '<link rel="stylesheet" type="text/css" href="/serverstyle.css">';
    echo '<div class="background">
<div class="UpperTitle"><img src="https://image.ibb.co/hcmmCk/nfsicon.png" alt="" width="40" height="40">'.$OpenBetaserverName.' <p>'.$OpenBetaserverMessage.' </p>Online: <p2><font color="green">'.$OpenBetaonlineUsers.' </p2></font>/ '.$OpenBetaregisteredUsers.'</div>
<div class="transbox">
&nbsp; <font color="0A8460">Owner: </font> '.$OpenBetaownerList.'
&nbsp; <font color="0A8460">Admins: </font>'.$OpenBetaadminList.'
&nbsp; <font color="0A8460">Country: </font>'.$OpenBetacountry.'
&nbsp; <font color="0A8460">Timezone: </font>'.$OpenBetatimezone.'
<div class="imgcontainer"><a href="'.$OpenBetahomepageUrl.'"><img src="https://image.ibb.co/dHURv5/websiteicon.png" alt="" width="40" height="40" class="webimg"></a><a href="'.$OpenBetafacebookUrl.'"><img src="https://image.ibb.co/f9Yda5/facebookicon.png" alt="" width="40" height="40" class="webimg"></a><a href="'.$OpenBetadiscordUrl.'"><img src="https://image.ibb.co/cdQ22k/discordicon.png" alt="" width="40" height="40" class="webimg"></a>
</div></div></div>';

echo "<pre>";

echo '<link rel="stylesheet" type="text/css" href="/serverstyle.css">';
    echo '<div class="background">
<div class="UpperTitle"><img src="https://image.ibb.co/hcmmCk/nfsicon.png" alt="" width="40" height="40">'.$RussianserverName.' <p>'.$RussianserverMessage.' </p>Online: <p2><font color="green">'.$RussianonlineUsers.' </p2></font>/ '.$RussianregisteredUsers.'</div>
<div class="transbox">
&nbsp; <font color="0A8460">Owner: </font> '.$RussianownerList.'
&nbsp; <font color="0A8460">Admins: </font>'.$RussianadminList.'
&nbsp; <font color="0A8460">Country: </font>'.$Russiancountry.'
&nbsp; <font color="0A8460">Timezone: </font>'.$Russiantimezone.'
<div class="imgcontainer"><a href="'.$RussianhomepageUrl.'"><img src="https://image.ibb.co/dHURv5/websiteicon.png" alt="" width="40" height="40" class="webimg"></a><a href="'.$RussianfacebookUrl.'"><img src="https://image.ibb.co/f9Yda5/facebookicon.png" alt="" width="40" height="40" class="webimg"></a><a href="'.$RussiandiscordUrl.'"><img src="https://image.ibb.co/cdQ22k/discordicon.png" alt="" width="40" height="40" class="webimg"></a>
</div></div></div>';

echo "<pre>";

echo '<link rel="stylesheet" type="text/css" href="/serverstyle.css">';
    echo '<div class="background">
<div class="UpperTitle"><img src="https://image.ibb.co/hcmmCk/nfsicon.png" alt="" width="40" height="40">'.$ClosedBetaserverName.' <p>'.$ClosedBetaserverMessage.' </p>Online: <p2><font color="green">'.$ClosedBetaonlineUsers.' </p2></font>/ '.$ClosedBetaregisteredUsers.'</div>
<div class="transbox">
&nbsp; <font color="0A8460">Owner: </font> '.$ClosedBetaownerList.'
&nbsp; <font color="0A8460">Admins: </font>'.$ClosedBetaadminList.'
&nbsp; <font color="0A8460">Country: </font>'.$ClosedBetacountry.'
&nbsp; <font color="0A8460">Timezone: </font>'.$ClosedBetatimezone.'
<div class="imgcontainer"><a href="'.$ClosedBetahomepageUrl.'"><img src="https://image.ibb.co/dHURv5/websiteicon.png" alt="" width="40" height="40" class="webimg"></a><a href="'.$ClosedBetafacebookUrl.'"><img src="https://image.ibb.co/f9Yda5/facebookicon.png" alt="" width="40" height="40" class="webimg"></a><a href="'.$ClosedBetadiscordUrl.'"><img src="https://image.ibb.co/cdQ22k/discordicon.png" alt="" width="40" height="40" class="webimg"></a>
</div></div></div>';
?>
