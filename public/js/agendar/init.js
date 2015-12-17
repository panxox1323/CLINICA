
/* jQuery Events
 */
$(function($) {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#datetimepicker12').on('dp.change', function(e){

        var especialista = $('#id_especialista').val()
        var fecha = e.date.format("YYYY-MM-DD");

        var ajax = agendarcitas.dao.getDays(especialista, fecha);

        ajax.done(function(response) {
            console.log(response);
            $('#lista_horas li').remove().empty();
            $('#select_horas > .dim').remove().empty();
            var element = $('#lista_horas');
            $.each(response.horas_todas, function(i, value) {
                console.log(value);
                var li = $('<li/>');
                (value.active == 1) ? li.append(value.hora + ' - <b class="color-b">Reservada</b> '): li.append(value.hora + ' - <b class="color-b2">Libre</b> ');
                li.appendTo(element);
            });
            var element = $('#select_horas');
            $.each(response.horas_disponibles, function(i, value) {
                var option = $('<option/>');
                option.addClass('dim')
                    .text(value.hora)
                    .val(value.id);
                option.appendTo(element);
            });
        }).fail(function(jqXHR, textStatus) {
           console.error({
                'XHR': jqXHR,
               'Status': textStatus
           });
        });

    });

});