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

    $(".custom-select").change(function() {
    var selValue = $(".custom-select").val();
        
    if(selValue == 1){
        $("#apply-button").removeClass("disabled");
    }
    else{ 
        $("#apply-button").addClass("disabled");
    };
    });

});