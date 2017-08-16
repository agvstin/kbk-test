<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
	protected $fillable = [
		'email',
		'state_id'
	];

	public function state()
	{
		return $this->belongsTo(State::class);
	}
}
