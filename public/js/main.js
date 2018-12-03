var $modal = $('#ajax-modal');

$(".nav li a").each(function(index) {
    if($.trim(this.href) == window.location) {
        $(this).closest('li').addClass("active");
    }
});

function abrirMensagem(id){
    var url='/mensagem/'+id;
    abrirModal(url);
    // oldUrl=document.location.pathname;
    History.pushState(null, 'Mensagem', url);
    $modal.on('shown', function () {
        $('#fecharMensagem').click(function(){
            History.back();
        });
    });
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

function apagarMensagem(id){
    var url='/mensagem/'+id+'/apagar';
    abrirModal(url);
}

function criarMensagem(){
    var url='/mensagem/criar';
    abrirModal(url);
    $modal.on('shown', function () {
        $('#msg').focus();
    });
}

function editarMensagem(id){
    var url='/mensagem/'+id+'/editar';
    abrirModal(url);
    $modal.on('shown', function () {
        $('#msg').focus();
    });
}
