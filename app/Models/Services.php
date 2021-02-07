<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
		use HasFactory;
		protected $fillable = ['nome', 'descricao'];
		protected $primaryKey="id";
		public $incrementing=true;
		public $timestamps=false;

		// public function services(){
		// 	return $this -> hasMany("App\Models\Services", "id");
		// }
}
