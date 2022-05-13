<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrintModel extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['title', 'slug', 'text'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function files()
    {
        return $this->belongsToMany(File::class, 'print_model_file', 'print_model_id', 'file_id')->withPivot('type');
    }
}
