<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportAgent extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function supportTickets()
    {
        return $this->hasMany(SupportTicket::class);
    }
}
