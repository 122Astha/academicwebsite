<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    use HasFactory;
    protected $primaryKey='g_id';
      protected $fillable=(
        [ 'g_id','g_name', 'g_status',]
    );
}
