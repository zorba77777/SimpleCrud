$(function () {

    // Функция для сохранения позиции
    $('#save-position').on('click', function () {
            $.post(
                '/main/add',
                {
                    attr1: $('#attr1').val(),
                    attr2: $('#attr2').val()
                },
                function (id) {
                    if (id !== null) {

                        let lastTd = $($.parseHTML('<td class="remove" data-id=' + id +'><span class="fa fa-remove"></span></td>'));
                        lastTd.on('click', remove);

                        let tr = $('<tr>');

                        tr.append($('<td>').text(id))
                            .append($('<td>').text($('#attr1').val()))
                            .append($('<td>').text($('#attr2').val()))
                            .append(lastTd);
                        $("#table").find('tbody').append(tr);

                    } else {
                        alert('Не удалось добавить позицию');
                    }
                }
            );
    });

    $('.remove').on('click', remove);

});

// Функция для удаления позиции
function remove() {
    let $this = $(this);
    $.post(
        '/main/remove',
        {
            id: $this.data('id')
        },
        function (data) {
            if (data === 'success') {
                $this.parent().remove();
            } else {
                alert('Не удалось удалить позицию');
            }
        }
    );
}



