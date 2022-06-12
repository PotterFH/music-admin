<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Album;
class Albums extends Controller{
    public function index(){

        $album = new Album();
        $data['albums'] = $album->orderBy('id', 'ASC') -> findAll();

        $data['header'] = view('template/header');
        $data['footer'] = view('template/footer');

        return view("music/list", $data);
    }

    public function crear(){

        $data['header'] = view('template/header');
        $data['footer'] = view('template/footer');

        return view("music/crear",$data);
    }

    public function guardar(){
        $album = new Album();


        //$nombre = $this->request->getVar('name');
        //print_r($nombre);

        $data = [
            'name' => $this->request->getVar('name'),
            'author' => $this->request->getVar('author'),
            'genre_id' => $this->request->getVar('genre_id')
        ];

        $album -> insert($data);

        //echo "Insertado a la DB";

        return $this->response->redirect(site_url('/list'));

    }

    public function borrar($id=null){
        //echo "Borrar registro".$id;
        $album = new Album();

        $album->where('id',$id)->delete($id);

        return $this->response->redirect(site_url('/list'));

    }

    public function editar($id=null){

        $data['header'] = view('template/header');
        $data['footer'] = view('template/footer');

        $album = new Album();
        $data['album'] = $album->where('id',$id)->first();


        return view('music/edit',$data);
    }

    public function actualizar(){

        $album = new Album();

        $data = [
            'name' => $this->request->getVar('name'),
            'author' => $this->request->getVar('author'),
            'genre_id' => $this->request->getVar('genre_id')
        ];

        $id = $this -> request -> getVar('id');
        $album->update($id,$data);

        return $this->response->redirect(site_url('/list'));
    }
    
}