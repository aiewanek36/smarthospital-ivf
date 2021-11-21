<?php 
namespace App\Controllers;

class Pages extends Controller {
    
    public function index(){
        return view('welcome_message');
    }

    public function view($page = 'home'){
        if (!is_file(APPPATH.'/Views/pages/'.$page.'.php')){
            throw new \CodeIgniter\Exceptions\PageNoteFoundException($page);
        }
        $session = session();
        $this->load->model("ThemeModel");
        $data['title']  = 'Welcome '.$session->get('name_user').' to '.ucfirst($page);
        echo view('templates/header', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/footer', $data);
    }
}
?>