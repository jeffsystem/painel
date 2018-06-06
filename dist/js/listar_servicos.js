
    $(function () {

        $("#tabela_lista_servicos").LoadingOverlay("show");
        
              $('#tabela_lista_servicos').DataTable({
                  "ajax":{
                  "method":"POST",
                  "url":'/Api/request.php',
                  "dataType": "json",
                  "cache": false,
                  "contentType": "application/json; charset=utf-8",
                    complete: function(retorno){
                      $("#tabela_lista_servicos").LoadingOverlay("hide",true);
                    },
                    error: function (data) {
                      $("#tabela_lista_servicos").LoadingOverlay("hide",true);
                        $('.dataTables_empty').text('Houve erros (API: lista_servicos)');
                    },
                  },
                  "columns":[
                    {"data":'status'},
                    ],
                    "columnDefs": [
                    {"targets": 0, "render": function (data, type, row) {
                        return row.servico; }
                    },
                    {"targets": 1, "render": function (data, type, row) {
                        var real = Number(row.valor);
                        var valor = real.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
                        return valor; }
                    },
                    
                    {"targets": 2, "render": function (data, type, row) {
                        return row.descricao; }
                    },
                    
                    {"targets": 3, "render": function (data, type, row) {
                        return row.dt_cadastro; }
                    },

                    {"targets": 4, "render": function (data, type, row) {
                        var botao = "<div class='btn-group'>\
                        <button type='button' class='btn btn-default btn-sm'>Ação</button>\
                        <button type='button' class='btn btn-default btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>\
                          <span class='caret'></span>\
                          <span class='sr-only'>Toggle Dropdown</span>\
                        </button>\
                        <ul class='dropdown-menu'>\
                          <li><a href='#'><i class='fa fa-trash'></i> Deletar</a></li>\
                          <li><a href='#' onclick=alert('"+row.id+"');><i class='fa fa-pencil-square-o'></i> Editar</a></li>\
                        </ul>\
                      </div>"
                        return botao; }
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