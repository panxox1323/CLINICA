agendarcitas.dao = {

    getDays: function (id, fecha) {
        return $.ajax({
            url: '/admin/getdays/'+ parseInt(id) + '/' + fecha,
            type: 'GET',
            dataType: 'JSON'
        });
    }

};