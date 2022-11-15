
<div class="formulario">
    <h2>{$titulo}</h2>

    <form action="verify" method="POST" class="formulario-create-cliente">
                <input type="email" placeholder="email" name="email" id="email" required>
                <input type="password" placeholder="password" name="password" id="password" required>

                {if $error} 
                    <div class="alert alert-danger mt-3">
                        {$error}
                    </div>
                {/if}

                <input type="submit" class="btn-login" value="Login">
    </form>

</div>

{include file="footer.tpl"}