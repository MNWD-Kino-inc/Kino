<?php
/* Smarty version 3.1.43, created on 2022-12-05 20:43:49
  from 'C:\Users\maryk\xampp\htdocs\Kino\prestashop\themes\classic\templates\_partials\form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638e49f5a422a3_71202677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbee0de099842c1006b16bfaf908d657060f5d11' => 
    array (
      0 => 'C:\\Users\\maryk\\xampp\\htdocs\\Kino\\prestashop\\themes\\classic\\templates\\_partials\\form-errors.tpl',
      1 => 1670268803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638e49f5a422a3_71202677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1856235067638e49f5a40690_87910042', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_1856235067638e49f5a40690_87910042 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_1856235067638e49f5a40690_87910042',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
          <li class="alert alert-danger"><?php echo nl2br($_smarty_tpl->tpl_vars['error']->value);?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
