<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Escreva sua mensagem</h3>
</div>
<div class="modal-body">
    <form class="form-vertcal" action="/mensagem" method="post" id="mensagem">
        <div class="control-group">
            <label for="name">Nome</label>
            <div class="controls">
                <input class="input-block-level" type="text" name="name" value="Anderson Ismael" id="name">
            </div>
        </div>
        <div class="control-group">
            <label for="msg">Mensagem</label>
            <div class="controls">
                <textarea class="input-block-level" name="msg" rows="8" cols="80" id="msg"></textarea>
            </div>
        </div>
    </form>
    <script type="text/javascript">
    $('#msg').keypress(function (e) {
        if (e.which == 13) {
            $('#mensagem').submit();
            return false;
        }
    });

    </script>
</div>
<div class="modal-footer">
    <button class="btn btn-success" type="submit" name="button" onclick="$('#mensagem').submit();">
        <i class="icon-white icon-ok"></i>
        Enviar mensagem
    </button>
    <button type="button" data-dismiss="modal" class="btn">
        <i class="icon-remove"></i>
        Cancelar
    </button>
</div>
</div>
