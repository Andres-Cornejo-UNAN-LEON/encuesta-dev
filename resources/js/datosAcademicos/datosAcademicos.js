$(function(){
    $('#IdFacultad').on('change', onDepartamentChange);
});

function onDepartamentChange(){
    var IdFacultad = $(this).val();
    console.log(IdFacultad);
    $.get('/api/carrera/show/'+IdFacultad+'', function(data){
        var html_select = '<option value="">Seleccione nivel</option>';
        for (var i=1; i<data.length; i++){
            html_select += '<option value="'+data[i].id+'">'+data[i].nombre+'</option>';
        }
         $('#IdCarrera').html(html_select);
    });
}

