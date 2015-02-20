<?php /* Smarty version Smarty-3.1.19, created on 2015-02-20 21:52:06
         compiled from "C:\xampp\htdocs\training-grounds\ogm\admin\themes\default\template\controllers\shop\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1726854e79e76151bf7-97288266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40913133e2db5021fd63fd016b9f9a9b8d5ae705' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-grounds\\ogm\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1424462014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1726854e79e76151bf7-97288266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54e79e761deb15_69532551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e79e761deb15_69532551')) {function content_54e79e761deb15_69532551($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
