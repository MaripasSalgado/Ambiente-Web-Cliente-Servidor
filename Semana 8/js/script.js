// Condicionales en Javascript



var edad = 3;



if(edad >=18){

    console.log("Es mayor edad");

} else {

    console.log("Es menor de edad");

}



var hora = 14;



if(hora < 12){

    console.log("Buen dia");

} else {

    console.log("Buena tarde");

}



var calificacion = 85;

if(calificacion > 90){

    console.log("Aprobado con A");

} else if(calificacion > 80){

    console.log("Aprobado con B");

} else {

    console.log("Reprobado");

}



var estadoCivil = "casado";

var mensaje = (estadoCivil === "casado") ? "Casado" : "Soltero";

console.log("Estado Civil: "+mensaje);



var numero = 8;



switch(numero){

    case 1:

        console.log("Numero 1");

    break;

    case 2:

        console.log("Numero 2");

    break;

    default:

        console.log("Numero no esta definido");
}


//Practica ejercicio 1



var edad = 15;



if(edad >=18){

    console.log("Es mayoy de edad,es legal el consumo de alcohol");

} else {

    console.log("Es menor de edad, es ilegal el consumo de alcohol");

}



var number = 2

function weekdays(number){

    switch(number){

        case 1:
    
            console.log("Domingo");
    
        break;
    
        case 2:
    
            console.log("Lunes");
    
        break;

        case 3:
    
            console.log("Martes");
    
        break;

        case 4:
    
            console.log("Miercoles");
    
        break;

        case 5:
    
            console.log("Jueves");
    
        break;

        case 6:
    
            console.log("Viernes");
    
        break;

        case 7:
    
            console.log("Sabado");
    
        break;
    
        default:
    
            console.log("Numero no corresponde a un dia de la semana");
    }
    
console.log(weekdays(number));


}

var calificacion = 85;

if(calificacion >= 90){

    console.log("Aprobado con A");

} else if(calificacion >= 80 && calificacion <90){

    console.log("Aprobado con B");

} else if(calificacion >= 70 && calificacion <80){

    console.log("Aprobado con C");
} else {

    console.log("Reprobado");

}


var number1 = 20;

var number2 = 10;


function highest_number(number1,number2){

    if(number1 > number2){

        console.log("El numero mayor es: " + number1);
    
    } else if(number2 > number1){
    
        console.log("El numero mayor es: " + number2);
    
    } else {
    
        console.log("Los numeros son identicos: "  + number1 + " " + number2);
    
    }
}

console.log(highest_number(number1,number2));

// Estructuras basicas



var colores = ["rojo","amarillo","azul"];



for( var i = 0; i < colores.length; i++){

    console.log(colores[i]);

}



var contador = 1;



while(contador <=5){

    console.log(contador);

    contador++;

}



for(var i = 1; i <= 10; i++){

    if(i===8){

        break;

    }

    console.log(i);

}



for(var i = 1; i <=5; i++){

    if(i===3){

        continue;

    }

    console.log(i);

}



var entrada;



do {

    entrada = prompt("Ingresa un numero mayor a 5: ");

} while(entrada <=5);

// Evento Javascript

document.addEventListener("DOMContentLoaded", function(){

    document.getElementById("miBoton").addEventListener("click", function(){

        alert("Se hizo click en el boton");

    });

    document.getElementById("miBoton").addEventListener("mouseover", function(){

        document.getElementById("miBoton").style.color = "yellow";

    });

    document.getElementById("miBoton").addEventListener("mouseout", function(){

        document.getElementById("miBoton").style.color = "red";

    });

    /*

    document.getElementById("miformulario").addEventListener("submit",function(event){

        event.preventDefault();

        alert("Se envio el formulario");

    });

    */



});



window.addEventListener("load", function(){



    document.getElementById("name").addEventListener("keyup",function(event){

        if(event.key == "Enter"){

            alert("Presiono Enter");

        }

    });

});

// OBJETOS EN JAVASCRIPT



var persona = {

    nombre: "Karol",

    edad: 33,

    ciudad: "Aserri",

    saludar: function(){

        console.log(edad + 5);

        console.log("Hola, soy "+ this.nombre + " de "+ this.ciudad+".");

    }

};





persona.saludar();



var carro = {

    marca: "Toyota",

    modelo: "Rav4"

};

console.log(carro.marca);



var libro = {

    titulo:"Mi libro",

    autor: "Karol"

};



libro.year = 2023;

console.log(libro);



var circulo = {

    radio: 5,

    area: function(){

        return Math.PI * this.radio * this.radio;

    }

}



console.log(circulo.area());





function Persona(nombre, edad){

    this.nombre = nombre;

    this.edad = edad;

}



var persona1 = new Persona("Karol",33);

console.log(persona1);