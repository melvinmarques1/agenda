$(function(){
    function Adicionar(){
        $("#tblCadastro tbody").append(
            "<tr>"+
            "<td><input type='text'/></td>"+
            "<td><input type='text'/></td>"+
            "<td><input type='text'/></td>"+
            "<td><img src='save.png' class='btnSalvar' alt='Salvar'><img src='excluir.png' class='btnExcluir' alt='Excluir'/></td>"+
            "</tr>");

        $(".btnSalvar").bind("click", Salvar);     
        $(".btnExcluir").bind("click", Excluir);
    };

    function Salvar(){
        var par = $(this).parent().parent(); //tr
        var tdNome = par.children("td:nth-child(1)");
        var tdTelefone = par.children("td:nth-child(2)");
        var tdEmail = par.children("td:nth-child(3)");
        var tdBotoes = par.children("td:nth-child(4)");

        tdNome.html(tdNome.children("input[type=text]").val());
        tdTelefone.html(tdTelefone.children("input[type=text]").val());
        tdEmail.html(tdEmail.children("input[type=text]").val());
        tdBotoes.html("<img src='excluir.png'class='btnExcluir'/><img src='editar.png' class='btnEditar'/>");

        $(".btnEditar").bind("click", Editar);
        $(".btnExcluir").bind("click", Excluir);
    };

    function Editar(){
        var par = $(this).parent().parent(); //tr
        var tdNome = par.children("td:nth-child(1)");
        var tdTelefone = par.children("td:nth-child(2)");
        var tdEmail = par.children("td:nth-child(3)");
        var tdBotoes = par.children("td:nth-child(4)");

        tdNome.html("<input type='text' id='txtNome' value='"+tdNome.html()+"'/>");
        tdTelefone.html("<input type='text'id='txtTelefone' value='"+tdTelefone.html()+"'/>");
        tdEmail.html("<input type='text' id='txtEmail' value='"+tdEmail.html()+"'/>");
        tdBotoes.html("<img src='save.png' class='btnSalvar'/>");

        $(".btnSalvar").bind("click", Salvar);
        $(".btnEditar").bind("click", Editar);
        $(".btnExcluir").bind("click", Excluir);
    };

    function Excluir(){
        var par = $(this).parent().parent(); //tr
        par.remove();
    };

    $(".btnEditar").bind("click", Editar);
    $(".btnExcluir").bind("click", Excluir);
    $("#btnAdicionar").bind("click", Adicionar); 
});
