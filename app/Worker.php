<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model {

	//
	protected $fillable = ['fio', 'phone'];
	public $timestamps = false;

	public function events()
    {
        return $this->hasMany('App\Event');
    }
}
