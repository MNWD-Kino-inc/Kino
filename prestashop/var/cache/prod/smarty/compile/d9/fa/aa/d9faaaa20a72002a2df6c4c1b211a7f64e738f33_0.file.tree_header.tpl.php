<?php
/* Smarty version 3.1.43, created on 2022-12-05 19:46:09
  from 'C:\xampp\htdocs\Kino\prestashop\admin429saele3\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638e3c714c4276_79393728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9faaaa20a72002a2df6c4c1b211a7f64e738f33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kino\\prestashop\\admin429saele3\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1670225576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638e3c714c4276_79393728 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
