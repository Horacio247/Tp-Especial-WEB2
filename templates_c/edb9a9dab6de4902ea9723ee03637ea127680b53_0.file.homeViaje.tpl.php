<?php
/* Smarty version 4.2.1, created on 2022-10-17 21:32:17
  from 'C:\xampp\htdocs\web2\TP_ESPECIAL\templates\homeViaje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dadc1528aa2_10497748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edb9a9dab6de4902ea9723ee03637ea127680b53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TP_ESPECIAL\\templates\\homeViaje.tpl',
      1 => 1665684744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dadc1528aa2_10497748 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>LISTADO DE VIAJES</H1>
<!-- lista de tareas -->
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
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
