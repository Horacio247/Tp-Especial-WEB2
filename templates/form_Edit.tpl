{include file="header.tpl"}
<form action="{BASE_URL}editForm" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <input name="id" type="hidden" class="form-control" value="{$edit->ID}">
            </div>
        </div>

        <div class="col-9">
            <div class="form-group">
                <label>origen</label>
                <input name="origen" type="text" class="form-control" value="{$edit->Origen}">
            </div>
        </div>

        <div class="col-9">
            <div class="form-group">
                <label>Destino</label>
                <input name="destino" type="text" class="form-control" value="{$edit->Destino}">
            </div>
        </div>

        <div class="col-9">
            <div class="form-group">
                <label>Vendedor</label>
                <input name="vendedor" type="text" class="form-control" value="{$edit->Vendedor}">
            </div>
        </div>

    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
</form>