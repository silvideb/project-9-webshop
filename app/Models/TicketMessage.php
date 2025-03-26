<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketMessage extends Model
{
    use HasFactory;

    protected $fillable = ['support_ticket_id', 'message'];

    public function supportTicket()
    {
        return $this->belongsTo(SupportTicket::class);
    }
}
