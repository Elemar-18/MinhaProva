        // Script para criar campos para perguntas de prova
        var cont = 1;
        $("#addQuestion").click(function () {
            $("#adicionarQuestao").append('<div class="container" id="add'+ cont +'">'
                                                +'<form>'
                                                    
                                                        +'<div class="row">'
                                                            +'<h6 class="mt-4">Digite sua pergunta</h6>'
                                                            +'<input type="text" class="form-control" placeholder="Coloque aqui a sua pergunta">'
                                                        +'</div>'
                                                    
                                                        +'<div class="row">'
                                                            +'<h6 class="mt-2">Tipo de Resposta</h6>'
                                                        +'</div>'
                                                    
                                                        +'<div class="row" id="formQuantidadeQuestoes">'
                                                            +'<div class="form-check form-check-inline">'
                                                                +'<input type="radio" class="form-check-input" value="RespostaDissertativa" name="TipoResposta">'
                                                                +'<label class="form-check-label">Resposta Dissertativa</label>'
                                                            +'</div>'
                                                            +'<div class="form-check form-check-inline">'
                                                                +'<input type="radio" class="form-check-input" value="MultiplaEscolha" name="TipoResposta" id="MultiplaEscolha">'
                                                                +'<label class="form-check-label">Múltipla Escolha</label>'
                                                            +'</div>'
                                                        +'</div>'

                                                        +'<div class="row mt-2">'  
                                                            +'<button type="button" class="btn btn-success"><i class="fas fa-save mr-2"></i>Salvar</button>'
                                                            +'<button type="button" class="btn btn-danger ml-2 btnRemover" id="'+ cont +'"><i class="fas fa-trash-alt mr-2"></i>Remover</button>'
                                                        +'</div>'

                                                    +'</div>'
                                                +'</form>'
                                            +'</div>'
            ); 
        });

        // Script para remover campos para perguntas de prova
        $( "form" ).on( "click", ".btnRemover", function() {
            var button_id = $(this).attr("id");
            $('#add'+ button_id +'').remove();
        });

        //Script para adicionar quantidade de opçoes de resposta (multiplaescolha)
        $( "form" ).on( "click", "#MultiplaEscolha", function () {
            if($('input[name="TipoResposta"]:checked').val() == "MultiplaEscolha"){
                $("#formQuantidadeQuestoes").append('<div class="container">'
                                                +"<form>"

                                                    +'<div class="row" id="opcoesQuantidade">'
                                                        +'<h6 class="mt-4">Coloque a quantidade de opções de resposta</h6>'
                                                        +'<input type="number" min="1" value="1" id="quantidadeOpcao" class="form-control">'
                                                    +"</div>"

                                                +"<form>"
                                            +"</div>");
            }
        });

        // Script para adicionar os campos conforme a quantidade
        $( "form" ).on( "blur", "#quantidadeOpcao", function () {
             var qt = parseInt($('#quantidadeOpcao').val());
             for(var i = 0; i < qt; i++) {
                 add(i);
             }
        });

        // Script para incrementar o formulário das questões
        function add(qt) { 
                 $("#opcoesQuantidade").append('<div class="container">'
                                    
                                                    +'<div class="input-group mt-3">'
                                                        +'<div class="input-group-prepend">'
                                                            +'<span class="input-group-text"><i class="fas fa-th-list"></i></span>'
                                                        +'</div>'
                                                        +'<input type="text" id="opcao'+ qt +'" class="form-control" placeholder="Digite a ' + (qt+1) +'ª opção de resposta">' 
                                                    +'</div>'
                                                +'</div>');       
                    
        }