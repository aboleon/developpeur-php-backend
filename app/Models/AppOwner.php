<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed|null $address
 */
class AppOwner extends Model
{
    public $timestamps = false;
    protected $table = 'site_owner';
    protected $guarded = [];

    protected $casts = [
      'address' => 'json'
    ];
}
