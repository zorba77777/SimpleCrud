$(function () {

    // Сохраняем позицию
    $('#save-position').on('click', function () {
            $.post(
                '/main/add',
                {
                    attr1: $('#attr1-save').val(),
                    attr2: $('#attr2-save').val()
                },
                function (id) {
                    if (id !== null) {

                        let lastTd = $($.parseHTML('<td class="remove" data-id=' + id +'><span class="fa fa-remove"></span></td>'));
                        lastTd.on('click', remove);

                        let tr = $('<tr>');

                        tr.append($('<td>').text(id))
                            .append($('<td>').text($('#attr1-save').val()))
                            .append($('<td>').text($('#attr2-save').val()))
                            .append(lastTd);
                        $("#table").find('tbody').append(tr);

                    } else {
                        alert('Не удалось добавить позицию');
                    }
                }
            );
    });

    // Удаляем позицию
    $('.remove').on('click', remove);

    // Ищем позицию
    $('.search').on('keypress', function (e) {
        if(e.key === 'Enter') {
            let attr = $(this).attr('id');
            let value = $(this).val();

            $('.' + attr).each(function () {
                if ($(this).text().indexOf(value) === -1) {
                    $(this).parent().attr('hidden', true);
                }
            })

            if (!$('.clear-search').length) {
                $('body').append('<button class="clear-search">Очистить поиск</button>');

                $('.clear-search').on('click', function () {
                    $("#table").find(':hidden').attr('hidden', false);
                    $('.search').val('')
                    $('.clear-search').remove();
                })
            }

        }
    });


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



