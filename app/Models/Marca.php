<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'imagem'];

    public function rules() {
        return [
            'nome' => 'required|unique:marcas,nome,'.$this->id.'|min:3',
            'imagem' => 'required|file'
        ];
    } 
    
    public function feedback(){
        return  [
        'required' => 'o campo :attribute é obrigatório!',
        'nome.unique' => 'o nome da marca já existe!',
        'nome.min' => 'O nome precisa ter 3 caracteres',
        'imagem.mimes' => 'O arquivo deve ser uma imagem do tipo PNG'
        ];  
    }
}
