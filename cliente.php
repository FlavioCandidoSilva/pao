<?php

    

    $arg = array('uri' => 'http://pao.com' , 'location' => 'http://localhost/pao/index.php');
    $client = new SoapClient(null,$arg);
    var_dump($client -> add(60,60));
    
?>