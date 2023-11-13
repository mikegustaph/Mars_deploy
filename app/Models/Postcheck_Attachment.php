<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postcheck_Attachment extends Model
{
    use HasFactory;

    protected $primarykey = 'id';

    protected $table = 'postcheck_attachment';

    protected $fillable = [
        'postcheck_attach',
        'task_id',
        'status'
    ];
}
