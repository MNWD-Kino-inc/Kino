<?php
/* Smarty version 3.1.43, created on 2022-11-21 22:43:00
  from 'C:\xampp\htdocs\delete\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_637bf0e40fb6f3_29079076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54837e45275568749e9b05064592903a0cbe11a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\delete\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1669066191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637bf0e40fb6f3_29079076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\delete\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\54\\83\\7e\\54837e45275568749e9b05064592903a0cbe11a9_2.file.helpers.tpl.php',
    'uid' => '54837e45275568749e9b05064592903a0cbe11a9',
    'call_name' => 'smarty_template_function_renderLogo_136665311637bf0e40f65b5_50491836',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_136665311637bf0e40f65b5_50491836 */
if (!function_exists('smarty_template_function_renderLogo_136665311637bf0e40f65b5_50491836')) {
function smarty_template_function_renderLogo_136665311637bf0e40f65b5_50491836(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_136665311637bf0e40f65b5_50491836 */
}
