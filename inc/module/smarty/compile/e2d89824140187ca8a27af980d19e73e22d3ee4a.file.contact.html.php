<?php /* Smarty version Smarty-3.1.16, created on 2014-04-27 22:43:08
         compiled from "D:\wamp\www\test\view\default\contact.html" */ ?>
<?php /*%%SmartyHeaderCode:24355535d1756aa7408-16074476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2d89824140187ca8a27af980d19e73e22d3ee4a' => 
    array (
      0 => 'D:\\wamp\\www\\test\\view\\default\\contact.html',
      1 => 1398609786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24355535d1756aa7408-16074476',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535d1756af1795_85243208',
  'variables' => 
  array (
    'vp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535d1756af1795_85243208')) {function content_535d1756af1795_85243208($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>联系我们 - 太和县桔梗产业集群技术服务中心</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/modern-business.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>
  <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!-- Page Content -->

    <div class="container">

      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header">联系我们 <small>您可以在这里找到我们</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Contact</li>
          </ol>
        </div>

        <div class="col-lg-12">
          <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->


          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://ditu.google.cn/maps?f=q&amp;source=s_q&amp;hl=zh-CN&amp;geocode=&amp;q=%E5%AE%89%E5%BE%BD%E9%B9%8F%E5%AE%87%E4%B8%AD%E8%8D%AF%E6%9D%90&amp;aq=&amp;sll=31.820587,117.227239&amp;sspn=0.299307,0.676346&amp;brcurrent=3,0x35d1f426eebe2fbf:0xf34903cf81e9d9c4,0,0x35cdf052a9e3135f:0x17f3f63673d827ff%3B5,0,0&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=33.478146,115.476374&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;output=embed"></iframe>
        </div>

      </div><!-- /.row -->

      <div class="row">

        <div class="col-sm-8">
          <h3>让我们取得联系</h3>
          <p>如果您有什么很好的建议,您可以给我们留言,或者您可以电话联系,真挚的欢迎您的咨询与意见!</p>

            <form role="form" method="POST" action="contact-form-submission.php">
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input1">姓名</label>
	                <input type="text" name="contact_name" class="form-control" id="input1">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input2">邮箱</label>
	                <input type="email" name="contact_email" class="form-control" id="input2">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input3">电话</label>
	                <input type="phone" name="contact_phone" class="form-control" id="input3">
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group col-lg-12">
	                <label for="input4">留言</label>
	                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
	              </div>
	              <div class="form-group col-lg-12">
	                <input type="hidden" name="save" value="contact">
	                <button type="submit" class="btn btn-primary">提交</button>
	              </div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>太和县桔梗产业集群技术服务中心</h3>
          <h4>Contact Us</h4>
          <p>
            安徽省阜阳市太和县<br>
            李兴镇人民东路76号<br>
          </p>
          <p><i class="fa fa-phone"></i> <abbr title="Phone">电话</abbr>: 86 558 8391062</p>
          <p><i class="fa fa-envelope-o"></i> <abbr title="Email">传真</abbr>: 86 0558 8391222</p>
          <p><i class="fa fa-clock-o"></i> <abbr title="Hours">时间</abbr>: 周一 至 周五: 9:00 AM to 5:00 PM</p>

        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="container">

      <hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Company 2013</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

    <!-- JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.10.2.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/bootstrap.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/modern-business.js"></script>

  </body>
</html>
<?php }} ?>
