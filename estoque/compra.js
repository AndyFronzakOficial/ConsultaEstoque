$(document).ready(function() {
    // Caminho para o arquivo CSV
    var csvFile = 'Produtos.csv';

    Papa.parse(csvFile, {
        download: true,
        header: true,
        dynamicTyping: true,
        complete: function(results) {
            var products = results.data;

            // Iterar pelos produtos e adicioná-los à tabela
            products.forEach(function(product) {
                var row = `
                    <tr>
                        <td>${product.Nome}</td>
                        <td>${product.Preço}</td>
                        <td>${product.Descrição}</td>
                    </tr>
                `;
                $('#product-list').append(row);
            });
        }
    });
});
