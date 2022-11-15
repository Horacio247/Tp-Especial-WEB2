{include file="header.tpl"}

<ul class="list-group">
    {foreach from=$vendedores item=$vendedor}
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{$vendedor->Nombre}</h5>
                <p class="card-text">INFORMACION DEL VENDEDOR.</p>
            </div>

            <div class="card-body">
                <a href="#" class="card-link">Ver mas</a>
            </div>
        </div>
    {/foreach}
</ul>



{include file="footer.tpl"}