var produtos = [];


function insereLista() {
    let qtd = $("#qtd");
    let prod = $("#prod");
    produtos.push({
        produtoNome: prod.val(),
        quantidade: qtd.val(),
        preco: Math.round((Math.random() * 100) + 1)
    });

    atualizarCarrinho();
}

function deleteById(id) {

    produtos = produtos.filter((e, i) => {
        return i != id;
    })
    console.log(produtos)
    atualizarCarrinho();
}

function atualizarCarrinho() {
    const carrinho = $("#sacola");
    const total = $("#total");

    let html = '';
    let valorTotal = 0;
    for (let index = 0; index < produtos.length; index++) {
        const produto = produtos[index];
        valorTotal += produto.preco * produto.quantidade;
        html += `<tr>
            <td>${produto.produtoNome}</td>
            <td>${produto.quantidade}</td>
            <td>${produto.preco}</td>
            <td><button class="btn btn-primary" onclick="deleteById(${index})"><i class="far fa-trash-alt"></i></button></td>
            </tr>`;
    }
    total.html("R$" + valorTotal);
    carrinho.html(html);
}


// ----------------- JS Cadastro de Produtos ----------/

$(document).ready(function() {
    $("#btn-cad-prod").click(function() {
        $("#recebe_nome_prod").append($("#nome_prod").val());
        $("#recebe_qnt_prod").append($("#qnt_prod").val());
        $("#recebe_cod_prod").append($("#cod_prod").val());
        $("#recebe_img_prod").append($("#arq").val());
    });

});

$("#finalizar").click(function() {
    $.post("callback.php", function() {
        html;
    });
});