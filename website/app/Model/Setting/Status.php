<?php

namespace App\Model\Setting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
   	use SoftDeletes;
    protected $table = 'status';
    

}
