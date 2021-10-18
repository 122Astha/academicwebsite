<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siteinformation extends Model
{
    use HasFactory;
    protected $table = "siteinformations";
    protected $fillable=(
      [ 'site_key', 'site_details', 'status']
  );
}
