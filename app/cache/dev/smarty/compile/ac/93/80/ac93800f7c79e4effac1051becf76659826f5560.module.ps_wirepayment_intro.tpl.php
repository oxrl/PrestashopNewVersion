<?php /* Smarty version Smarty-3.1.19, created on 2018-05-20 21:49:24
         compiled from "module:ps_wirepayment/views/templates/hook/ps_wirepayment_intro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108285b0233b4c538f3-37078004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac93800f7c79e4effac1051becf76659826f5560' => 
    array (
      0 => 'module:ps_wirepayment/views/templates/hook/ps_wirepayment_intro.tpl',
      1 => 1489659874,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '108285b0233b4c538f3-37078004',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bankwireReservationDays' => 0,
    'bankwireCustomText' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0233b4c60f35_20338607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0233b4c60f35_20338607')) {function content_5b0233b4c60f35_20338607($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\prestashop/modules/ps_wirepayment/views/templates/hook/ps_wirepayment_intro.tpl -->

<section>
  <p>
    <?php echo smartyTranslate(array('s'=>'Please transfer the invoice amount to our bank account. You will receive our order confirmation by email containing bank details and order number.','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>

    <?php echo smartyTranslate(array('s'=>'Goods will be reserved %s days for you and we\'ll process the order immediately after receiving the payment.','sprintf'=>array($_smarty_tpl->tpl_vars['bankwireReservationDays']->value),'d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['bankwireCustomText']->value) {?>
        <a data-toggle="modal" data-target="#bankwire-modal"><?php echo smartyTranslate(array('s'=>'More information','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</a>
    <?php }?>
  </p>

  <div class="modal fade" id="bankwire-modal" tabindex="-1" role="dialog" aria-labelledby="Bankwire information" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2><?php echo smartyTranslate(array('s'=>'Bankwire','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</h2>
        </div>
        <div class="modal-body">
          <p><?php echo smartyTranslate(array('s'=>'Payment is made by transfer of the invoice amount to the following account:','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</p>
          <?php echo $_smarty_tpl->getSubTemplate ('module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php echo $_smarty_tpl->tpl_vars['bankwireCustomText']->value;?>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- end C:\xampp\htdocs\prestashop/modules/ps_wirepayment/views/templates/hook/ps_wirepayment_intro.tpl --><?php }} ?>
