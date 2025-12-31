<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Culture extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id','created_by','title','slug','region','province','description','image'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function creator() {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function bookmarks() {
        return $this->belongsToMany(User::class, 'bookmarks');
    }
}
