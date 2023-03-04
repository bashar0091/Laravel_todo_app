<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo_List extends Model
{
    use HasFactory;
    
    protected $table = "todo__lists";
    protected $primarykey = "id"; 
}
