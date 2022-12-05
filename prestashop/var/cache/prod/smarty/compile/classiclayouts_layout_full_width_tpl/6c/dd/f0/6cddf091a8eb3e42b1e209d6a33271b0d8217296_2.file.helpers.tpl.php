<?php
/* Smarty version 3.1.43, created on 2022-12-05 19:36:20
  from 'C:\xampp\htdocs\Kino\prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638e3a249fdda1_52976485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cddf091a8eb3e42b1e209d6a33271b0d8217296' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kino\\prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1670225589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638e3a249fdda1_52976485 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\Kino\\prestashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\6c\\dd\\f0\\6cddf091a8eb3e42b1e209d6a33271b0d8217296_2.file.helpers.tpl.php',
    'uid' => '6cddf091a8eb3e42b1e209d6a33271b0d8217296',
    'call_name' => 'smarty_template_function_renderLogo_110662456638e3a249f06f0_68035990',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_110662456638e3a249f06f0_68035990 */
if (!function_exists('smarty_template_function_renderLogo_110662456638e3a249f06f0_68035990')) {
function smarty_template_function_renderLogo_110662456638e3a249f06f0_68035990(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_110662456638e3a249f06f0_68035990 */
}
