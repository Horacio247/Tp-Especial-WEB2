<?php
/* Smarty version 4.2.1, created on 2022-11-15 04:44:04
  from 'C:\xampp\htdocs\web2\TP_ESPECIAL\templates\form_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63730b04d22227_69212851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9bb94bbbfbda03846971dfe03db70dd2f8906bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TP_ESPECIAL\\templates\\form_edit.tpl',
      1 => 1668483798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63730b04d22227_69212851 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="<?php echo BASE_URL;?>
editForm" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <input name="ID" type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->ID;?>
">
            </div>
        </div>

        <div class="col-9">
            <div class="form-group">
                <label>origen</label>
                <input name="Origen" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->Origen;?>
" required>
            </div>
        </div>

        <div class="col-9">
            <div class="form-group">
                <label>Destino</label>
                <input name="Destino" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->Destino;?>
" required>
            </div>
        </div>

        <div class="col-9">
            <div class="form-group">
                <label>Vendedor</label>
                <input name="Vendedor" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->Vendedor;?>
" required>
            </div>
        </div>

    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
</form><?php }
}
