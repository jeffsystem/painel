$(document).ready(function(){
    
    $('.add_hora').mask('00:00:00');
    $('.btn_add_horario').on('click',function(){

        add_horario();

    })
});


function add_horario(){
    
    id_funcionario = $('#options_funcionarios').val();
    id_servicos = $('#options_servicos').val();
    horario = $('#horario').val();
    
    tm_horario = horario.length;

    if(tm_horario == 0){
        $('#modal_generico').modal('show');
        $('.body_erro').html('Preencha um horário válido.');
    }else{
        if(id_funcionario == 0){
            $('#modal_generico').modal('show');
            $('.body_erro').html('Selecione um funcionário.');
        }
        else{
            if(id_servicos == 0){
                $('#modal_generico').modal('show');
                $('.body_erro').html('Selecione um serviço.');
            }else{
                
                data = new Array(horario,id_funcionario,id_servicos);

                $.post("/Api/request.php?request=add_horario", {data: data}, function(response){
                    response = JSON.parse(response);
                    
                    if(response.insert == 'true'){
                        $('#modal_generico').modal('show');
                        $('.body_erro').html('Horário adicionado com sucesso.');
                        setTimeout(function(){
                            $('#modal_generico').modal('hide');
                            window.location.reload();
                        }, 2000);

                    }else{
                        $('#modal_generico').modal('show');
                        $('.body_erro').html('Erro ao adicionar horário.');
                        setTimeout(function(){
                            $('#modal_generico').modal('hide');
                            window.location.reload();
                    }, 2000);
                    }
                });
            }
        }

    }

   

   

    console.log();

    $('#horario').val('');

    //    $.LoadingOverlay("show");
    //window.location.reload();

}