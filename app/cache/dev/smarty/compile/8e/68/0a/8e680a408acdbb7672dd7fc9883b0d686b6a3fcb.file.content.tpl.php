<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 13:08:26
         compiled from "C:\xampp\htdocs\prestashop\admin352qqmkrj\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40005b030b1ad55b67-88691161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e680a408acdbb7672dd7fc9883b0d686b6a3fcb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin352qqmkrj\\themes\\default\\template\\content.tpl',
      1 => 1523009718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40005b030b1ad55b67-88691161',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b030b1ad5bdd4_36017280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b030b1ad5bdd4_36017280')) {function content_5b030b1ad5bdd4_36017280($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
