<?php

namespace controllers;

use core\Controller;
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

}