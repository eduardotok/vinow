<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomeModel extends Model
{
   protected $table = 'contato';

   public $fillable = ['id,created_at,updated_at'];
}
