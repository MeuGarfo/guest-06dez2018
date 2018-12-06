<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Apagar usuário</h3>
</div>
<div class="modal-body">
    <form class="form-vertcal" action="/user/<?php print $user['id']; ?>/apagar" method="post" id="frmApagarUsuário">
        <p>Deseja realmente apagar o usuário <b><?php print $user['name']; ?></b>?</p>
    </form>
    <script type="text/javascript">
    $('body').keypress(function (e) {
        if (e.which == 13) {
            $('#frmApagarUsuário').submit();
            return false;
        }
    });
    </script>
</div>
<div class="modal-footer">
    <button class="btn btn-success" type="submit" name="button" onclick="$('#frmApagarUsuário').submit();">
        <i class="icon-white icon-ok"></i>
        Sim
    </button>
    <button type="button" data-dismiss="modal" class="btn">
        <i class="icon-remove"></i>
        Não
    </button>
</div>
</div>
