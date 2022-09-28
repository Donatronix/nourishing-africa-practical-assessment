<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Company.
 *
 * @package namespace App\Models;
 */
class Company extends Model implements Transformable
{
    use HasFactory;
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
            'name',
            'email',
            'country',
            'location',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
