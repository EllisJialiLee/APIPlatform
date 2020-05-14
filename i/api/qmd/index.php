<?php require_once($_SERVER['DOCUMENT_ROOT']."/i/website.php");?>	
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>来访IP签名档 - 免费API - <?php echo $website_array["website_banner"];?></title>
    <meta name="keywords" content="<?php echo $website_array["website_keywords"];?>">
	<meta name="description" content="<?php echo $website_array["website_description"];?>">
    <meta name="author" content="<?php echo $website_array["website_author"];?>">
    <link href="/i/css/api_bootstrap.min.css" rel="stylesheet">
    <link href="/i/css/api_site.min.css" rel="stylesheet">
</head>
<body class="home-template">
    <header class="site-header">
        <nav class="navbar navbar-static-top main-navbar" id="top">
            <div class="container">
                <div class="navbar-header">
                    <h3><a href="/"><?php echo $website_array["website_banner"];?></a></h3>
                </div>
                <nav id="bs-navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                       <li><a href="<?php echo $website_array["website_url"];?>">首页</a></li>
                       <li><a target="_blank" href="<?php echo $website_array["net_url"];?>"><?php echo $website_array["net_name"];?></a></li>
					   <li><a target="_blank" href="<?php echo $website_array["blog_url"];?>"><?php echo $website_array["blog_name"];?></a></li>
                       <li><a href="#about" onclick="_hmt.push(['_trackEvent', 'main-navbar', 'click', 'about'])">关于</a></li>
                    </ul>
                </nav>
            </div>
        </nav>
        <div class="container jumbotron">
            <div class="row">
                <div class="col-xs-12">
                    <h1><img src="/img/API1.svg" alt="APIlogo" class="hidden">来访IP签名档</h1>
                    <p>精美访客IP签名卡片</p>
                </div>
            </div>
        </div>
        <div class="package-info well well-md text-center">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#api" data-toggle="tab">API文档</a></li>
                    <!--<li><a href="#code" data-toggle="tab">错误码参照</a></li>
                    <li><a href="#demo" data-toggle="tab">示例代码</a></li>-->
                </ul>
            </div>
        </div>
    </header>
    <main class="container tab-content" id="myTabContent">
        <article class="markdown-body tab-pane fade in active" id="api">
            <div class="api-sub-content">
                <div class="simpleline"><strong>接口地址：</strong><span class="url"><?php echo $website_array["api_url"];?><?php echo basename(dirname(__FILE__))?>/api</span></div>
                <div class="simpleline"><strong>返回格式：</strong><span class="url">json</span></div>
                <div class="simpleline"><strong>请求方式：</strong><span class="url">get/post</span></div>
                <div class="simpleline"><strong>请求示例：</strong><span class="url"><?php echo $website_array["api_url"];?><?php echo basename(dirname(__FILE__))?>/api</span></div>
                <div class="simpleTable">
                    <!--<p class="linep">请求参数说明：</p>
                    		        <table class="api-table" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		              <tr class="title">
		                  <th width="20"></th>
		                  <th width="100">名称</th>
		                  <th width="60">必填</th>
		                  <th width="80">类型</th>
		                  <th>说明</th>
		              </tr>
		              		            <tr>
		                  <td>&nbsp;</td>
		                  <td class="url"></td>
		                  <td class="url">是</td>
		                  <td class="url">string</td>
		                  <td></td>
		              </tr>
		              		          </tbody>
		          </table>
		          </div>-->
		          <div class="simpleTable">
		              <p class="linep">返回参数说明：</p>
		               <table class="api-table" border="0" cellspacing="0" cellpadding="0">
		              <tbody><tr class="title">
		                  <th width="20"></th>
		                  <th width="100">名称</th>
		                  <th width="80">类型</th>
		                  <th>说明</th>
		              </tr>
		              		            <tr>
		                  <td>&nbsp;</td>
		                  <td class="url">无返回数据</td>
		                  <td class="url">string</td>
		                  <td>直接输出图片</td>
		              </tr>
		              		            </tbody>
		        </table>
                </div>
                <div class="simpleTable">
                   <p class="linep">返回示例：</p><div class="prediv"><pre>{
本API无返回数据，直接输出卡片图。
}</pre></div>		    </div>
		</div>
        </article>
        <article class="markdown-body tab-pane fade" id="code">
            <div class="api-sub-content">
                <div class="simpleTable">
                    <p class="linep"> 错误码格式说明：</p> 
		    <table class="api-table" border="0" cellspacing="0" cellpadding="0"> 
		     <tbody> 
		      <tr> 
		       <th width="20"> &nbsp; </th> 
		       <th width="200"> 名称 </th> 
		       <th width="200"> 类型 </th> 
		       <th> 说明 </th> 
		      </tr> 
		      <tr> 
		       <td> &nbsp; </td> 
		       <td> code </td> 
		       <td> string </td> 
		       <td> 返回的状态码 -1/1 失败/成功 </td> 
		      </tr> 
		      </tr> 
		      <tr> 
		       <td> &nbsp; </td> 
		       <td> msg </td> 
		       <td> string </td> 
		       <td> 返回结果提示信息！ </td> 
		      </tr> 
		     </tbody> 
		    </table> 
		   </div> 
		  </div>
	</article>
        <article class="markdown-body tab-pane fade" id="demo">
            <div class="simpleTable">
                <p class="linep">PHP演示：</p>
		    <div class="prediv">
		    	<pre>&lt;?php

?&gt;</pre>
                <p class="linep">HTML演示：</p>
		    <div class="prediv">
		    	<pre>&#60!--HTML代码-->
&#60ul>
  &#60li><暂无>&#60/li>
&#60/ul>
&#60!--HTML代码结束--></pre>
		    </div>
		</div>
	</article>
</main>
    <footer id="footer" class="footer hidden-print">
        <div class="container">
            <div class="row">
                <div class="footer-about col-md-6 col-sm-12" id="about">
                    <h4><?php echo $footer_array["footer_title1"];?></h4>
			<p><p>
				<a href="/." target="_blank" onclick="_hmt.push(['_trackEvent', 'footer', 'click', 'footer-bootcss.com'])"><?php echo $website_array["website_title"];?></a><?php echo $footer_array["footer_text1"];?>
			</p>
			<p><?php echo $footer_array["footer_text2"];?></p>
			<p><?php echo $footer_array["footer_text3"];?></p>
		</div>
                <div class="footer-links col-md-4 col-sm-12">
                    <h4><?php echo $footer_array["footer_title2"];?></h4>
                     <p><?php echo $links_array["links"];?>
		</div>
                <div class="footer-techs col-md-2 col-sm-12">
                    <h4><?php echo $footer_array["footer_title3"];?></h4>
                     <p></p><img src="<?php echo $footer_array["footer_img"];?>" style="width: 100%;">
                </div>
            </div>
        </div>
       <div class="copy-right">
            <span><?php echo $footer_array["footer_copyright"];?></span><span><a href="http://beian.miit.gov.cn/" target="_blank"><?php echo $footer_array["footer_icp"];?></a></span>
        </div>
  </footer>
    <script src="/i/js/api_jquery.min.js"></script>
    <script src="/i/js/api_bootstrap.min.js"></script>
</body>
</html>