<?php
/* Smarty version 3.1.43, created on 2022-11-30 21:58:31
  from 'C:\xampp\htdocs\kino\prestashop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6387c3f7909ec9_23186690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ba89657ac65326c3214446fcd337896c1458db6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kino\\prestashop\\themes\\classic\\templates\\index.tpl',
      1 => 1669841324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6387c3f7909ec9_23186690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7503756116387c3f7903c64_97081560', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_5260574126387c3f7904833_46575447 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_3722998416387c3f7906b27_68291770 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_15033817606387c3f7905c89_12319278 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3722998416387c3f7906b27_68291770', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_7503756116387c3f7903c64_97081560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_7503756116387c3f7903c64_97081560',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_5260574126387c3f7904833_46575447',
  ),
  'page_content' => 
  array (
    0 => 'Block_15033817606387c3f7905c89_12319278',
  ),
  'hook_home' => 
  array (
    0 => 'Block_3722998416387c3f7906b27_68291770',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5260574126387c3f7904833_46575447', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15033817606387c3f7905c89_12319278', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
