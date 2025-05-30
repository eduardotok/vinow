<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table ='tb_produto';

    public $fillable = [
    'id',
    'nomeProduto',
    'valor',
    'imgProduto',
    'created_at',
    'updated_at'];

    public $timestamps = false;

}
