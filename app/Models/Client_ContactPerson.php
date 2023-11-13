<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client_ContactPerson extends Model
{
    use HasFactory;

    protected $primary = 'id';

    protected $table = 'client__contact_people';

    protected $fillable = [
        'client_id',
        'contactpeople_id',
        'director',
        'shareholder',
        'director',
        'other_role',
        'shareholding',
        'share_percent',
    ];

    public function clientsCont()
    {
        return $this->belongsTo(ContactPerson::class);
    }
    public function personContact()
    {
        return $this->hasOne(ContactPerson::class, 'id');
    }
    public function ContactPersonPtr()
    {
        return $this->belongsTo(ContactPersonPartner::class, 'contactpeople_id', 'id');
    }
    public function ContactPersonLtd()
    {
        return $this->belongsTo(ContactPersonLimited::class, 'contactpeople_id', 'id');
    }
}
