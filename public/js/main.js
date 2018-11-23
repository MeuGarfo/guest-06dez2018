var $modal = $('#ajax-modal');

$(".nav li a").each(function(index) {
    if($.trim(this.href) == window.location) {
        $(this).closest('li').addClass("active");
    }
});

function abrirMensagem(id){
    var url='/mensagem/'+id;
    abrirModal(url);
}

function abrirModal(url){
    $modal.hide();
    $('body').modalmanager('loading');
    setTimeout(function(){
        $modal.load(url, '', function(){
            $('body').modalmanager('removeLoading');
            $modal.modal();
            $modal.show();
        });
    }, 1000);
    return false;
}

function criarMensagem(){
    var url='/mensagem/criar';
    abrirModal(url);
}

function editarMensagem(id){
    var url='/mensagem/'+id+'/editar';
    abrirModal(url);
}
