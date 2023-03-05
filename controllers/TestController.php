<?php
include_once('../app/Controller.php');

class TestController extends Controller
{
    public function create()
    {
        return $this->view('articles/create');
    }

    public function post()
    {
        // var_dump($_POST);
        // die(URL.'/home');

        $this->redirect(URL.'/home');
    }

    public function index(){
        $this->view('articles/index', ["test" => "je fais un test"]);
    }
}