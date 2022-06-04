<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContatoModel extends Model
{
    protected $table = "tbContato";//
    
    public $timestamps=false;

    protected $fillable = ['nome','email','fone','assunto','mensagem'];

}
