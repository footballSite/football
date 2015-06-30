/*
$(document).ready(function() {
 $("#menu ul").hide();
 $("#menu li span").click(function() { $(this).next().slideToggle("normal"); });
});
*/


$(document).ready(function() {
$("#menu ul").hide();
$("#menu li span").click(function() {
    $("#menu ul:visible").slideUp("normal");
    if (($(this).next().is("ul")) && (!$(this).next().is(":visible"))) {
        $(this).next().slideDown("normal");
    }
});
});
