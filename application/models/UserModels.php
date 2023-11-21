<?php 
namespace App\Models;
  
use CodeIgniter\Model;
  
class UserModels extends Model{
    protected $table = 'users';
    protected $allowedFields = ['username','email','id_user','status'];
    
}