<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class MarketingPage extends Model { protected $fillable=['slug','title','meta_description','hero','sections','schema']; protected $casts=['hero'=>'array','sections'=>'array','schema'=>'array']; }
