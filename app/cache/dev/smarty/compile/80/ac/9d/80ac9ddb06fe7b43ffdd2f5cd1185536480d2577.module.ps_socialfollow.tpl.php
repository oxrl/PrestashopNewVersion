<?php /* Smarty version Smarty-3.1.19, created on 2018-05-22 10:56:03
         compiled from "module:ps_socialfollow/ps_socialfollow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195715b043d93c3a076-89122500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:ps_socialfollow/ps_socialfollow.tpl',
      1 => 1523009718,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '195715b043d93c3a076-89122500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'social_links' => 0,
    'social_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b043d93c4a617_52761337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b043d93c4a617_52761337')) {function content_5b043d93c4a617_52761337($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\prestashop/themes/classic/modules/ps_socialfollow/ps_socialfollow.tpl -->


  <div class="block-social col-lg-4 col-md-12 col-sm-12">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['social_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['social_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['social_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->key => $_smarty_tpl->tpl_vars['social_link']->value) {
$_smarty_tpl->tpl_vars['social_link']->_loop = true;
?>
        <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
</a></li>
      <?php } ?>
    </ul>
  </div>

<!-- end C:\xampp\htdocs\prestashop/themes/classic/modules/ps_socialfollow/ps_socialfollow.tpl --><?php }} ?>
