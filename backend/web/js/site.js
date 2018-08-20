$('.active-blog').on('click', function () {
    $.post($(this).data('url'))
});

$(document).ready(function () {
    $("#tab-3").bind("click", incSize)

});

function incSize(event) {
    var width = Number(event.target.style.width.substring(0, event.target.style.width.length - 2));
    event.target.style.width = (width + 5) + "px";
    $("<p class='ttt'>Координати мишки: x - " + event.screenX + ", y - " + event.screenY + "</p>").insertAfter(".tabs");

}

$(document).ready(function () {
    $("p ").dblclick(function () {
        alert("!!!!AAAAAAAA!!!")
    })

    $('body').on('dblclick', 'p.ttt', function () {
        alert('ddddd');
    })
});
$(document).ready(onlyMyinterval());


function onlyMyinterval() {
    var count = Math.floor(Math.random() * (5 - 2)) + 1;
    setTimeout(function () {
        var color = $("#red").css("background-color");

        if (color === "rgb(255, 0, 0)") {
            $("#red").css("background-color", "green");
        } else $("#red").css("background-color", "red");

       onlyMyinterval();
    }, count * 1000)
}
