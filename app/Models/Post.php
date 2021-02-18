<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Atributos asignados en masa
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'published',
        'user_id',
        'cover_id',
    ];

    /**
     * Las Category de este Post.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * La portada de este Post.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cover()
    {
        return $this->belongsTo(Image::class, 'cover_id');
    }

    /**
     * La galeria de imágenes, multiples Image relacionadas a este Post.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function gallery()
    {
        return $this->belongsToMany(Image::class);
    }
}
