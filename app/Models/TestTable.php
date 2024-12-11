<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestTable extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'test_table';

    protected $primaryKey = 'Group_id';

    // Indicate the attributes that are mass assignable
    protected $fillable = [
        'leader_name',
        'Group_id',
        'test_taken',
        'Q1',
        'Q2',
        'Q3',
        'Q4',
        'Q5',
        'Q6',
        'Q7',
        'Q8',
        'Q9',
        'Q10',
        'Q11',
        'Q12',
        'Q13',
        'Q14',
        'Q15',
        'Q16',
        'Q17',
        'Q18',
        'Q19',
        'Q20',
        'total',
    ];
}
