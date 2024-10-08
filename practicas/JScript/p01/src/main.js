function hola(){
    document.write('Hola mundo');
}
function variables(){
    var nombre = 'Reyner';
    var edad = 22;
    var altura = 1.85;
    var casado = true;
    document.write( nombre );
    document.write('<br>');
    document.write( edad );
    document.write('<br>');
    document.write( altura );
    document.write('<br>');
    document.write( casado );
}
function ingreso_datos(){

    nombre = prompt('Ingresa tu nombre', '');
    edad = prompt('Ingresa tu edad: ', '');
    document.write('Hola ');
    document.write(nombre);
    document.write(' asi que tienes ');
    document.write(edad);
    document.write(' años');

}
function estructura(){
    var valor1;
    var valor2;
    valor1 = prompt('Introducior primer numero:','');
    valor2 = prompt('Introducior segundo numero:','');
    var suma = parseInt(valor1) + parseInt(valor2);
    var producto = parseInt(valor1) * parseInt(valor2);
    document.write('La suma es ');
    document.write(suma);
    document.write('<br>');
    document.write('El producto es ');
    document.write(producto);    
}
function calificacion(){
    var nota;
    nota = prompt('Ingresa tu nota: ', '');
    if (nota>=4){
        document.write(nombre+' esta aprobado con un '+nota)
    }
}
function mayor_que(){
    var num1,num2;
    num1 = prompt('Introducir primer numero', '');
    num2 = prompt('Introducir segundo numero', '');    
    num1 = parseInt(num1);
    num2 = parseInt(num2);
    if (num1>num2) {
        document.write('El mayor es '+num1);
    }
    else {
        document.write('el mayor es '+num2)
    }
}
function notas(){
    var nota1,nota2,nota3,pro;

    nota1 = prompt('Ingresa 1ra. nota:', '');
    nota2 = prompt('Ingresa 2da. nota:', '');
    nota3 = prompt('Ingresa 3ra. nota:', '');

    nota1 = parseInt(nota1);
    nota2 = parseInt(nota2);
    nota3 = parseInt(nota3);

    pro = (nota1+nota2+nota3)/3;

    if (pro>=7){
        document.write('aprobado');
    }
    else {
        if (pro>=4){
            document.write('regular');            
        }
        else {
            document.write('reprobado');
        }
    }
}
function menu(){
    var valor;
    valor = prompt('Ingresar un valor entre 1 y 5', '');
    valor = parseInt(valor);
    switch (valor) {
        case 1: document.write('uno');
        break;
        case 2: document.write('dos');
        break;
        case 3: document.write('tres');
        break;
        case 4: document.write('cuatro');
        break;
        case 5: document.write('cinco');
        break;
        default:document.write('debe ingresar un valor entre 1 y 5')
    }
}
function colores(){
    var col;
    col = prompt('Ingresa el color con el que quieras pintar el fondo de la ventana (rojo, verde,, azul)', '');
    switch(col) {
        case 'rojo': document.bgColor='#ff0000';
            break;
        case 'verde': document.bgColor='#00ff00';
            break;
        case 'azul': document.bgColor='#0000ff';
            break;
    }
}
function mientras(){
    var x;
    x=1;
    while (x<=100) {
        document.write(x);
        document.write('<br>');
        x=x+1;
    }
}
function suma_5(){
    var x=1;
    var suma=0;
    var valor;
    while (x<=5) {
        valor = prompt('Ingresa el valor:', '');
        valor = parseInt(valor);
        suma = suma+valor;
        x=x+1;
    }
    document.write("La suma de los valores es "+suma+"<br>")
}
function digitos(){
    var valor;
    do{
        valor=prompt('Ingresa un valor entre 1 y 999: (0 para salir)', '');
        valor=parseInt(valor);
        document.write('El valor '+valor+' tiene ')
        if (valor<10) 
            document.write('1 digito');
        else
            if (valor<100){
                document.write('2 digitos');
            }
            else {
                document.write('3 digitos');
            }
        document.write('<br>');
    }while(valor!=0);
}
function para(){
    var f;
    for(f=1; f<=10; f++){
        document.write(f+" ");
    }
}
function codigo_duro(){
    document.write("Cuidado<br>");
    document.write("Ingresa tu documento correctamente<br>");
    document.write("Cuidado<br>");
    document.write("Ingresa tu documento correctamente<br>");
    document.write("Cuidado<br>");
    document.write("Ingresa tu documento correctamente<br>");
}
function mostrarMensaje(){
    document.write("Cuidado<br>");
    document.write("Ingresa tu documento correctamente<br>");
}
function rango(){
    var inicio,valor1,valor2;
    valor1 = prompt('Ingresa el valor inferior: ', '');
    valor1 = parseInt(valor1);
    valor2 = prompt('Ingresa el valor superior: ', '');
    valor2 = parseInt(valor2);
    for (inicio=valor1; inicio<=valor2; inicio++){
        document.write(inicio+" ")
    }
}
function convertirLetra(){
    var r;
    r = prompt('Ingresa un valor entre 1 y 5', '');
    r = parseInt(r);
    if(r==1)
        document.write("uno");
    else
        if(r==2)
            document.write("dos");
        else
            if(r==3)
                document.write("tres");
            else
                if(r==4)
                    document.write("cuatro");
                else
                    if(r==5)
                        document.write("cinco");
                    else
                        document.write("valor incorrecto");
}
function converitrCastellano(){
    var r = prompt('Ingresa un valor entre 1 y 5', '');
    r = parseInt(r);
    switch (r) {
        case 1: document.write("uno");
            break;
        case 2: document.write("dos");
            break;
        case 3: document.write("tres");
            break;
        case 4: document.write("cuatro");
            break;
        case 5: document.write("cinco");
            break;
        default: document.write("valor incorrecto")
    }
}