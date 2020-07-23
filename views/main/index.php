<?php
/** @var array $positions */

/** @var Position $position */

use models\Position;

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>CRUD абстрактных позиций</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="../../assets/main/css/index.css" rel="stylesheet">

    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet"
          type="text/css"/>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">

    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">

    </script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
            crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="../../assets/main/js/index.js"></script>
</head>
<body>

<div class="row justify-content-center">
    <h1>CRUD абстрактных позиций</h1>
</div>


<div class="row justify-content-center">
    <table id="table" class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Первый аттрибут</th>
            <th>Второй аттрибут</th>
            <th>Удалить позицию</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($positions as $position): ?>
            <tr>
                <td><?= $position->id ?></td>
                <td><?= $position->attr1 ?></td>
                <td><?= $position->attr2 ?></td>
                <td class="remove" data-id="<?= $position->id ?>"><span class="fa fa-remove"></span></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="row justify-content-center before-bottom">
    <button type="button" data-toggle="modal" data-target="#add-position">Добавить позицию</button>
</div>

<div class="modal fade" id="add-position" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Новая позиция</h5>
            </div>
            <div class="modal-body">

                <form>
                    <div class="form-group">
                        <label for="attr1" class="col-form-label">Первый аттрибут</label>
                        <input type="text" class="form-control" id="attr1" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="attr2" class="col-form-label">Второй аттрибут</label>
                        <input type="text" class="form-control" id="attr2" required>
                    </div>
                    <div class="form-inline">
                        <button id="save-position" type="button" data-dismiss="modal">Сохранить позицию</button>
                        <button type="button" data-dismiss="modal">Закрыть</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>