<?php /* Smarty version Smarty-3.1.19, created on 2015-02-20 21:52:37
         compiled from "C:\xampp\htdocs\training-grounds\ogm\admin\themes\default\template\helpers\tree\tree_node_folder_checkbox_shops.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2050554e79e95a22914-96210802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7990a1635aa18e57f8453760b15a17d47f2d8753' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-grounds\\ogm\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_folder_checkbox_shops.tpl',
      1 => 1424462027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2050554e79e95a22914-96210802',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'table' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54e79e95b314e1_83423180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e79e95b314e1_83423180')) {function content_54e79e95b314e1_83423180($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-folder-name-disable<?php }?>">
		<input type="checkbox" name="checkBoxShopGroupAsso_<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo smartyTranslate(array('s'=>'Group: %s','sprintf'=>$_smarty_tpl->tpl_vars['node']->value['name']),$_smarty_tpl);?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li><?php }} ?>
