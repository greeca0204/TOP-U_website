<?php
/**
+----------------------------------------------------------
* The goal of this function is to be a generic function that can be used to parse almost any input and     * render it XSS safe. For more information on actual XSS attacks, check out http://ha.ckers.org/xss.html. * Another excellent site is the XSS Database which details each attack and how it works.
* XSS过滤
+----------------------------------------------------------
* @param mixed $value 变量
+----------------------------------------------------------
* @return mixed 过滤后的字符串
+----------------------------------------------------------
*/
function RemoveXSS($val) {
// remove all non-printable characters. CR(0a) and LF(0b) and TAB(9) are allowed
// this prevents some character re-spacing such as <java\0script>
// note that you have to handle splits with \n, \r, and \t later since they *are* allowed in some          // inputs
$val = preg_replace('/([\x00-\x08,\x0b-\x0c,\x0e-\x19])/', '', $val);
// straight replacements, the user should never need these since they're normal characters
// this prevents like <IMG SRC=@avascript:alert('XSS')>
$search = 'abcdefghijklmnopqrstuvwxyz';
$search .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$search .= '1234567890!@#$%^&*()';
$search .= '~`";:?+/={}[]-_|\'\\';
for ($i = 0; $i < strlen($search); $i++) {
// ;? matches the ;, which is optional
// 0{0,7} matches any padded zeros, which are optional and go up to 8 chars
// @ @ search for the hex values
$val = preg_replace('/(&#[xX]0{0,8}'.dechex(ord($search[$i])).';?)/i', $search[$i], $val);//with a ;
// @ @ 0{0,7} matches '0' zero to seven times
$val = preg_replace('/(�{0,8}'.ord($search[$i]).';?)/', $search[$i], $val); // with a ;
}
// now the only remaining whitespace attacks are \t, \n, and \r
$ra1 = Array('javascript', 'vbscript', 'expression', 'applet', 'meta', 'xml', 'blink', 'link', 'style', 'script', 'embed', 'object', 'iframe', 'frame', 'frameset', 'ilayer', 'layer', 'bgsound', 'title', 'base');
$ra2 = Array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload');
$ra = array_merge($ra1, $ra2);
$found = true; // keep replacing as long as the previous round replaced something
while ($found == true) {
$val_before = $val;
for ($i = 0; $i < sizeof($ra); $i++) {
$pattern = '/';
for ($j = 0; $j < strlen($ra[$i]); $j++) {
if ($j > 0) {
$pattern .= '(';
$pattern .= '(&#[xX]0{0,8}([9ab]);)';
$pattern .= '|';
$pattern .= '|(�{0,8}([9|10|13]);)';
$pattern .= ')*';
}
$pattern .= $ra[$i][$j];
}
$pattern .= '/i';
$replacement = substr($ra[$i], 0, 2).'<x>'.substr($ra[$i], 2); // add in <> to nerf the tag
$val = preg_replace($pattern, $replacement, $val); // filter out the hex tags
if ($val_before == $val) {
// no replacements were made, so exit the loop
$found = false;
}
}
}
return $val;
}
/*
+----------------------------------------------------------
* 函数名称：inject_check()
+----------------------------------------------------------
* 函数作用：检测提交的值是不是含有SQL注射的字符，防止注射，保护服务器安全
+----------------------------------------------------------
* @param mixed $sql_str: 提交的变量
+----------------------------------------------------------
* @return mixed 返回检测结果，ture or false
+----------------------------------------------------------
*/
function inject_check($sql_str) {
return $sql_str = preg_replace('/select|insert|update|delete|\'|\/\*|\*|\.\.\/|\.\/|union|into|load_file|outfile/','', $sql_str);    // 进行过滤
}
/*
+----------------------------------------------------------
* 函数名称：escapeMysql()
* SQL注入主要是提交不安全的数据给数据库来达到攻击目的。为了防止SQL注入攻击，PHP自带一个功能可以对输入的字符串进行处理，可以在较底层对 * 输入进行安全上的初步处理，也即Magic Quotes。(php.ini magic_quotes_gpc)。如果magic_quotes_gpc选项启用，那么输入的字符串    * 中的单引号，双引号和其它一些字符前将会被自动加上反斜杠\。
* 但Magic Quotes并不是一个很通用的解决方案，没能屏蔽所有有潜在危险的字符，并且在许多服务器上Magic Quotes并没有被启用。所以，我们    * 还需要使用其它多种方法来防止SQL注入。许多数据库本身就提供这种输入数据处理功能。例如PHP的MySQL操作函数中有一个叫                 * mysql_real_escape_string()的函数，可将特殊字符和可能引起数据库操作出错的字符转义。
+----------------------------------------------------------
* 函数作用：检测提交的值是不是含有SQL注射的字符，防止注射，保护服务器安全
+----------------------------------------------------------
* @param mixed $sql_str: 提交的变量
+----------------------------------------------------------
* @return mixed 返回检测结果，ture or false
+----------------------------------------------------------
*/
function escapeMysql($el){
if(is_array($el))
{
return   array_map("escapeMysql",   $el   );
}else{
/*如果Magic Quotes功用启用    */
if (!get_magic_quotes_gpc()) {
$el = mysql_real_escape_string(trim($el));
}
$el    =    str_ireplace("%5d%5c", "'", $el);
$el = str_replace("_", "\_", $el);    // 把 '_'过滤掉
$el = str_replace("%", "\%", $el);    // 把 '%'过滤掉
$el = nl2br($el);    // 回车转换
return   $el;
}
}
/**
+----------------------------------------------------------
* 变量过滤
+----------------------------------------------------------
* @param mixed $value 变量
+----------------------------------------------------------
* @return mixed
+----------------------------------------------------------
*/
function var_filter_deep($value) {
return $value;
if(is_array($value))
{
return $value =   array_map("var_filter_deep",   $value   );
}else{
$value = RemoveXSS($value);
//$value = inject_check($value);
$value = escapeMysql($value);
return $value;
}
}
/*
+----------------------------------------------------------
* 函数名称：verify_id()
+----------------------------------------------------------
* 函数作用：校验提交的ID类值是否合法
+----------------------------------------------------------
* 参　　数：$id: 提交的ID值
+----------------------------------------------------------
* 返 回 值：返回处理后的ID
+----------------------------------------------------------
*/
function verify_id($id=null) {
if (!$id) { exit('没有提交参数！'); }    // 是否为空判断
elseif (inject_check($id)) { exit('提交的参数非法！'); }    // 注射判断
elseif (!is_numeric($id)) { exit('提交的参数非法！'); }    // 数字判断
$id = intval($id);    // 整型化
return $id;
}
/**
+----------------------------------------------------------
* 变量安全过滤
+----------------------------------------------------------
* @static
* @access public
+----------------------------------------------------------
* @return string
+----------------------------------------------------------
*/
function varFilter ()
{
$_SERVER = array_map(   "var_filter_deep", $_SERVER );
$_REQUEST = array_map(   "var_filter_deep", $_REQUEST);
$_POST    = array_map(   "var_filter_deep", $_POST   );
$_GET     = array_map(   "var_filter_deep", $_GET    );
$_COOKIE = array_map(   "var_filter_deep", $_COOKIE );
//print_r($_POST);
}
?>