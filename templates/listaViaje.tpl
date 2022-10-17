{include file="header.tpl"}

{include file="form_Alta.tpl"}

<ul class="list-group">
    {foreach from=$viajes item=$viaje}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$viaje->Origen}</b> - {$viaje->Destino} (vendedor {$viaje->Vendedor}) </span>
            <a href='edit/{$viaje->ID}' type='button' class='btn btn-success ml-auto'>Editar</a>
            <a href='delete/{$viaje->ID}' type='button' class='btn btn-danger ml-auto'>Borrar</a>
        </li>
    {/foreach}
</ul>


{include file="footer.tpl"}