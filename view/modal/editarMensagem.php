<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Editar mensagem</h3>
</div>
<div class="modal-body">
    <form class="form-vertcal" action="/mensagem/<?php print $mensagem['id']; ?>/editar" method="post" id="frmMensagem">
        <div class="control-group">
            <label for="msg">Mensagem</label>
            <div class="controls">
                <textarea class="input-block-level" name="msg" rows="8" cols="80" id="msg"><?php e($mensagem['msg']); ?></textarea>
            </div>
        </div>
    </form>
    <script type="text/javascript">
    $('#msg').keypress(function (e) {
        if (e.which == 13) {
            $('#frmMensagem').submit();
            return false;
        }
    });
    </script>
</div>
<div class="modal-footer">
    <button class="btn btn-success" type="submit" name="button" onclick="$('#frmMensagem').submit();">
        <i class="icon-white icon-ok"></i>
        Salvar
    </button>
    <button type="button" data-dismiss="modal" class="btn">
        <i class="icon-remove"></i>
        Cancelar
    </button>
</div>
</div>
