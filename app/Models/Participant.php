<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $table = 'Participant';


    protected $primaryKey = 'Group_id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'college_name',
        'leader_name',
        'leader_class',
        'leader_rollno',
        'leader_phoneno',
        'leader_email',
        'member1_name',
        'member1_class',
        'member1_rollno',
        'member1_phoneno',
        'member1_email',
        'member2_name',
        'member2_class',
        'member2_rollno',
        'member2_phoneno',
        'member2_email',
        'member3_name',
        'member3_class',
        'member3_rollno',
        'member3_phoneno',
        'member3_email',
        'transaction_id',
    ];
}
