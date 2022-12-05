<?php
/* Smarty version 3.1.43, created on 2022-12-05 19:46:09
  from 'C:\xampp\htdocs\Kino\prestashop\modules\ps_facetedsearch\views\templates\admin\_partials\shops.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638e3c71d86044_82573355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7826f44a0f888ec4f974b28ad6c4b06a2c8518ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kino\\prestashop\\modules\\ps_facetedsearch\\views\\templates\\admin\\_partials\\shops.tpl',
      1 => 1670225584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638e3c71d86044_82573355 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['asso_shops']->value))) {?>
  <div class="form-group">
    <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose shop association:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
    <div class="col-lg-9"><?php echo $_smarty_tpl->tpl_vars['asso_shops']->value;?>
</div>
  </div>
<?php }
}
}
