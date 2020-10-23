<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Vacancy
 *
 * @property int $id
 * @property string $city
 * @property string $description
 * @property string $requirement
 * @property string $terms
 * @property string $slug
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereRequirement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereTerms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Vacancy extends Model
{
    use HasFactory;
}
