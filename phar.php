<?php


$phar = new Phar('user.phar', 0, 'user.phar');  
    // 建立压缩目录  
    $phar->buildFromDirectory(dirname(__FILE__) . '/user');  
    // 压缩php文件的入口文件  
    $phar->setStub($phar->createDefaultStub('test.php', 'test.php'));  
    // 压缩格式  
    $phar->compressFiles(Phar::GZ);  
//phar-demo
//phar-demo 123
//phar-demo 456
//phar-demo 789
//phar-demo 111111112222
//phar-demo 3456
//phar-demo 456789
