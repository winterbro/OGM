<?php /* Smarty version Smarty-3.1.19, created on 2015-02-21 03:43:21
         compiled from "C:\xampp\htdocs\training-grounds\ogm\themes\default-bootstrap\modules\blocknewproducts\blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:468654e7f0c910cf42-51449953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '651d4889a0917ff80395d174ada25fdfa2897353' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-grounds\\ogm\\themes\\default-bootstrap\\modules\\blocknewproducts\\blocknewproducts_home.tpl',
      1 => 1424486262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '468654e7f0c910cf42-51449953',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54e7f0c9141d21_18413435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e7f0c9141d21_18413435')) {function content_54e7f0c9141d21_18413435($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts'), 0);?>

<?php } else { ?>
<ul id="blocknewproducts" class="blocknewproducts tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>