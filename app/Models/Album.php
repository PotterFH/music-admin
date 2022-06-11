<?php 
namespace App\Models;

use CodeIgniter\Model;

class Album extends Model{
    protected $table      = 'albums';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields=['id', 'name', 'author', 'genre_id' ];
}