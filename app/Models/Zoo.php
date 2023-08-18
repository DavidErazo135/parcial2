<?php

namespace App\Models;

use CodeIgniter\Model;

class zool extends Model
{
  
    protected $table            = 'Zool';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nombre','direccion','telefono'];
   
    
}
