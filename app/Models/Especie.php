<?php

namespace App\Models;

use CodeIgniter\Model;

class Especie extends Model
{
  
    protected $table            = 'Especie';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nombre','om_cientifico','zoologico','edad'];
   
    
}
