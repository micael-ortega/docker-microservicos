$("#button-submit").on("click", function () {

    var db_categoria = $("#categoria").val();
    var db_produto = $("#produto").val();
    var db_valor = $("#valor").val();


    $.ajax({
        url: "http://174.129.68.126:4500",
        type: "post",
        data: { categoria: db_categoria, produto: db_produto, valor: db_valor },
        beforeSend: function () {

            console.log("Tentando enviar os dados....");

        }
    }).done(function (e) {
        alert("Dados Salvos");
    })

});
