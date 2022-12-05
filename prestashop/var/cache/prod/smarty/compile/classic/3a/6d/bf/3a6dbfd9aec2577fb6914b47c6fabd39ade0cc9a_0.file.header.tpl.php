<?php
/* Smarty version 3.1.43, created on 2022-12-05 19:46:09
  from 'C:\xampp\htdocs\Kino\prestashop\modules\ps_facetedsearch\views\templates\admin\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638e3c71c8a0d2_41036403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a6dbfd9aec2577fb6914b47c6fabd39ade0cc9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kino\\prestashop\\modules\\ps_facetedsearch\\views\\templates\\admin\\_partials\\header.tpl',
      1 => 1670225584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638e3c71c8a0d2_41036403 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
  <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Template name:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
  <div class="col-lg-9">
    <input type="text" id="layered_tpl_name" name="layered_tpl_name" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>
" />
    <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Only as a reminder','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</p>
  </div>
</div>
<?php }
}
