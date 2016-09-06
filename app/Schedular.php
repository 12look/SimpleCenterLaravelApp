<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedular extends Model {

	protected $fillable = ['worker_id', 'group_num', 'start', 'end', 'day_of_week'];
	public $timestamps = false;

	public function worker()
    {
        return $this->belongsTo('App\Worker');
    }

}
