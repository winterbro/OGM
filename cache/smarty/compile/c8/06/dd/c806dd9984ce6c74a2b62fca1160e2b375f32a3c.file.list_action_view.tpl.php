<?php /* Smarty version Smarty-3.1.19, created on 2015-02-20 21:52:27
         compiled from "C:\xampp\htdocs\training-grounds\ogm\admin\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2883454e79e8b73b619-21333787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c806dd9984ce6c74a2b62fca1160e2b375f32a3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-grounds\\ogm\\admin\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1424462026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2883454e79e8b73b619-21333787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54e79e8b773ec6_88317461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e79e8b773ec6_88317461')) {function content_54e79e8b773ec6_88317461($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
