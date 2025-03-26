<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ticketMessages()
    {
        return $this->hasMany(TicketMessage::class);
    }

    public function supportAgent()
    {
        return $this->belongsTo(SupportAgent::class);
    }
}
