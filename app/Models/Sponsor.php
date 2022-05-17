<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'file_id'];

    public function image()
    {
        return $this->hasOne(File::class, 'id', 'file_id');
    }
}
