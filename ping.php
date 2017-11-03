<s<?php
function urlExists($url=NULL)  
{ 
    $return_val; 
    if($url == NULL) 
    {
            return 'null';  
    }
    else {
        $ch = curl_init($url);  
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);  
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
        $data = curl_exec($ch);  
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);  
        curl_close($ch);  
        $return_val = $httpcode;
        return $return_val;
        /*
        if($httpcode>=200 && $httpcode<300){  
            return true;  
        } else {  
            return false;  
        } 
        */
    }
 
} 
?>
<html>
<head>
 <title>Ping Test</title>
</head>
<body>

<?php
$address = 'www.google.com';
$info = urlExists($address);
print('Can I ping ' . $address . '?</br>');
print($info);


/*
if (urlExists($address))
    {
        echo 'response ok!';
    }
    else {
        echo 'does not exist';
    }
*/
?>
</body>
</html>