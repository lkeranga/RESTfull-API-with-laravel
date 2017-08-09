<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artical extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articals';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'auth_id', 'title', 'url', 'content'];

    
}
