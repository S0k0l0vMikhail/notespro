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
        //$pictures = $this->notesRepository->getAll();
        $data=[
            'title'=>'Главная',
            'pictures' => 'pictures',
            'auth' => isset($_SESSION['name'])
        ];

        echo $this->renderPage($content,$template,$data);
    }

}
