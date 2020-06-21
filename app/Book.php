<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Book extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'my_books_collection';
}
