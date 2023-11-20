$(document).ready(function() {
    $("#search").on("input", function() {
        searchProducts($(this).val());
    });
});

function searchProducts(keyword) {
    var products = $("#result tr");
    products.hide();
    
    products.each(function() {
        var item = $(this).find("td:nth-child(2)").text().toLowerCase();
        if (item.includes(keyword.toLowerCase())) {
            $(this).show();
        }
    });
}
