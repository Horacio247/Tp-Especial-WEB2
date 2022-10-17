<?php
/* Smarty version 4.2.1, created on 2022-10-17 21:28:17
  from 'C:\xampp\htdocs\web2\muestra-tp1\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dacd19297b3_73797539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acf656b955b11e65af7db4c38ecf40ee431920d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\muestra-tp1\\templates\\Login.tpl',
      1 => 1665984529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dacd19297b3_73797539 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="formulario">
    <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>

    <form action="verifyUser" method="POST" class="formulario-create-cliente">
                <input type="input" placeholder="email" name="email" id="email" required>
                <input type="password" placeholder="password" name="password" id="password" required>
                <input type="submit" class="btn-login" value="Login">
    </form>

    <h4><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
