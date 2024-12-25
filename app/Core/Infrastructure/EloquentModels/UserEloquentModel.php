<?php

namespace App\Core\Infrastructure\EloquentModels;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @method static Builder<static>|UserEloquentModel newModelQuery()
 * @method static Builder<static>|UserEloquentModel newQuery()
 * @method static Builder<static>|UserEloquentModel query()
 * @mixin Eloquent
 */
class UserEloquentModel extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public array $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'confirmed|min:8|nullable',
    ];
}
