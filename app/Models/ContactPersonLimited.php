<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPersonLimited extends Model
{
    use HasFactory;

    protected $primary = 'id';

    protected $table = 'contact_person_limiteds';

    protected $fillable = [
        'client_id',
        'contactpeople_id',
        'position',
        'number_share',
        'share_percent',
    ];
    public function contactPersonltd()
    {
        return $this->hasOne(ContactPerson::class, 'id');
    }
}
