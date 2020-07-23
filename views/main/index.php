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
</head>
<body>

<div class="row justify-content-center">
    <h1>CRUD абстрактных позиций</h1>
</div>


<div class="row justify-content-center">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Первый аттрибут</th>
            <th>Второй аттрибут</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($positions as $position): ?>
            <tr>
                <td><?= $position->id ?></td>
                <td><?= $position->attr1 ?></td>
                <td><?= $position->attr2 ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>