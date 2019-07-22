<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $connection = 'mysql';
    protected $table = 'service';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['image_id', 'video_id', 'created_by'];

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

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id', 'id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function service_ar()
    {
        return $this->hasOne(ServiceArabic::class, 'service_id', 'id');
    }

    public function service_en()
    {
        return $this->hasOne(ServiceEnglish::class, 'service_id', 'id');
    }

}
