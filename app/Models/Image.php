<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * Atributos asignados en masa
     *
     * @var array
     */
    protected $fillable = [
        'path',
        'uploader_id'
    ];

    /**
     * El User que subió esta Image.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uploader()
    {
        return $this->belongsTo(User::class, 'uploader_id');
    }
}
