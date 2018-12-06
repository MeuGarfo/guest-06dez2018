<div class="modal-header">
    <button type="button" class="close fecharMensagem" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3><?php print $mensagem['name']; ?></h3>
</div>
<div class="modal-body">
        <?php
        $id=$mensagem['id'];
        print '<p id="mensagem'.$id.'">'.$mensagem['msg'].'</p>';
        $data=date('r',$mensagem['created_at']);
        $link='<a href="/mensagem/'.$id.'">'.$data.'</a>';
        print '<p>';
        print '<small>'.$link.'</small>';
        print '</p>';
        ?>
    </div>
    <div class="modal-footer">
        <button id="fecharMensagem" type="button" data-dismiss="modal" class="btn fecharMensagem">
            <i class="icon-remove"></i>
            Fechar
        </button>
    </div>
</div>
