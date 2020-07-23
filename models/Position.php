<?php

namespace models;

use core\ActiveRecord;

/**
 * Модель для получения из БД записи из таблицы positions
 * Class position
 * @package models
 */
class Position extends ActiveRecord
{
    /**
     * Поле хранит имя таблицы
     * @var string
     */
    public static string $tableName = 'positions';

    public int $id;

    public ?string $attr1;

    public ?string $attr2;

    public function __construct($id = 0, $attr1 = '', $attr2 = '')
    {
        $this->id = $id;
        $this->attr1 = $attr1;
        $this->attr2 = $attr2;
    }

    /**
     * Функция возвращает имя ключевого поля
     * @return string
     */
    public function getPrimaryKeyName(): string
    {
        return 'id';
    }

    /**
     * Функция возвращает значение ключевого поля
     * @return mixed|void
     */
    public function getPrimaryKeyValue()
    {
        return $this->id;
    }
}