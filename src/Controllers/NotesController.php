<?php
namespace Max\NotesPro\Controllers;

use Max\NotesPro\Core\Controller;
use Max\NotesPro\Models\NotesRepository;

/**
 *
 */
class NotesController extends Controller
{

  private $notesRepository;

  public function __construct()
  {
      $this->notesRepository = new NotesRepository();
  }

  public function indexAction(){
      //session_start();
      $content='addnotes.php';
      $template='template.php';
      //$pictures = $this->notesRepository->getAll();
      $data=[
          'title'=>'Новая заметка',
          //'pictures' => 'pictures',
          //'auth' => isset($_SESSION['name'])
      ];

      echo $this->renderPage($content,$template,$data);
  }
}
