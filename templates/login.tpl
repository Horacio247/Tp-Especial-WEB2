
<div class="formulario">
    <h2>{$titulo}</h2>

    <form action="verifyUser" method="POST" class="formulario-create-cliente">
                <input type="input" placeholder="email" name="email" id="email" required>
                <input type="password" placeholder="password" name="password" id="password" required>
                <input type="submit" class="btn-login" value="Login">
    </form>

    <h4>{$error}</h4>
</div>

{include file="footer.tpl"}