<?php /* Smarty version Smarty-3.1.17, created on 2022-07-05 17:57:36
         compiled from "C:\xampp\htdocs\php_03\app\otherpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212089296662c45f70876185-05121926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6e9928a4541b4eaf01670171b3be148492c767f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_03\\app\\otherpage.tpl',
      1 => 1657036622,
      2 => 'file',
    ),
    '27165fd4b93b05182a23cf7c38449bca5611528e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_03\\templates\\main.tpl',
      1 => 1656881189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212089296662c45f70876185-05121926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_url' => 0,
    'page_title' => 0,
    'page_header' => 0,
    'page_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_62c45f7090a447_50537320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62c45f7090a447_50537320')) {function content_62c45f7090a447_50537320($_smarty_tpl) {?><html lang="en"><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Progressus - Free business bootstrap template by GetTemplate</title>

	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css">

</head>

<body class="home" style="">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom animated">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/images/logo.png" alt="A logo"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/index.php">Home</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/other.php">About</a></li>
					
					
					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->
	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
				<h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_header']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
				<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
</p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<div class="container">
		<br> <br>
		
<div class="container">
		<div class="row">
        		<header class="page-header">
					<h1 class="page-title">To jest inna strona</h1>
    				</header>
                </div>		
	</div>	<!-- /container -->


	</div>
		
	<footer id="footer" class="top-space">

        	<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-left">
                                                            Ta część stopki została wpisana z drugiego szablonu
                                                        </p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Wykonano na podstawie szablonu Progressus, <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>

</body></html><?php }} ?>
