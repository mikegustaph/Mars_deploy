<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Precheck_Attachment extends Model
{
    use HasFactory;

    protected $primarykey = 'id';

    protected $table = 'precheck_attachment';

    protected $fillable = [
        'precheck_attach',
        'task_id',
        'status'
    ];
}
