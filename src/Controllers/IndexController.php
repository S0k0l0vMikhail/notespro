<?php
namespace Max\NotesPro\Controllers;

use Max\NotesPro\Core\Controller;
use Max\NotesPro\Models\NotesRepository;

class IndexController extends Controller
{
    private $notesRepository;

    public function __construct()
    {
        $this->notesRepository = new NotesRepository();
    }

    public function indexAction(){
        session_start();
        $content='main.php';
        $template='template.php';
        $notes = $this->notesRepository->getAll();

        $data=[
            'title'=>'Главная',
            'notes' => $notes,
            'auth' => isset($_SESSION['name']),
            'id' => isset($_SESSION['id'])
        ];

        echo $this->renderPage($content,$template,$data);
    }

}
