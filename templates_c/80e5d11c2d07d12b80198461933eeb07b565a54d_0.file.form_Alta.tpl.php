<?php
/* Smarty version 4.2.1, created on 2022-10-17 21:28:17
  from 'C:\xampp\htdocs\web2\muestra-tp1\templates\form_Alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dacd1c86194_44575261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80e5d11c2d07d12b80198461933eeb07b565a54d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\muestra-tp1\\templates\\form_Alta.tpl',
      1 => 1664319230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634dacd1c86194_44575261 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tarea -->
<form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Origen</label>
                <input name="origen" type="text" class="form-control">
            </div>
        </div>

        <div class="col-9">
            <div class="form-group">
                <label>Destino</label>
                <input name="destino" type="text" class="form-control">
            </div>
        </div>

        <div class="col-9">
            <div class="form-group">
                <label>Vendedor</label>
                <input name="vendedor" type="text" class="form-control">
            </div>
        </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form><?php }
}
