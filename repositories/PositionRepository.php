<?php

namespace repositories;

use core\ActiveRecord;
use core\Repository;
use models\Position;

class PositionRepository extends Repository
{
    protected ActiveRecord $model;

    public function __construct()
    {
        $this->model = new Position();
    }

}