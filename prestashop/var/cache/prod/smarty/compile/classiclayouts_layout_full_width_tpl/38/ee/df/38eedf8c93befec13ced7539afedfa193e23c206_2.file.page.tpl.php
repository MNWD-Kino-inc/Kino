<?php
/* Smarty version 3.1.43, created on 2022-11-30 21:58:31
  from 'C:\xampp\htdocs\kino\prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6387c3f79e2e01_75890372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38eedf8c93befec13ced7539afedfa193e23c206' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kino\\prestashop\\themes\\classic\\templates\\page.tpl',
      1 => 1669841324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6387c3f79e2e01_75890372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1130183166387c3f79d83e8_36177057', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_12913544566387c3f79dafe7_70770904 extends Smarty_Internal_Block
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
class Block_8441725926387c3f79da470_79796505 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12913544566387c3f79dafe7_70770904', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_13202361436387c3f79dffe8_41967586 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_17448767356387c3f79e08d4_36215274 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14482553626387c3f79df972_21807275 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13202361436387c3f79dffe8_41967586', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17448767356387c3f79e08d4_36215274', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_5044883356387c3f79e1c95_85355147 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_16907138086387c3f79e16e2_79407135 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5044883356387c3f79e1c95_85355147', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1130183166387c3f79d83e8_36177057 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1130183166387c3f79d83e8_36177057',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8441725926387c3f79da470_79796505',
  ),
  'page_title' => 
  array (
    0 => 'Block_12913544566387c3f79dafe7_70770904',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_14482553626387c3f79df972_21807275',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13202361436387c3f79dffe8_41967586',
  ),
  'page_content' => 
  array (
    0 => 'Block_17448767356387c3f79e08d4_36215274',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16907138086387c3f79e16e2_79407135',
  ),
  'page_footer' => 
  array (
    0 => 'Block_5044883356387c3f79e1c95_85355147',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8441725926387c3f79da470_79796505', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14482553626387c3f79df972_21807275', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16907138086387c3f79e16e2_79407135', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
