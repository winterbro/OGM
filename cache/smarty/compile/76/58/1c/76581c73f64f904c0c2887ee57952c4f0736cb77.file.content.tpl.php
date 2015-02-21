<?php /* Smarty version Smarty-3.1.19, created on 2015-02-21 03:42:58
         compiled from "C:\xampp\htdocs\training-grounds\ogm\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:677554e7f0b2d1c7a5-31892921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76581c73f64f904c0c2887ee57952c4f0736cb77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-grounds\\ogm\\admin\\themes\\default\\template\\content.tpl',
      1 => 1424485931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '677554e7f0b2d1c7a5-31892921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54e7f0b2e09424_94263113',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e7f0b2e09424_94263113')) {function content_54e7f0b2e09424_94263113($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
