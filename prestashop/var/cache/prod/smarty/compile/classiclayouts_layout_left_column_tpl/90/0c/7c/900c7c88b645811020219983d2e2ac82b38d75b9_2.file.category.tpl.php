<?php
/* Smarty version 3.1.43, created on 2022-12-05 20:34:50
  from 'C:\Users\maryk\xampp\htdocs\Kino\prestashop\themes\classic\templates\catalog\listing\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638e47dabbd787_97278744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '900c7c88b645811020219983d2e2ac82b38d75b9' => 
    array (
      0 => 'C:\\Users\\maryk\\xampp\\htdocs\\Kino\\prestashop\\themes\\classic\\templates\\catalog\\listing\\category.tpl',
      1 => 1670268803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/category-header.tpl' => 1,
  ),
),false)) {
function content_638e47dabbd787_97278744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1693587238638e47dabb9cc6_84068918', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_1693587238638e47dabb9cc6_84068918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_1693587238638e47dabb9cc6_84068918',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
}
}
/* {/block 'product_list_header'} */
}
