<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $connection = 'mysql';
    protected $table = 'album';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['created_by'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }


    public function album_ar()
    {
        return $this->hasOne(AlbumArabic::class, 'album_id','id');
    }

    public function album_en()
    {
        return $this->hasOne(AlbumEnglish::class, 'album_id','id');
    }

}
