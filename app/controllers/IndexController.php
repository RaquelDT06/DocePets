<?php

namespace App\controllers;

use Core\controller\Action;

use App\models\infoModel;

class IndexController extends Action
{

    public function index()
    {
        $this->render("index", "template_front1");
    }


    public function contato()
    {
        $this->render('contato', "template_front2");
    }

    public function sobre_nos()
    {
        $this->render('sobre_nos', "template_front2");
    }
    public function nossas_lojas()
    {
        $this->render('nossas_lojas', "template_front2");
    }
    public function servicos()
    {
        $this->render('servicos', "template_front2");
    }

    public function login()
    {
        $this->view->login = isset($_GET['error']) ? $_GET['error'] : '';
        $this->render('login', "template_front2");
    }
}



