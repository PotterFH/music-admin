<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Genero;
class GenerosController extends Controller{
    public function index(){
        $genero = new Genero();
        $data['generos'] = $genero->orderBy('id', 'ASC') -> findAll();

        $data['header'] = view('template/header');
        $data['footer'] = view('template/footer');
        
        return view('genres/listag',$data);
    }

    public function crearg(){

        $data['header'] = view('template/header');
        $data['footer'] = view('template/footer');

        return view("genres/crearg",$data);
    }

    
    public function guardarg(){
        $genero = new Genero();


        //$nombre = $this->request->getVar('name');
        //print_r($nombre);

        $data = [
            'name' => $this->request->getVar('name'),
        ];

        $genero -> insert($data);

        //echo "Insertado a la DB";

        return $this->response->redirect(site_url('/listag'));

    }

    public function borrarg($id=null){
        //echo "gborrarg registro".$id;
        $genero = new Genero();

        $genero->where('id',$id)->delete($id);

        return $this->response->redirect(site_url('/listag'));

    }

    public function editarg($id=null){

        $data['header'] = view('template/header');
        $data['footer'] = view('template/footer');

        $genero = new Genero();
        $data['genero'] = $genero->where('id',$id)->first();


        return view('genres/editarg',$data);
    }

    public function actualizarg(){

        $genero = new Genero();

        $data = [
            'name' => $this->request->getVar('name'),
        ];

        $id = $this -> request -> getVar('id');
        $genero->update($id,$data);

        return $this->response->redirect(site_url('/listag'));
    }
}