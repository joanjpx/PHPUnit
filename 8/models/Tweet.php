<?php

namespace Models;
require (__DIR__.'/../vendor/autoload.php');

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $table = "tweets";
    protected $guarded = [];
    public $timestamps = false;
}