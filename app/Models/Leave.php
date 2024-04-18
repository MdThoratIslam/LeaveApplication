<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'total_days',
        'reason',
        'starting_date',
        'resumption_date',
        'user_id',
        'recommending_authority_status',
        'recommending_authority_id',
        'recommending_date',
        'approving_authority_status',
        'approving_authority_id',
        'approving_date',
        'status_active',
        'is_delete',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
