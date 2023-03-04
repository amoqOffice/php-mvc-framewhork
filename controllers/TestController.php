<?php
include_once('../app/Controller.php');

class TestController extends Controller
{
    public function create($data)
    {
        die($data);
        return $this->view('articles/index');
    }

    // public function index(){
    //     // On instancie le modèle "Article"
    //     $this->loadModel('Article');

    //     // On stocke la liste des articles dans $articles
    //     $articles = $this->Article->getAll();

    //     // On envoie les données à la vue index
    //     $this->render('index', compact('articles'));
    // }
}