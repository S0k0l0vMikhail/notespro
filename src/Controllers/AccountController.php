<?php
namespace Max\NotesPro\Controllers;

use Max\NotesPro\Core\Controller;
use Max\NotesPro\Models\NotesRepository;

/**
 *
 */
class AccountController extends Controller
{

  private $notesRepository;

  public function __construct()
  {
      $this->notesRepository = new NotesRepository();
  }

  public function indexAction()
  {
    // session_start();
    //if(!isset($_SESSION['name'])) header('Location: /');
    //$accountPage = ($_SESSION['role'] == 'ADMIN') ? 'admin_account.php' : 'user_account.php';

    $data = [
        'title' => 'Личный кабинет',
        'name' => $_SESSION['name'],
        'auth' => isset($_SESSION['name'])
    ];

    echo $this->renderPage('account.php' , 'template.php', $data);
  }


  //конец класса
}
