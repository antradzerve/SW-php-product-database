$(document).ready(function() {

    $("#dvd-disc").show();
    $("#book, #furniture").hide();

    $("#opt-select").change(function() {
        switch ($(this).val()){
            case "opt-book":
                $("#book").show();
                $("#dvd-disc, #furniture").hide();
                break;
            case "opt-furniture":
                $("#furniture").show();
                $("#dvd-disc, #book").hide();
                break;
            default:
                $("#dvd-disc").show();
                $("#book, #furniture").hide();
        }    
    });

});