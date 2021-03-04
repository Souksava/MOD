<?php
// // $string=exec('getmac');
// // $mac=substr($string, 0, 17); 
// // echo $mac;



// //Simple & effective way to get client mac address
// // Turn on output buffering
// ob_start();
// //Get the ipconfig details using system commond
// system('ipconfig /all');

// // Capture the output into a variable

//     $mycom=ob_get_contents();

// // Clean (erase) the output buffer

//     ob_clean();

// $findme = "Physical";
// //Search the "Physical" | Find the position of Physical text
// $pmac = strpos($mycom, $findme);

// // Get Physical Address
// $mac=substr($mycom,($pmac+36),17);
// //Display Mac Address
// echo $mac;



$ipAddress=$_SERVER['REMOTE_ADDR'];
$macAddr=false;

#run the external command, break output into lines
$arp=`arp -a $ipAddress`;
$lines=explode("\n", $arp);

#look for the output line describing our IP address
foreach($lines as $line)
{
   $cols=preg_split('/\s+/', trim($line));
   if ($cols[0]==$ipAddress)
   {
       $macAddr=$cols[1];
   }
}





?>