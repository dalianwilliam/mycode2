<?php 
header('Cache-Control:max-agr=600'); //缓存时间600秒
function mycall($mydata) 
{ 
$id=str_replace("apples", "oranges", $mydata);
   // replace all the apples with oranges 
   return ($id); 
} 
 
 
ob_start("mycall"); 
 
?> 
<html> 
<body> 
<p>It's like comparing apples to oranges.</p> 
<p>&nbsp;</p>
</body>//开源代码phpfensi.com 
</html> 
<?php 
 
ob_end_flush(); 
 
?> 