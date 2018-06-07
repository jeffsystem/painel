
    $(function () {

        $("#tabela_lista_horarios").LoadingOverlay("show");
              data = 'lista_horario';
              $('#tabela_lista_horarios').DataTable({
                  "ajax":{
                  "method":"POST",
                  "url":'/Api/request.php?request='+data,
                  "data": data,
                  "dataType": "json",
                  "cache": false,
                  "contentType": "application/json; charset=utf-8",
                    complete: function(retorno){
                      $("#tabela_lista_horarios").LoadingOverlay("hide",true);
                    },
                    error: function (data) {
                      $("#tabela_lista_horarios").LoadingOverlay("hide",true);
                        $('.dataTables_empty').text('Houve erros (API: lista_servicos)');
                    },
                  },
                  "columns":[
                    {"data":'status'},
                    ],
                    "columnDefs": [
                    {"targets": 0, "render": function (data, type, row) {
                        return row.horario; }
                    },
                    {"targets": 1, "render": function (data, type, row) {
                        return row.nome_funcionario; }
                    },
                    {"targets": 2, "render": function (data, type, row) {
                        console.log(row.nome_funcionario)
                        switch(row.status_horario){
                          case '0':
                            show_status = "<span class='badge bg-green'>Disponível</span>";
                          break;
                          case '1':
                            show_status = "<span class='badge bg-red'>Agendado</span>";
                          break;
                          
                        }
                          return show_status; }
                      },
        
                    ],
                    'language': {
                    "lengthMenu": "_MENU_ p/ página",
                    "search": "Buscar: ",
                    "loadingRecords": "Carregando...",
                    "processing": "Processando...",
                    "info":           "Mostrando _START_ a _END_ de _TOTAL_ serviços",
                    "paginate": {
                      "first":      "Primeiro",
                      "last":       "Último",
                      "next":       "Próximo",
                      "previous":   "Anterior"
                    },
                     "zeroRecords":    "Opa, nenhum serviço cadastrado.",
                  },
                  'paging'      : true,
                  'lengthChange': true,
                  'searching'   : true,
                  'ordering'    : true,
                  'info'        : true,
              })
        })