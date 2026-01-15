<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Role;

class Menu extends Model
{
    protected $table = 'menus';

    protected $fillable = [
        'name',
        'route',
        'icon',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
