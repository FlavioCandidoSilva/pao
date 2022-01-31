<?php
    
    function add($a,$b){
        return $a + $b;
    }
   
   $arg = array('uri' => 'http://pao.com');
   $server = new SoapServer(null,$arg);
   $server->addFunction('add');
   $server ->handle();
 

?>