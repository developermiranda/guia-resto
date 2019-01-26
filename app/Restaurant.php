<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{

	/*
				Vamos preencher os campos em massa atraves da Api Restfull
				- os demais campos utilizarei de outra forma
	*/

	protected $fillable =
	[
			'name',
			'description'
	];
}

?>
