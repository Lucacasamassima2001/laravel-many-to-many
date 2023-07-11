<?php

namespace App\Models;

use App\Models\Technology;
use App\Models\Type;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function type(){
        // belongsTo si usa nella tabella che ha la chiave esterna, cioè quella che sta dalla parte del molti
        return $this->belongsTo(Type::class);
    }

    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }
}
