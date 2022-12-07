<?php

namespace App\Models;

use App\Enums\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
//    protected $guarded = [];
    protected $fillable = ['name', 'role', 'phone', 'email', 'addressOne', 'addressTwo', 'city', 'state', 'zip', 'comments', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeVisibleFor($query, User $user)
    {
//        if ($user->role === Role::Admin || $user->role === Role::Author) {
//            return;
//        }

        $query->where("user_id", $user->id);
    }

}
