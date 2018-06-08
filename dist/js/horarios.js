$(function () {
    data = 'lista_funcionario'
    $.ajax({
        type : "GET",
        url : '/Api/request.php?request='+data,
        crossDomain: true,
        beforeSend : function() {
            $("#options_funcionarios").LoadingOverlay("show");
        },
        success : function(response) {
            $("#options_funcionarios").LoadingOverlay("hide");

            retorno = JSON.parse(response);
            erro = retorno.data[0]['request'];

            if(erro != 'null'){
                $.each(retorno.data, function(index, value){
                    if (value.status == 0){
                        $('#options_funcionarios').append('<option value='+value.id+'>'+value.nome+'</option>')
                    }
                })
            }else{
                        $('#options_funcionarios').html('<option>Nenhum funcionário cadastrado</option>')
            }
        }, 
        error: function(error) {
            $("#options_funcionarios").LoadingOverlay("hide");
            $('#options_funcionarios').html('<option>Erro Api_funcionarios</option>')

            }
        });

    data = 'lista_servicos'
    $.ajax({
        type : "GET",
        url : '/Api/request.php?request='+data,
        crossDomain: true,
        beforeSend : function() {
            $("#options_servicos").LoadingOverlay("show");
        },
        success : function(response) {
            $("#options_servicos").LoadingOverlay("hide");

            retorno = JSON.parse(response);
            erro = retorno.data[0]['request'];

           if(erro != 'null'){
                $.each(retorno.data, function(index, value){
                    if (value.status == 0){
                        $('#options_servicos').append('<option value='+value.id+'>'+value.nome+'</option>')
                    }
                })
            }else{
                        $('#options_servicos').html('<option>Nenhum serviço cadastrado</option>')
            }
            
        }, 
        error: function(error) {
            $("#options_servicos").LoadingOverlay("hide");
            $('#options_servicos').html('<option>Erro Api_servicos</option>')

            }
        });
});