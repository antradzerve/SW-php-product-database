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

function validateBook(form) {
    let weight = form.weight;
    if (!weight.value) {
        $(weight).addClass("border-danger");
        return false;
    }
    return true;   
};

function validateDvd(form) {
    let size = form.size;
    if (!size.value) {
        $(size).addClass("border-danger");
        return false;
    }
    return true;   
};

function validateFurniture(form) {
    let length = form.length;
    let width = form.length;
    let height = form.height;
    let isNotError = true;
    if (!length.value) {
        isNotError = false;
        $(length).addClass("border-danger");
    }
    if (!width.value) {
        isNotError = false;
        $(width).addClass("border-danger");
    }
    if (!height.value) {
        isNotError = false;
        $(height).addClass("border-danger");
    }
    return isNotError;   
};

function validateFields(form) {
    
    let type = form.type;
    
    switch (type.value){
        case "opt-book":
            return validateBook(form);
        case "opt-furniture":
            return validateFurniture(form);
        case "opt-dvd":
            return validateDvd(form);
        default:
            return false;
    } 
    
};


