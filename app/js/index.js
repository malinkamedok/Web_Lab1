function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
  }


function validate(x, y, r) {
    console.log(x, y, r);
    let isOK = true;
    let errorMessage = '';
    if ($('div.y-checkboxes.required :checkbox:checked').length == 0) {
        alert("Please check at least one Y coord");
        return false;
    }
    if (x < -5 || x > 5) {
        errorMessage += 'Недопустимое значение X.\n';
        isOK = false;
    }
    if (!(isNumeric(x))) {
        errorMessage += 'Х не число'
        isOK = false;
    }
    if (x.toString().length > 13) {
        errorMessage += 'Х слишком длинный'
        isOK = false;
    }
    if (isOK) return true;
    else {
        alert(errorMessage);
        return false;
    }
}

$(document).ready(function(){

    $.ajax({
        type: "GET",
        url: "restore.php",
        success: function(data) {
            $(".table-wrapper").append(data);
        }
    });

    $("input#x-coord-input").on("input", function (event) {
        console.log($("input#x-coord-input").val);
    })

    $(".clear-btn").on("click", function (event) {
        $(".table-line").remove();
        $.ajax({
            type: "GET",
            url: "clear.php",
            success: function(data) {
                console.log("Data cleared");
            }
        });
    })

    $(".main-form").submit(function(e) {

        e.preventDefault();
        
        var form = $(this);
        var actionUrl = form.attr('action');

        let base = {
            r: form.serializeArray()[0].value,
            x: form.serializeArray()[1].value
        }
        console.log('form.serializeArray()', form.serializeArray());
        console.log('form.serialize()', form.serialize());
        form.serializeArray().forEach((item) => {
            if (item.name === 'y') {
                let dataArray = {
                    ...base,
                    y: item.value
                }
                console.log('dataArray:', dataArray);
                if (validate(dataArray['x'], dataArray['y'], dataArray['r'])) {
                    $.ajax({
                        type: "GET",
                        url: actionUrl,
                        data: dataArray,
                        success: function(data) {
                            $(".table-wrapper").append(data);
                        }
                    });
                }
                
            }
        });
        
        
    });
    
}); 

