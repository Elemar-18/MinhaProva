    <script>
        var cont = 1;
        $("#addQuestion").click(function () {
            $("#adicionarQuestao").append('<div class="container" id="add'+ cont +'">'
                                                +'<form>'
                                                    +'<div class="col">'
                                                        +'<div class="row">'
                                                            +'<label class="mt-3">Digite a questão</label>'
                                                            +'<input type="text" class="form-control" placeholder="Coloque aqui a sua pergunta">'
                                                        +'</div>'
                                                    +'</div>'
                                                    +'<h6 class="mt-2">Tipo de Resposta</h6>'
                                                    +'<div class="col mt-2">'
                                                        +'<div class="row">'
                                                            +'<div class="form-check form-check-inline">'
                                                                +'<input type="radio" class="form-check-input" value="RespostaDissertativa">'
                                                                +'<label class="form-check-label">Resposta Dissertativa</label>'
                                                            +'</div>'
                                                            +'<div class="form-check form-check-inline">'
                                                                +'<input type="radio" class="form-check-input" value="MultiplaEscolha">'
                                                                +'<label class="form-check-label">Múltipla Escolha</label>'
                                                            +'</div>'
                                                        +'</div>'    
                                                        +'<button type="button" class="btn btn-success mt-2"><i class="fas fa-save mr-2"></i>Salvar</button>'
                                                        +'<button type="button" class="btn btn-danger ml-2 mt-2 btnRemover" id="'+ cont +'"><i class="fas fa-trash-alt mr-2"></i>Remover</button>'
                                                    +'</div>'
                                                +'</form>'
                                            +'</div>'
            ); 
        });
        $( "form" ).on( "click", ".btnRemover", function() {
            var button_id = $(this).attr("id");
            $('#add'+ button_id +'').remove();
        });
    </script>