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
    var $modal = $('#ajax-modal');
    $('body').modalmanager('loading');
    setTimeout(function(){
        $modal.load(url, '', function(){
            $modal.modal();
        });
    }, 1000);
    return false;
}

function criarMensagem(){
    var url='/mensagem/criar';
    abrirModal(url);
}
