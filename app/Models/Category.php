<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    /*
     *カテゴリーは複数のお問い合わせ内容を持つ
     */
    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }
}
