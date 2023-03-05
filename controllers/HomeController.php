<?php
include_once('../app/Controller.php');

class HomeController extends Controller
{
    public function index() {

        return $this->view('home');
    }
}