<?php
/* Smarty version 3.1.28, created on 2015-12-20 10:32:39
  from "/var/www/wordpress/lamps.lightmaster.cz/www3/templates/uzivatele/uzivatele-novy.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_567675b7a0af45_08708021',
  'file_dependency' => 
  array (
    'd206b92f0124bc884ff0c01188af19ff483c144c' => 
    array (
      0 => '/var/www/wordpress/lamps.lightmaster.cz/www3/templates/uzivatele/uzivatele-novy.tpl',
      1 => 1450569356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_567675b7a0af45_08708021 ($_smarty_tpl) {
if (!is_callable('smarty_function_message')) require_once '/var/www/wordpress/lamps.lightmaster.cz/www3/smarty/plugins/function.message.php';
echo smarty_function_message(array('msg'=>$_smarty_tpl->tpl_vars['msg']->value,'type'=>"info"),$_smarty_tpl);?>

<?php echo smarty_function_message(array('msg'=>$_smarty_tpl->tpl_vars['err']->value,'type'=>"error"),$_smarty_tpl);?>

<form class="form-horizontal" id="form-1" role="form" method="post">
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Přihlašovací jméno </label>
        <div class="col-sm-8">
            <input type="text" id="form-field-1" placeholder="Přihlašovací jméno" name="login" value="<?php echo $_POST['login'];?>
" />
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right" for="form-field-2"> Heslo </label>
        <div class="col-sm-8">
            <input type="password" id="form-field-2" placeholder="Heslo" name="password" />
            <span class="help-inline">
                <span class="middle">Heslo musí obsahovat minimálně 4 znaky</span>
            </span>
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right" for="form-field-3"> Zopakovat heslo </label>
        <div class="col-sm-8">
            <input type="password" id="form-field-3" placeholder="Zopakovat heslo" name="password_again" />
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right" for="form-field-4"> Jméno uživatele </label>
        <div class="col-sm-8">
            <input type="text" id="form-field-4" placeholder="Jméno" name="jmeno" value="<?php echo $_POST['jmeno'];?>
" />
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right" for="form-field-5"> Příjmení uživatele </label>
        <div class="col-sm-8">
            <input type="text" id="form-field-5" placeholder="Příjmení" name="prijmeni" value="<?php echo $_POST['prijmeni'];?>
" />
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right" for="form-field-5"> Email uživatele </label>
        <div class="col-sm-8">
            <input type="text" id="form-field-5" placeholder="email@domena.tld" name="email" value="<?php echo $_POST['email'];?>
" />
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right" for="form-field-select-1"> Oprávnění </label>
        <div class="col-sm-8">
            <select id="form-field-select-1" name="uzivatelOpravneni_id">
                <option value="">&nbsp;Vyber</option>
                <?php
$_from = $_smarty_tpl->tpl_vars['option']->value['opravneni'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_it_0_saved_item = isset($_smarty_tpl->tpl_vars['it']) ? $_smarty_tpl->tpl_vars['it'] : false;
$_smarty_tpl->tpl_vars['it'] = new Smarty_Variable();
$__foreach_it_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_it_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['it']->value) {
$__foreach_it_0_saved_local_item = $_smarty_tpl->tpl_vars['it'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
"<?php if ((($tmp = @$_POST['uzivatelOpravneni_id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user']->value['uzivatelOpravneni_id'] : $tmp) == $_smarty_tpl->tpl_vars['it']->value['id']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['it']->value['nazev'];?>
</option>
                <?php
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_0_saved_local_item;
}
}
if ($__foreach_it_0_saved_item) {
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_0_saved_item;
}
?>
            </select>
        </div>
    </div>
    <div class="space-4"></div>
    <div class="clearfix form-actions col-sm-12">
        <div class="col-sm-offset-3 col-sm-9">
            <button class="btn btn-info" data-submitform="1" data-submitvalue="new" type="button">
                <i class="icon-ok bigger-110"></i>
                Uložit
            </button>
            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset">
                <i class="icon-undo bigger-110"></i>
                Smazat
            </button>
        </div>
    </div>
    <input id="submitValue1" type="hidden" name="submitValue" value="" />
</form><?php }
}
