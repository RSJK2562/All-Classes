<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batche extends Model
{
    protected $table = 'batches';
    protected $primaryKey = 'id';
    protected $fillable = ['name','course_id','start_data'];
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
