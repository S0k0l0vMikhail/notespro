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
      session_start();
      $content='addnotes.php';
      $template='template.php';
      $data=[
          'title'=>'Новая заметка',
          'name' => $_SESSION['name'],
          'auth' => isset($_SESSION['name'])
      ];

      echo $this->renderPage($content,$template,$data);
  }
  public function AddAction()
  {
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        $data =[
            'title'=>'Регистрация',
        ];
        echo $this->renderPage('registration.php',
            'template.php', $data);
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $post = $_POST;
        $params = [
            'title' => $post['title'],
            'description' => $post['comment'],
            'date' => date('Y:m:d'),
            'user_id' => $_SESSION['id']
        ];
        //var_dump($params);
        if($this->notesRepository->save($params) === false){
            $data =[
                'title'=>'Главная'
            ];
            echo $this->renderPage('main.php',
                'template.php', $data);
        } else {
            header('Location: /');
        }
    }
  }
}
