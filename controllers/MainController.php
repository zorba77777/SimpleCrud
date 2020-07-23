<?php

namespace controllers;

use core\App;
use core\Controller;
use models\Position;
use repositories\PositionRepository;

/**
 * Контроллер для главной страницы
 * Class MainController
 * @package controllers
 */
class MainController extends Controller
{
    /**
     * Выводит содержимое страницы index
     */
    public function index()
    {
        $repository = new PositionRepository();
        $positions = $repository->findAll();
        $this->render('index', ['positions' => $positions]);
    }

    /**
     * Добавляет позицию
     */
    public function add()
    {
        $position = new Position();
        $position->attr1 = App::$request->getParam('attr1');
        $position->attr2 = App::$request->getParam('attr2');
        $position->saveRecord();
        echo App::$pdo->lastInsertId();
    }

    /**
     * Удаляет позицию
     */
    public function remove()
    {
        $position = new Position();
        $position->id = intval(App::$request->getParam('id'));
        $position->deleteRecord();
        echo 'success';
    }

}