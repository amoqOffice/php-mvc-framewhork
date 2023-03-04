<?php
// https://github.com/lotfio/aven
// Liste de toutes les routes de l'application avec leurs contrôleurs et méthodes

Route::get('/about-us', function(){
    AboutUs::CreateView('about-us');
});

// Formulaire d'update
$router->get('student/{id}/edit', 'StudentsController@edit');

// Traitement de l'update
$router->post('student/{id}/edit', 'StudentsController@update');

