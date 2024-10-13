$(document).ready(function() {
    $(".info-show-item").html($(".info-item" + "1").clone().removeClass("no-show"))
    var pos = 1;
    $(".info-show-prev").on("click", function() {
        if (pos >= 1) pos--
        if (pos == 0) pos = 3
        $(".info-show-item").hide().html($(".info-item" + pos.toString()).clone().removeClass("no-show")).fadeIn("fast");
    });
    $(".info-show-next").on("click", function() {
        if (pos <= 3) pos++
        if (pos == 4) pos = 1
        $(".info-show-item").hide().html($(".info-item" + pos.toString()).clone().removeClass("no-show")).fadeIn("fast");
    });
})