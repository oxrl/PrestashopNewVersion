<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 00:49:48
         compiled from "modules\mymodule\views\templates\hook\mymodule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:275605b0b987c75e299-62659091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17c172517411077833111eafd8abe614b2e820d4' => 
    array (
      0 => 'modules\\mymodule\\views\\templates\\hook\\mymodule.tpl',
      1 => 1527486273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275605b0b987c75e299-62659091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_module_message' => 0,
    'my_module_name' => 0,
    'my_module_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0b987c766b53_92848024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0b987c766b53_92848024')) {function content_5b0b987c766b53_92848024($_smarty_tpl) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_module_message']->value, ENT_QUOTES, 'UTF-8');?>

<div id="mymodule_block_home" class="block">
  <h4>Welcome!</h4>
  <div class="block_content">
    <p>Hello,
       <?php if (isset($_smarty_tpl->tpl_vars['my_module_name']->value)&&$_smarty_tpl->tpl_vars['my_module_name']->value) {?>
           <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_module_name']->value, ENT_QUOTES, 'UTF-8');?>

       <?php } else { ?>
           World
       <?php }?>
       !
    </p>
    <ul>
      <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_module_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="Click this link">Click me!</a></li>
    </ul>
  </div>
</div>
<!-- /Block mymodule -->
<?php }} ?>
