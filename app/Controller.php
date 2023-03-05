<?php

abstract class Controller 
{
    /**
     * Afficher une vue
     *
     * @param string $filePath
     * @param array $data
     * @return void
     */
    public function view(string $filePath, array $data = []){
        extract($data);

        // On démarre le buffer de sortie
        ob_start();

        // On génère la vue
        require_once(ROOT.'views/'.$filePath.'.php');

        // On stocke le contenu dans $content
        $content = ob_get_clean();

        // On fabrique le "template"
        require_once(ROOT.'views/layout/default.php');
    }

    public function redirect($url, $statusCode = 303)
    {
        header('Location: ' . $url, true, $statusCode);
        die();
    }
}