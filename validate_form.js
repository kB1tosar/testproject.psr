$(document).ready(function(){
    $("#form").validate({
        errorClass: "error-val",
        rules:{
            name_country:{
                required:true,
                maxlength: 30,
            },

            capital:{
                required:true,
                maxlength: 20,
            },

            short_description:{
                maxlength: 1000,
                required:true,
            },

            year_of_foundation:{
                required:true,
                digits: true,
                maxlength: 4,
            },

            population:{
                required:true,
                digits: true,
                maxlength: 10,
            },
        },

        messages:{
            name_country:{
                required:"Это поле необходимо заполнить",
                maxlength: "Максимальное число символов - 100",
            },

            capital:{
                required:"Это поле необходимо заполнить",
                maxlength: "Максимальное число символов - 20",
            },

            short_description:{
                required:"Это поле необходимо заполнить",
                maxlength: "Максимальное число символов - 1000",
            },

            year_of_foundation:{
                required:"Это поле необходимо заполнить",
                digits: "Вводите только числовые значения",
                maxlength: "Максимальное число символов - 4",
            },

            population:{
                required:"Это поле необходимо заполнить",
                digits: "Вводите только числовые значения",
                maxlength: "Максимальное число символов - 10 символов",
            },

        }

    });

});


