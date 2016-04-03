function smarty_modifier_unescape($str) 
{ 
    $str = rawurldecode($str); 
    preg_match_all("/(?:%u.{4})|[^%]+/",$str,$r); 
    $ar = $r[0]; 
    foreach($ar as $k=>$v) { 
    if(substr($v,0,2) == "%u" && strlen($v) == 6) 
    $ar[$k] = iconv("UCS-2","GB2312",@pack("H4",substr($v,-4))); 
    } 
    return join("",$ar); 
} 