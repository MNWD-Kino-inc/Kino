<?php
/* Smarty version 3.1.43, created on 2022-11-21 22:42:59
  from 'C:\xampp\htdocs\delete\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_637bf0e3d81056_02594662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3e105712e3c7149e2e2069799e233f074982742' => 
    array (
      0 => 'C:\\xampp\\htdocs\\delete\\themes\\classic\\templates\\page.tpl',
      1 => 1669066191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637bf0e3d81056_02594662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1141054144637bf0e3d7b806_40762217', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_675357035637bf0e3d7c187_45036558 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1150362330637bf0e3d7bbe7_36472411 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_675357035637bf0e3d7c187_45036558', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1330376248637bf0e3d7f8d9_03268157 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1650899309637bf0e3d7fd75_97896287 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2022987880637bf0e3d7f584_83671072 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1330376248637bf0e3d7f8d9_03268157', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1650899309637bf0e3d7fd75_97896287', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1836761607637bf0e3d80781_63619384 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_626453839637bf0e3d80499_43492810 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1836761607637bf0e3d80781_63619384', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1141054144637bf0e3d7b806_40762217 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1141054144637bf0e3d7b806_40762217',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1150362330637bf0e3d7bbe7_36472411',
  ),
  'page_title' => 
  array (
    0 => 'Block_675357035637bf0e3d7c187_45036558',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_2022987880637bf0e3d7f584_83671072',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1330376248637bf0e3d7f8d9_03268157',
  ),
  'page_content' => 
  array (
    0 => 'Block_1650899309637bf0e3d7fd75_97896287',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_626453839637bf0e3d80499_43492810',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1836761607637bf0e3d80781_63619384',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1150362330637bf0e3d7bbe7_36472411', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2022987880637bf0e3d7f584_83671072', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_626453839637bf0e3d80499_43492810', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
