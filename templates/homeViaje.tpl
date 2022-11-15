{include file="header.tpl"}

<h1>LISTADO DE VIAJES</H1>
<!-- lista de tareas -->
<ul class="list-group">
    {foreach from=$viajes item=$viaje}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$viaje->Origen}</b> - {$viaje->Destino} (vendedor {$viaje->Vendedor}) </span>
        </li>
    {/foreach}
</ul>


{include file="footer.tpl"}