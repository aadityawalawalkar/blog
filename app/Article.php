<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model {

	protected $fillable = [
    'title',
    'body',
    'published_at'
  ];

  /** 
   * Accessor: Format something when retrieving from the database
   * function naming convention:
   * get<fieldName>Attribute
   */
  public function getPublishedAtAttribute()
  {
    return Carbon::parse($this->attributes['published_at'])->toDateTimeString();
  }

  /** 
   * Mutator: Format something when saving to the database
   * function naming convention:
   * set<fieldName>Attribute
   */
  public function setPublishedAtAttribute($date)
  {
    // $this->attributes['published_at'] = new Carbon($date);
    // $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d H:i:s', $date . " " . date('H:i:s'));
    $this->attributes['published_at'] = Carbon::parse($date . " " . date('H:i:s'));
  }

}
