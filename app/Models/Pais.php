<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Pais
 *
 * @property int $id
 * @property string $nombre
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pais newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pais newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pais query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pais whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pais whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pais whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pais whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Pais extends Model
{
    protected $table = 'paises';
}
