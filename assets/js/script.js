function enviarEmail() {
    var nome = $('input[name=nome]').val();
    var email = $('input[name=email]').val();
    var mensagem = $('textarea').val();


    $.ajax({
        url: 'http://localhost:8080/simples/mvc/contato/enviar_email',
        type: 'POST',
        data: { nome:nome, email:email, msg:mensagem },
        success: function (html) {
            $('.msg').html(html);
        }
    });

}