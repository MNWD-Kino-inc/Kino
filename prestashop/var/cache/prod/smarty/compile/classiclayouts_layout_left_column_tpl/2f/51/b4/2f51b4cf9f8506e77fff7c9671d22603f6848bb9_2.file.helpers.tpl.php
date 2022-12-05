<?php
/* Smarty version 3.1.43, created on 2022-12-05 20:34:51
  from 'C:\Users\maryk\xampp\htdocs\Kino\prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638e47db14f154_87848310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f51b4cf9f8506e77fff7c9671d22603f6848bb9' => 
    array (
      0 => 'C:\\Users\\maryk\\xampp\\htdocs\\Kino\\prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1670268803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638e47db14f154_87848310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\Users\\maryk\\xampp\\htdocs\\Kino\\prestashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\2f\\51\\b4\\2f51b4cf9f8506e77fff7c9671d22603f6848bb9_2.file.helpers.tpl.php',
    'uid' => '2f51b4cf9f8506e77fff7c9671d22603f6848bb9',
    'call_name' => 'smarty_template_function_renderLogo_823671658638e47db14ab64_66632491',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_823671658638e47db14ab64_66632491 */
if (!function_exists('smarty_template_function_renderLogo_823671658638e47db14ab64_66632491')) {
function smarty_template_function_renderLogo_823671658638e47db14ab64_66632491(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_823671658638e47db14ab64_66632491 */
}
