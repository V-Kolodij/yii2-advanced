$('p').click(function () {
  $(this).css("color", "red")

});

setTimeout("$('p.test2').css('color','green')", 1000);
setTimeout("$('p.test3').css('color','blue')", 2000);

$('p.lead').on('mouseover', function () {
    var text = $('.lead');
    for (var i = 0; i < text.length; i++) {
        $(text.get(i)).css('color', 'blue');
    }
});

var link = $("#list li a:first");
$(link).css('color', 'red');

function valid() {
    var sex = $("input[name = 'sex']:checked").val();
    if (!sex) {
        var lab = $("lable");
        for (var i = 0; i < lab.length; i++) {
            $(lab.get(i)).addClass("text text-danger");
        }
        return $("#message").addClass("text text-danger").html("You do not select sex!" + "<br>");
    }
    else {
        switch (sex) {
            case 'male':
                $("#form").parent().addClass('hide');
                $("#img").parent().css('text-align', 'center');
                $("#img").show("slow");
                $("#1").text("");
                $("#img2").css('display', 'none');
                break;
            case 'female':
                $("#form").parent().addClass('hide');
                $("#img").css('display', 'none');
                $("#img2").parent().css('text-align', 'center');
                $("#img2").show();
                break;
        }
    }
}

$("#done").click(function () {
        //$(".jumbotron").fadeOut();
        valid();
    }
);

// $("#read").click(function(){
//     if( $(".test2").is(":hidden") ){
//         $(".test2").slideDown("slow");
//     }else{
//         $(".test2").hide();
//     }
// });

$("#read").click(function() {
    $(".test2").slideToggle();
});