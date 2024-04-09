<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    /**
     * O nome da tabela associada ao model.
     *
     * @var string
     */
    protected $table = 'partners';

    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'membership_type',
        'address',
    ];

    /**
     * Os atributos que devem ser cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'address' => 'array',
    ];
}
