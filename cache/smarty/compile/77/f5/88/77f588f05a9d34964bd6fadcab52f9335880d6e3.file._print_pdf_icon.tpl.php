<?php /* Smarty version Smarty-3.1.19, created on 2015-02-21 03:43:34
         compiled from "C:\xampp\htdocs\training-grounds\ogm\admin\themes\default\template\controllers\slip\_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:945154e7f0d614f286-45276870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77f588f05a9d34964bd6fadcab52f9335880d6e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-grounds\\ogm\\admin\\themes\\default\\template\\controllers\\slip\\_print_pdf_icon.tpl',
      1 => 1424485956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '945154e7f0d614f286-45276870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54e7f0d617b229_04892674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e7f0d617b229_04892674')) {function content_54e7f0d617b229_04892674($_smarty_tpl) {?>



<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateOrderSlipPDF&amp;id_order_slip=<?php echo intval($_smarty_tpl->tpl_vars['order_slip']->value->id);?>
">
	<i class="icon-file-text"></i>
	<?php echo smartyTranslate(array('s'=>'Download credit slip'),$_smarty_tpl);?>

</a>

<?php }} ?>
