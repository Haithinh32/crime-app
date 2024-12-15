<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
   'id',
   'user_id',
   'created_at',
   'title',
   'status',
   'content',
   'type_of_crime',
   'image',
   'video',
    ];
}