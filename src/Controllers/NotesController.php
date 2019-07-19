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
  public function UpdateAction($id)
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
        if (!isset($post['delete'])){
            $title = $post['title'];
            $comment = $post['comment'];
            $id = $post['id'];
        //var_dump($params);
        if($this->notesRepository->update($title, $comment, $id) === false){
            $data =[
                'title'=>'Главная'
            ];
            echo $this->renderPage('main.php',
                'template.php', $data);
        } else {
            var_dump('no');
            //header('Location: /');
        }
      } else {
        //var_dump($id);
        $this->notesRepository->delete($id);
        header('Location: /');
      }
    }
  }

  public function AddAction($id)
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

  public function OpenAction($id)
  {
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $data =[
            'title'=>'Регистрация',
        ];
        echo $this->renderPage('registration.php',
            'template.php', $data);
    } elseif ($_SERVER['REQUEST_METHOD'] == 'GET'){
        $post = $_POST;
        //var_dump($id);
        $note = $this->notesRepository->getById($id);
            $data =[
                'title'=>'NotesPro',
                'auth' => isset($_SESSION['name']),
                'note' => $note
            ];
            echo $this->renderPage('note.php',
                'template.php', $data);

    }
  }
}
