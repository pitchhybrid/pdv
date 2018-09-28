function insereLista() {
    const carrinho = document.getElementById("sacola");
    let qtd = document.getElementById("qtd");
    let prod = document.getElementById("prod");
    let itemLista = document.createElement("li");

    itemLista.textContent = `${prod.value} Quantidade:   ${qtd.value}`;
    carrinho.appendChild(itemLista);



}