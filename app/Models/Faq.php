<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
		use HasFactory;

		// Definição dos campos que podem ser editados
		protected $fillable = ['questions', 'answers'];
}
