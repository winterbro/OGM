<?php /* Smarty version Smarty-3.1.19, created on 2015-02-20 21:52:41
         compiled from "C:\xampp\htdocs\training-grounds\ogm\admin\themes\default\template\layout-export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2368354e79e9977d441-87792368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9767b7182d3b25e923a24a5b5d5d8bd77310c82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-grounds\\ogm\\admin\\themes\\default\\template\\layout-export.tpl',
      1 => 1424461999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2368354e79e9977d441-87792368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'export_precontent' => 0,
    'export_headers' => 0,
    'text_delimiter' => 0,
    'header' => 0,
    'export_content' => 0,
    'line' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54e79e997d1812_80587227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e79e997d1812_80587227')) {function content_54e79e997d1812_80587227($_smarty_tpl) {?>
<?php echo $_smarty_tpl->tpl_vars['export_precontent']->value;?>
<?php  $_smarty_tpl->tpl_vars['header'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['header']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['export_headers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['header']->key => $_smarty_tpl->tpl_vars['header']->value) {
$_smarty_tpl->tpl_vars['header']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['text_delimiter']->value;?>
<?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php echo $_smarty_tpl->tpl_vars['text_delimiter']->value;?>
;<?php } ?>

<?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['export_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['line']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['text_delimiter']->value;?>
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<?php echo $_smarty_tpl->tpl_vars['text_delimiter']->value;?>
;<?php } ?>

<?php } ?><?php }} ?>
