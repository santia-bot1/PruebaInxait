var btn_siguiente = document.querySelector('#siguiente')
var btn_anterior = document.querySelector('#anterior')
var btn_registro = document.querySelector('#registro')
var contenedor1 = document.querySelector('#contenedor1')
var contenedor2 = document.querySelector('#contenedor2')

var tipo_empresa = document.querySelector('#tipo_empresa');
var codigo_venta_no_presente = document.querySelector('#codigo_venta_no_presente_container');

btn_siguiente.addEventListener('click', cambioContenedor1)
btn_anterior.addEventListener('click', cambioContenedor2)



function cambioContenedor1(){
    contenedor1.style.display = 'none';
    btn_siguiente.style.display = 'none';
    contenedor2.style.display = 'block';
    btn_anterior.style.display = 'block';
    btn_registro.style.display = 'block';
}
function cambioContenedor2(){
    contenedor1.style.display = 'block';
    btn_anterior.style.display = 'none';
    contenedor2.style.display = 'none';
    btn_siguiente.style.display = 'block';
    btn_registro.style.display = 'none';
}
function codigoVentaNoPresente(){
    if(tipo_empresa.value == 'GATEWAY'){
        codigo_venta_no_presente.style.display ="block"
    }
    else{
        codigo_venta_no_presente.style.display ="none"
    }

}
$('#departamento').change(function(event){
    $.get('Ciudades/'+event.target.value,function(response, state){
        $('#ciudad').empty();
        for (let index = 0; index < response.length; index++) {
            $('#ciudad').append('<option value="'+response[index].id+'">'+response[index].nombre+'</option>')
            
        }
    });
});