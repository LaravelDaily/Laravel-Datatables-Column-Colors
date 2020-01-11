<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    public $table = 'customers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const STATUS_SELECT = [
        'pending'  => 'Pending',
        'active'   => 'Active',
        'archived' => 'Archived',
    ];

    const STATUS_COLOR = [
        'pending'  => '#FFFF99',
        'active'   => '#90EE90',
        'archived' => '#00BFFF',
    ];
}
