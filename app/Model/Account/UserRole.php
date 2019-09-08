<?php

namespace App\Model\Account;

use Illuminate\Database\Eloquent\Model;

use App\Model\Account\User;

class UserRole extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'display_name',
    ];

    /**
     * The table linked to this model.
     *
     * @var string
     */
    protected $table = 'user_roles';

    /**
     * The users associated to this role.
     *
     * @var array
     */
    public function users(){
        return $this->hasMany(User::class);
    }
}
