<?php /* Smarty version Smarty-3.1.19, created on 2015-02-20 21:51:24
         compiled from "C:\xampp\htdocs\training-grounds\ogm\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1920054e79e4c1c9819-05290231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76581c73f64f904c0c2887ee57952c4f0736cb77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-grounds\\ogm\\admin\\themes\\default\\template\\content.tpl',
      1 => 1424461999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1920054e79e4c1c9819-05290231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54e79e4c2a42b1_82818229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e79e4c2a42b1_82818229')) {function content_54e79e4c2a42b1_82818229($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
