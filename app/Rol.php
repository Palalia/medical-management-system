<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Rol extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'roles';
}
