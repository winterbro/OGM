<?php /* Smarty version Smarty-3.1.19, created on 2015-02-20 21:51:54
         compiled from "C:\xampp\htdocs\training-grounds\ogm\admin\themes\default\template\controllers\products\input_text_lang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1860454e79e6aee2550-55818023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15a5413b38fc0f221a7b95108c88a40f83bb39c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-grounds\\ogm\\admin\\themes\\default\\template\\controllers\\products\\input_text_lang.tpl',
      1 => 1424462005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1860454e79e6aee2550-55818023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'maxchar' => 0,
    'input_name' => 0,
    'input_class' => 0,
    'input_value' => 0,
    'required' => 0,
    'maxlength' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54e79e6b1e29f3_64329862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e79e6b1e29f3_64329862')) {function content_54e79e6b1e29f3_64329862($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
	<div class="translatable-field row lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
		<div class="col-lg-9">
	<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['maxchar']->value)) {?>
		<div class="input-group">
			<span id="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
_counter" class="input-group-addon">
				<span class="text-count-down"><?php echo $_smarty_tpl->tpl_vars['maxchar']->value;?>
</span>
			</span>
			<?php }?>
			<input type="text"
			id="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
			class="form-control <?php if (isset($_smarty_tpl->tpl_vars['input_class']->value)) {?><?php echo $_smarty_tpl->tpl_vars['input_class']->value;?>
 <?php }?>"
			name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
			value="<?php echo (($tmp = @smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['input_value']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]))===null||$tmp==='' ? '' : $tmp);?>
"
			onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
			onblur="updateLinkRewrite();"
			<?php if (isset($_smarty_tpl->tpl_vars['required']->value)) {?> required="required"<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['maxchar']->value)) {?> data-maxchar="<?php echo $_smarty_tpl->tpl_vars['maxchar']->value;?>
"<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['maxlength']->value)) {?> maxlength="<?php echo $_smarty_tpl->tpl_vars['maxlength']->value;?>
"<?php }?> />
			<?php if (isset($_smarty_tpl->tpl_vars['maxchar']->value)) {?>
		</div>
		<?php }?>
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
		</div>
		<div class="col-lg-2">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
				<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
				<li>
					<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<?php }?>
<?php } ?>
<?php if (isset($_smarty_tpl->tpl_vars['maxchar']->value)) {?>
<script type="text/javascript">
function countDown($source, $target) {
	var max = $source.attr("data-maxchar");
	$target.html(max-$source.val().length);

	$source.keyup(function(){
		$target.html(max-$source.val().length);
	});
}

$(document).ready(function(){
<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
	countDown($("#<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"), $("#<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
_counter"));
<?php } ?>
});
</script>
<?php }?>
<?php }} ?>
