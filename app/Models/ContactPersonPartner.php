<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPersonPartner extends Model
{
    use HasFactory;

    protected $primary = 'id';

    protected $table = 'contact_person_partners';

    protected $fillable = [
        'client_id',
        'contactpeople_id',
        'shareholder',
        'other_role',
        'shareholding',
        'share_percent',
    ];
    public function contactPersonPtr()
    {
        return $this->hasOne(ContactPerson::class, 'id');
    }
}
