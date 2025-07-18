<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPhotos\Models;

use Awcodes\Curator\Models\Media;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RectitudeOpen\FilamentPhotos\Database\Factories\PhotoFactory;

/**
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string $url
 * @property string $name
 * @property bool $is_published
 * @property int $display_order
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \RectitudeOpen\FilamentPhotos\Models\PhotoCategory> $categories
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Awcodes\Curator\Models\Media> $pictures
 *
 * @method static \Illuminate\Database\Eloquent\Builder|static ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|static withSlug(string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|static published()
 * @method static \Illuminate\Database\Eloquent\Builder|static draft()
 */
class Photo extends Model
{
    use HasFactory;
    use HasSEO;
    use Sluggable;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'url',
        'is_published',
        'display_order',
        'created_at',
    ];

    protected $with = ['pictures'];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(PhotoCategory::class, 'pivot_photo_categories', 'photo_id', 'category_id');
    }

    protected static function booted()
    {
        static::forceDeleted(function ($photo) {
            $photo->categories()->detach();
            $photo->pictures()->detach();
        });
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function pictures(): BelongsToMany
    {
        return $this
            ->belongsToMany(config('curator.model', Media::class), 'pivot_photo_media', 'photo_id', 'media_id')
            ->withPivot('order')
            ->orderBy('order');
    }

    public function firstPicture(): ?Media
    {
        $picture = $this->pictures()->first();

        /** @var Media|null $picture */
        return $picture;
    }

    // @phpstan-ignore-next-line
    #[Scope]
    protected function withSlug(Builder $query, string $slug): void
    {
        $query->where('slug', $slug);
    }

    // @phpstan-ignore-next-line
    #[Scope]
    protected function published(Builder $query): void
    {
        $query->where('is_published', 1);
    }

    // @phpstan-ignore-next-line
    #[Scope]
    protected function draft(Builder $query): void
    {
        $query->where('is_published', 0);
    }

    // @phpstan-ignore-next-line
    #[Scope]
    protected function ordered(Builder $query): void
    {
        $query->orderBy('display_order', 'desc')
            ->orderBy('created_at', 'desc');
    }

    protected static function newFactory()
    {
        return PhotoFactory::new();
    }
}
