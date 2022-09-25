$(function(){
    $('#IdDepartamento').on('change', onDepartamentChange);
});

function onDepartamentChange(){
    var IdDepartamento = $(this).val();

    $.get('/api/municipio/show/'+IdDepartamento+'', function(data){
        var html_select = '<option value="">Seleccione nivel</option>';
        for (var i=1; i<data.length; i++){
            html_select += '<option value="'+data[i].id+'">'+data[i].nombre+'</option>';
        }
         $('#IdMunicipio').html(html_select);
    });
}

