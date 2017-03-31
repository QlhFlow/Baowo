<?php
$code = [2004,2003,1003];
$r = array();
$r['start'] =$code[rand(0,2)];
$r['msg'] = 0;
$r['data'] = rand(1,4);

echo json_encode($r);

