<?php /* Smarty version Smarty-3.1.19, created on 2015-02-20 22:06:21
         compiled from "C:\xampp\htdocs\training-grounds\ogm\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1863554e7a1cd4c16c5-07129761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '414d9fced8a2eb27f5a3d27826bdde747d454fbd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-grounds\\ogm\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1424462283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1863554e7a1cd4c16c5-07129761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54e7a1cd4eb2a6_75794577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e7a1cd4eb2a6_75794577')) {function content_54e7a1cd4eb2a6_75794577($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
