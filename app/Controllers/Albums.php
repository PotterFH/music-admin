<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\album;
class Albums extends Controller{
    public function index(){

        $album = new Album();
        $data['albums'] = $album->orderBy('id', 'ASC') -> findAll();
        $data['header'] = view('template/header');
        $data['footer'] = view('template/footer');

        return view("music/list", $data);
    }

    public function crear(){
        return view("music/crear");
    }
}