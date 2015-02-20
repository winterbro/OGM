<?php /*%%SmartyHeaderCode:2374054e7a1cbae5105-80885892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd506e0e78d557185e998e45e047a1f4b190e6d28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-grounds\\ogm\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1424462318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2374054e7a1cbae5105-80885892',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54e7a1cbcc7d73_59554860',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e7a1cbcc7d73_59554860')) {function content_54e7a1cbcc7d73_59554860($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost/training-grounds/ogm/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Søk" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Søk</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
