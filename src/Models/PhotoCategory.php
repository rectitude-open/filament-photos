<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPhotos\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use RectitudeOpen\FilamentPhotos\Database\Factories\PhotoCategoryFactory;
use SolutionForest\FilamentTree\Concern\ModelTree;

class PhotoCategory extends Model
{
    use HasFactory;
    use ModelTree;
    use SoftDeletes;

    protected $fillable = ['title', 'parent_id', 'weight'];

    public function photo()
    {
        return $this->belongsToMany(Photo::class, 'pivot_photo_categories', 'category_id', 'photo_id');
    }

    protected static function booted()
    {
        static::forceDeleted(function ($photoCategory) {
            $photoCategory->photo()->detach();
        });
    }

    protected static function newFactory()
    {
        return PhotoCategoryFactory::new();
    }
}
