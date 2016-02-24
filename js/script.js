/**
 * Created by Andrew on 09.03.15.
 */

$(document).ready(function(){

    $(".dropdown-menu a").click(function(){
        $(this).parent("li").parent("ul").prev("button").children("strong").html($(this).data("value"));
        $("input[name="+$(this).data("type")+"]").val($(this).data("value"));
        $(this).parent("li").parent("ul").parent("div.dropdown").removeClass("open");
        return false;
    });

    $(".mini-details").click(function(){
        window.location = $(this).find(".details-link").children('a').attr("href");
    });

});

function setCart(count,price){
    if (count > 0) {
        $("#cart-content").html("Товаров: "+count+"<br />Сумма: "+price+'<br /><a href="/index.php/cart/">Перейти в корзину</a>');
    } else {
        $("#cart-content").html("Корзина пуста");
    }
}