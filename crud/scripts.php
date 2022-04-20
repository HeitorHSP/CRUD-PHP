<script>
    $(document).ready(function(){
        $("#salvar_cadastro").on('click',function(){
             $.ajax({
                url: 'insert.php',
                type: 'POST',
                data: {nome:$("#nome").val(),
                       telefone: $("#telefone").val()
                    },

                beforeSend:function(){
                    $("#mensagens").html("carregando...");
                },
                success:function(data){
                        $("#mensagens").html(data);
                },
                error:function(){
                    $("#mensagens").html("nao foi possivel");
                }
            });
        });
        $("#excluir_cadastro").on('click',function(){
            $.ajax({
                url: 'Excluir.php',
                type: 'POST',
                data: {excluir : $("#delete").val(),},
                beforeSend:function(){
                    $("#mensagens").html("carregando...");
                },
                success:function(data){
                        $("#mensagens").html(data);
                },
                error:function(){
                    $("#mensagens").html("nao foi possivel");
                }
            });

        });
        $("#atualizar").on('click',function(){
            var id = $(this).attr("aid");
            var telefone = $("#telefone").val();
            var nome = $("#nome").val();
            $.ajax({
                    url: 'att.php',
                    type:'POST',
                    data:{id:id,nome:nome,celular:telefone},
                    beforeSend: function(){
                         $("#mensagens").html("Carregando...");
                    },
                    success: function(data){
                        $("#mensagens").html(data);

                    },
                    error: function(data){
                        $("#mensagens").html("Erro");

                    },
                });

        });
    });
    
</script>

