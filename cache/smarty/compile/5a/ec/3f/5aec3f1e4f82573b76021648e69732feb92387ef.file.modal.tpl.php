<?php /* Smarty version Smarty-3.1.19, created on 2015-02-21 03:51:22
         compiled from "C:\xampp\htdocs\training-grounds\ogm\admin404esm5ez\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1751654e7f2aa2256f8-94177038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aec3f1e4f82573b76021648e69732feb92387ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-grounds\\ogm\\admin404esm5ez\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1424485960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1751654e7f2aa2256f8-94177038',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54e7f2aa22f3c8_62616047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e7f2aa22f3c8_62616047')) {function content_54e7f2aa22f3c8_62616047($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>
