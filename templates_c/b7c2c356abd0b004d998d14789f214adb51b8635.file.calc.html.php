<?php /* Smarty version Smarty-3.1.17, created on 2022-07-03 22:47:39
         compiled from "C:\xampp\htdocs\php_03\app\calc.html" */ ?>
<?php /*%%SmartyHeaderCode:122279060562c2006ba30069-48387331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7c2c356abd0b004d998d14789f214adb51b8635' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_03\\app\\calc.html',
      1 => 1656880304,
      2 => 'file',
    ),
    'c5b62abc2adbe8a536190c0b976dcf623f7845e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_03\\templates\\main.html',
      1 => 1656881189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122279060562c2006ba30069-48387331',
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
  'unifunc' => 'content_62c2006ba8bde1_69043024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62c2006ba8bde1_69043024')) {function content_62c2006ba8bde1_69043024($_smarty_tpl) {?><html lang="en"><head>
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
			<article class="col-sm-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Podaj parametry</h1>
				</header>
				<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" id="x" type="text" placeholder="Kwota" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" id="y" type="text" placeholder="Lata" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['lata'];?>
">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" id="y" type="text" placeholder="Procent" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['procent'];?>
">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<input class="btn btn-action" type="submit" value="Oblicz ratę">
							</div>
						</div>
					</form>

			</article>
		</div>
                <div class ="row">
                    <article class="col-sm-4 maincontent">
                        
                        
			<?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
				<?php if (count($_smarty_tpl->tpl_vars['messages']->value)>0) {?> 
					<h4>Wystąpiły błędy: </h4>
					<ol class="err">
					<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
					<?php } ?>
					</ol>
				<?php }?>
			<?php }?>

			
			<?php if (isset($_smarty_tpl->tpl_vars['infos']->value)) {?>
				<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?> 
					<h4>Informacje: </h4>
					<ol class="inf">
					<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
					<?php } ?>
					</ol>
				<?php }?>
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {?>
				<h4>Wynik</h4>
				<p class="res">
				<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

				</p>
			<?php }?>

                    </article>
                </div>
	</div>	<!-- /container -->

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="./Contact us - Progressus Bootstrap template_files/jquery.min.js.pobrane"></script>
	<script src="./Contact us - Progressus Bootstrap template_files/bootstrap.min.js.pobrane"></script>
	<script src="./Contact us - Progressus Bootstrap template_files/headroom.min.js.pobrane"></script>
	<script src="./Contact us - Progressus Bootstrap template_files/jQuery.headroom.min.js.pobrane"></script>
	<script src="./Contact us - Progressus Bootstrap template_files/template.js.pobrane"></script>

	</div>
		
	<footer id="footer" class="top-space">

        	<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-left">
                                                            Ta część stopki została wpisana z szablonu kalkulatora
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
