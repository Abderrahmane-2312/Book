<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title','prix','date_publication','_token','id_author']; 

     /**
     * Get all of the authors for the Author
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function authors(): HasOne
    {
        return $this->hasOne(Author::class, 'id', 'id_author'); 
    }

} 
