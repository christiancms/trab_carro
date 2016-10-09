function popup(largura, altura) {
    window.open('menuPrincipal.php', 
    'popup', 
    'width=' + largura + 
            ',height=' + altura + 
            ',scrolling=auto,top=0,left=0'
            );

}
//
////$(document).ready(function () {
//    $("#imagem1").mouseover(function () {
//        $(this).attr('src', 'imagens/realizado02.png');
//    });
//    $("#imagem1").mouseout(function () {
//        $(this).attr('src', 'imagens/realizado01.png');
//    });
//    $("#imagem2").mouseover(function () {
//        $(this).attr('src', 'imagens/realizado04.png');
//    });
//    $("#imagem2").mouseout(function () {
//        $(this).attr('src', 'imagens/realizado03.png');
//    });
//    $("#imagem3").mouseover(function () {
//        $(this).attr('src', 'imagens/realizado06.png');
//    });
//    $("#imagem3").mouseout(function () {
//        $(this).attr('src', 'imagens/realizado05.png');
//    });
//});
//$(document).ready(function () {
//    $(window).scroll(function () {
//        if ($(this).scrollTop() !== 0) {
//            $('#subirTopo').fadeIn();
//        } else {
//            $('#subirTopo').fadeOut();
//        }
//    });
//    $('#subirTopo').click(function () {
//        $('body,html').animate({scrollTop: 0}, 800);
//    });
//});