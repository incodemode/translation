<?php

namespace incodemode\Translation\Models;

use Illuminate\Database\Eloquent\Model;
use incodemode\Translation\Traits\LocaleTrait;

class Locale extends Model
{
    use LocaleTrait;

    /**
     * The locales table.
     *
     * @var string
     */
    protected $table = 'locales';

    /**
     * The fillable locale attributes.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'lang_code',
        'name',
        'display_name',
    ];

    /**
     * {@inheritdoc].
     */
    public function translations()
    {
        return $this->hasMany(Translation::class);
    }
}
