$(document).ready(function () {
    $('#miDiv').hover(function () {
        $(this).css('background-color', 'yellow');
    });
    $('.miClase').click(function () {
       // alert("Click en la clase miClase");
    });
    $('#miDiv').scroll(function () {
        console.log("estoy scrolleando");
    });
    $('#miInput').keypress(function (event) {
        if(event.originalEvent.key == 'a'){
            $('span').remove();
            $('div').replaceWith("<div>Este es un elemento que reemplaza.</div>");
            console.log("No en el password no puede ir .");
        }
    });

    $('#imagen').hover(function () {
        $('#imagen').attr('src','images/logo2.png');
        $('#imagen').animate({opacity:'0'},1000);
    });

    $('.miClase').click(function () {
        alert("Los de clase han sido teclados");
    });
    $('#miBoton').click(function () {
        $('#miBoton').css('color', 'blue');
        $('#texto').text('Este es un texto nuevo');
        $('ul').append('<li>Nuevo elemento al final</li>');
        $('ul').prepend('<li>Nuevo elemento al inicio.</li>');
    });
    $('#miBoton2').click(function () {
        $('div').before('<span>Antes de </span>');
        $('div').after('<span>Despues</span>');
        $('#miBoton2').css('color', 'red');
        $('#texto').html('<h1>Este es un texto de titulo</h1>');

        $('button').removeClass('miClase').addClass('miClase2');
        
    });
    $('#miBoton3').click(function () {
       // requestAjax();
       var valor = $('#miCheckbox').prop('checked');
       console.log(valor);
       var selecciono = $('#miSelect').val();
       console.log(selecciono);
       var link = $('a').attr('href');
       console.log(link);
       $('#miDiv').css({
        'font-size':'40px',
        'color': 'purple',
       });
    });
    $('[type="text"]').keypress(function () {
        $('[type="text"]').css('color', 'red');
    });
    $('#miInput3').keypress(function () {
        $('#miInput3').css('color', 'blue');
       // $('div').empty();
        console.log($('#miInput3').val());
    
    });

    function requestAjax(){
        $.get('usuario.json', function(data){
            console.log(data);
        })
    }
});
// Selectores
// Elemento: $('div')
// Por ID: $('#miBoton')
// Clase: $('.miClase')
// Por atributo: $('[type="text"]')
// Por contenido: $(':contains("jQuery")')
// Contenido vacio: $('div:empty')

// Eventos

// click
//dblclick
//mouseenter
//mouseleave
//mousemove
//focus
//submit




