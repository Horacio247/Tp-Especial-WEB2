<?php
/* Smarty version 4.2.1, created on 2022-10-17 21:28:17
  from 'C:\xampp\htdocs\web2\muestra-tp1\templates\listaViaje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dacd1a12113_97634662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a9912e153da54ab73e4e4046399cfa12d74265d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\muestra-tp1\\templates\\listaViaje.tpl',
      1 => 1665686942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_Alta.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dacd1a12113_97634662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:form_Alta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['viajes']->value, 'viaje');
$_smarty_tpl->tpl_vars['viaje']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['viaje']->value) {
$_smarty_tpl->tpl_vars['viaje']->do_else = false;
?>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b><?php echo $_smarty_tpl->tpl_vars['viaje']->value->Origen;?>
</b> - <?php echo $_smarty_tpl->tpl_vars['viaje']->value->Destino;?>
 (vendedor <?php echo $_smarty_tpl->tpl_vars['viaje']->value->Vendedor;?>
) </span>
            <a href='edit/<?php echo $_smarty_tpl->tpl_vars['viaje']->value->ID;?>
' type='button' class='btn btn-success ml-auto'>Editar</a>
            <a href='delete/<?php echo $_smarty_tpl->tpl_vars['viaje']->value->ID;?>
' type='button' class='btn btn-danger ml-auto'>Borrar</a>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
