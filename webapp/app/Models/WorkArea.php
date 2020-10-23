<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\WorkArea
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|WorkArea newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkArea newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkArea query()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkArea whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkArea whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkArea whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkArea whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkArea whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WorkArea extends Model
{
    use HasFactory;
}
