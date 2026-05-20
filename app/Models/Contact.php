<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail',
    ];

    /*
     *お問い合わせはユーザに属する
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /*
     *お問い合わせはカテゴリーに属する
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /*
     *お問い合わせは複数のタグに属する
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
