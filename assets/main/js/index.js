$(function () {

    $('#save-position').on('click', function () {

            $.post(
                '/main/add',
                {
                    attr1: $('#attr1').val(),
                    attr2: $('#attr2').val()
                },
                function (id) {
                    if (id !== null) {
                        let tr = $('<tr>');
                        tr.append($('<td>').text(id))
                            .append($('<td>').text($('#attr1').val()))
                            .append($('<td>').text($('#attr2').val()));
                        $("#table").find('tbody').append(tr);
                    } else {
                        alert('Не удалось добавить позицию');
                    }
                }
            );
    });

});



