{include file="header.tpl"}
<form action="{BASE_URL}editForm" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <input name="ID" type="hidden" class="form-control" value="{$edit->ID}">
            </div>
        </div>

        <div class="col-9">
            <div class="form-group">
                <label>origen</label>
                <input name="Origen" type="text" class="form-control" value="{$edit->Origen}" required>
            </div>
        </div>

        <div class="col-9">
            <div class="form-group">
                <label>Destino</label>
                <input name="Destino" type="text" class="form-control" value="{$edit->Destino}" required>
            </div>
        </div>

        <div class="col-9">
            <div class="form-group">
                <label>Vendedor</label>
                <input name="Vendedor" type="text" class="form-control" value="{$edit->Vendedor}" required>
            </div>
        </div>

    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
</form>