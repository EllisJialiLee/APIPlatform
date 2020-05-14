
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="theme-color" content="#fd4b5c">
<title>ICP备案查询-免费API-利熙网络</title>
</head>
<style type="text/css">
h3:hover {box-shadow:0px 0px 8px #D1D1D1;}
</style>
<div style="box-shadow: 5px 5px 25px 0 rgba(46,61,73,.2);border-radius:15px;font-size:13px;width:950px;font-family:微软雅黑,'Helvetica Neue',Arial,sans-serif;margin:10px auto 0px;border:0px solid #eee;max-width:100%;">
    <div style="width:100%;background-color: #3174ed;background-image: linear-gradient(90deg, #3174ed 0%, #FA8BFF 35%, #3fd9fb 88%);color:#FFFFFF;border-radius:15px 15px 0 0;">
        <h2 style="font-size:15px;word-break:break-all;padding:20px 32px;margin:0;text-align:center">ICP备案查询-免费API-利熙网络</h2>
    </div>
    <div style="margin:0px auto;width:90%">
        <h3 style="-webkit-transition: all .2s cubic-bezier(0, 0, 0, 0.48);-moz-transition: all .2s ease;border:.0625rem solid #fafafa;background:#fafafa repeating-linear-gradient(-45deg,#fff,#fff 1.125rem,transparent 1.125rem,transparent 2.25rem);margin:15px 0px;padding:20px;border-radius:5px;font-size:14px;color:#333;">
		# ICP备案查询API请求方式 #
		<ul>
		<li>Method: GET</li>
		</ul>
		<hr>
		# 请求地址 #<br/>
		<a style="color:#fd4b5c;text-decoration:none;">https://api.liecnk.com/icp/api.php</a><br/>
		# 参数 #<br/>
		<li>dm //要查询ICP备案的域名,必填)</li> 
		<hr>
		# 返回数据 #<br/>
		<div style="width:100%;background-color: #000;background-image: linear-gradient(90deg, #6694ed 0%,);color:#FFFFFF;border-radius:5px">
		{"code":"200","主办单位名称":"深圳市腾讯计算机系统有限公司","主办单位性质":"企业","网站备案/许可证号":"粤B2-20090059-5","网站名称":"腾讯网","网站首页网址":"www.qq.com","审核时间":"2018/11/9 0:00:00"}<br/>
		</div>
		<hr>
		# 备注 #<br/>
          <div style="width:100%;background-color: #000;background-image: linear-gradient(90deg, #6694ed 0%,);color:#FFFFFF;border-radius:5px">
		如果你是小白，你可以尝试这样做来调用API<br/>
       <&#63php <br/>
$dm = $_GET['dm'];<br/>
$str = file_get_contents('https://api.liecnk.com/icp/api.php?dm='.$dm);<br/>
$data = json_decode($str,ture);<br/>
$a = $data['主办单位名称'];<br/>
$b = $data['主办单位性质'];<br/>
$c = $data['网站备案/许可证号'];<br/>
$d = $data['网站名称'];<br/>
$e = $data['网站首页网址'];<br/>
$f = $data['审核时间'];<br/>
?><br/>
&#60!--HTML代码--><br/>
&#60ul><br/>
  &#60li><&#63php echo $a;?>&#60/li><br/>
  &#60li><&#63php echo $b;?>&#60/li><br/>
  &#60li><&#63php echo $c;?>&#60/li><br/>
  &#60li><&#63php echo $d;?>&#60/li><br/>
  &#60li><&#63php echo $e;?>&#60/li><br/>
  &#60li><&#63?php echo $f;?>&#60/li><br/>
&#60/ul><br/>
最后,假设写在了api.php,访问api/?dm=域名即可<br/>
&#60!--HTML代码结束-->
            </div>
		<hr>
		# 示例 #<br/>
		<a style="color:#fd4b5c;text-decoration:none；" target="_blank">https://api.liecnk.com/icp/api.php?dm=qq.com</a>
		</h3>
          </div>
</div>
</html>