<?php
    
    namespace App;

    use Core\init\Bootstrap;

    class Route extends Bootstrap{
       
        //array no qual iremos definir as rotas da nossa aplicação
        //toda rota dever ser inserida aqui
        protected function initRoutes() {

            //rotas das IndexController
            $routes['home'] =  array('route'=>'/','controller'=>'indexController','action'=>'index');
            $routes['contato'] =  array('route'=>'/contato','controller'=>'indexController','action'=>'contato');
            $routes['sobre_nos'] =  array('route'=>'/sobre_nos','controller'=>'indexController','action'=>'sobre_nos');
            $routes['nossas_lojas'] =  array('route'=>'/nossas_lojas','controller'=>'indexController','action'=>'nossas_lojas');
            $routes['servicos'] =  array('route'=>'/servicos','controller'=>'indexController','action'=>'servicos');
            $routes['login'] = array('route'=>'/login', 'controller' => 'IndexController', 'action' => 'login');

            //rotas do ErrorController

            //rotas do AuthController
            $routes['autenticar'] = array('route'=>'/autenticar', 'controller' => 'AuthController', 'action' => 'autenticar');

            $routes['sair'] = array('route'=>'/sair', 'controller' => 'AuthController', 'action' => 'sair');

            //rotas do AdminController
            $routes['admin'] =  array('route'=>'/admin','controller'=>'adminController','action'=>'index');
            

            //rotas do UsuarioController
            $routes['usuario_novo'] =  array('route'=>'/usuario_novo','controller'=>'usuarioController','action'=>'cadastrar');

            $routes['salvar_usuario'] =  array('route'=>'/salvar_usuario','controller'=>'usuarioController','action'=>'salvar_usuario');
            

            $this->setRoutes($routes);
        }

        
    }

?>