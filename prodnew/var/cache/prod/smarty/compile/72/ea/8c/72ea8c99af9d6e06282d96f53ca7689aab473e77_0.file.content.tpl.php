<?php
/* Smarty version 3.1.43, created on 2022-11-21 22:43:52
  from 'C:\xampp\htdocs\delete\admin634ujqydp\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_637bf118821468_84802563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72ea8c99af9d6e06282d96f53ca7689aab473e77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\delete\\admin634ujqydp\\themes\\default\\template\\content.tpl',
      1 => 1669066188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637bf118821468_84802563 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
