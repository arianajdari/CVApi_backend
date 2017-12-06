<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $table = 'apps';



    protected $fillable = [
    	'user_id', 'name', 'public_key', 'secret_key', 'password',
    ];


    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
