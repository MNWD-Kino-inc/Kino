<?php
/* Smarty version 3.1.43, created on 2022-12-05 19:46:09
  from 'C:\xampp\htdocs\Kino\prestashop\admin429saele3\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638e3c7138f2b3_67514222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0dd6cbc664a35f24ff4fde482ee8be68987dba6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kino\\prestashop\\admin429saele3\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1670225576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638e3c7138f2b3_67514222 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if ((isset($_smarty_tpl->tpl_vars['actions']->value))) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
