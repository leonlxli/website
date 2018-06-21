<?php

namespace App;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    use HasUUID;

    protected $fillable = [
        'uuid',
        'slug',
        'name',
        'image_path',
        'description',
        'nano_goal',
        'nano_address',
    ];

    public function getKey(){
        if(!empty($this->slug)){
            return $this->slug;
        }
        return $this->uuid;
    }

    public function getPath(){
        return '/projects/'.$this->getKey();
    }

    public function getNanoCurrent(){
        return 0;
    }

    public static function findByKey($key){
        $project = static::findByUuid($key);
        if($project){
           return $project;
        }
        return static::where('slug',$key)->first();
    }

}
