<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

	protected $fillable = ['name', 'place', 'whengo', 'worker_id', 'description'];
	public $timestamps = false;

	public function worker()
    {
        return $this->belongsTo('App\Worker');
    }

    public static function getList()
    {
    	return self::lists('name', 'id');
    }

    public function getPhotosAttribute($value)
    {
        return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
    }

    public function setPhotosAttribute($photos)
    {
        $this->attributes['photos'] = implode(',', $photos);
    }
}
