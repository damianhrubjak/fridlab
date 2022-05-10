<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory, Sluggable;

    protected $appends = ['hash'];
    protected $fillable = ['source_path', 'file_name', 'slug', 'size'];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'hash',
                'onUpdate' => true
            ]
        ];
    }

    /**
     * Hash is used for creating slug from file_name without extension
     * Using file_name
     * file-name.jpg => file-name-jpg
     * 
     * Using hash
     * file-name.jpg => file-name
     *
     * @return string
     */
    public function getHashAttribute(): string
    {
        return pathinfo($this->file_name, PATHINFO_FILENAME) . '-' . generateRandomString(5, false);
    }
}
