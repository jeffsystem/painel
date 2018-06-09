$(document).ready(function(){
    
    $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
    $('.telefone').mask('(00) 00000-0000');
    $('.horario_abrir').mask('00:00:00');
    $('.iniciar_almoco').mask('00:00:00');
    $('.voltar_almoco').mask('00:00:00');
    $('.horario_fechar').mask('00:00:00');

    /*var form;
    
    $('#logo').change(function (event) {
        form = new FormData();
        form.append('fileUpload', event.target.files[0]); // para apenas 1 arquivo
        //var name = event.target.files[0].content.name; // para capturar o nome do arquivo com sua extenção
        console.log(form);
    });*/

    $(".formulario").submit(function(event){

        $('.box-config').LoadingOverlay("show");

        cnpj = $('#cnpj').val()
        nm_empresa = $('#nm_empresa').val()
        email = $('#email').val()
        telefone = $('#telefone').val()
        cep = $('#cep').val()
        logradouro = $('#logradouro').val()
        numero = $('#numero').val()
        bairro = $('#bairro').val()
        cidade = $('#cidade').val()
        estado = $('#estado').val()
        horario_abrir = $('#horario_abrir').val()
        iniciar_almoco = $('#iniciar_almoco').val()
        voltar_almoco = $('#voltar_almoco').val()
        horario_fechar = $('#horario_fechar').val()
        atividade = $('#atividade option:selected').val()
        logo = $('#logo').val()
        
        $.post("/Api/request.php?request=add_empresa", {

            cnpj_empresa : cnpj,
            nm_empresa : nm_empresa,
            email_empresa : email,
            telefone_empresa : telefone,
            cep_empresa : cep,
            logradouro_empresa : logradouro,
            numero_empresa : numero,
            bairro_empresa : bairro,
            cidade_empresa : cidade,
            estado_empresa : estado,
            abrir_empresa : horario_abrir,
            almoco_inicio_empresa : iniciar_almoco,
            almoco_fim_empresa : voltar_almoco,
            fechar_empresa  : horario_fechar,
            atividade_empresa : atividade,
            logo_empresa : logo,

            }, function(response){

            response = JSON.parse(response);

            $('.box-config').LoadingOverlay("hide");
          
            if(response.update == 'true'){
                $('#modal_generico').modal('show');
                $('.body_erro').html('Informações atualizadas com sucesso.');
                setTimeout(function(){
                    $('#modal_generico').modal('hide');
                    window.location.reload();
                }, 2000);

            }else{
                $('#modal_generico').modal('show');
                $('.body_erro').html('Erro ao atualizar informações da empresa.');
                setTimeout(function(){
                    $('#modal_generico').modal('hide');
                    window.location.reload();
            }, 2000);
            }
        });

        return event.preventDefault();

    });
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