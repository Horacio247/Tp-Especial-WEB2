<?php
/* Smarty version 4.2.1, created on 2022-11-02 01:10:43
  from 'C:\xampp\htdocs\web2\TP_ESPECIAL\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6361b58364e368_59772730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07e3c72d4059d8c457d4e028f7c9548a71f3bd82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TP_ESPECIAL\\templates\\Login.tpl',
      1 => 1667347822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6361b58364e368_59772730 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="formulario">
    <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>

    <form action="verify" method="POST" class="formulario-create-cliente">
                <input type="email" placeholder="email" name="email" id="email" required>
                <input type="password" placeholder="password" name="password" id="password" required>

                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
                    <div class="alert alert-danger mt-3">
                        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                    </div>
                <?php }?>

                <input type="submit" class="btn-login" value="Login">
    </form>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
