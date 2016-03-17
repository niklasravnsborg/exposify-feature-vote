<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
	public function is_voted()
	{
		return Vote::where('user', Auth::id())->where('voted_on', $this->id)->exists();
	}

	public function vote()
	{
		Vote::firstOrCreate([
			'user'     => Auth::id(),
			'voted_on' => $this->id
		]);
	}

	public function unvote()
	{
		Vote::where('user', Auth::id())->where('voted_on', $this->id)->delete();
	}

	private function votes()
	{
		return $this->hasMany('App\Vote', 'voted_on');
	}
}
