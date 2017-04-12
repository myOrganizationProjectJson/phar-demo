<?php


require_once 'user.class.php';  
  
$u = new User();  
$u->set_name("lyf");  
$u->set_email("lyf@163.com");  
$u->introduce() ;