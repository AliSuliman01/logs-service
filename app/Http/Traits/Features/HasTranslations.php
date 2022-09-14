<?php


namespace App\Http\Traits\Features;

use App\Models\Scopes\TranslationScope;
use Illuminate\Support\Str;

trait HasTranslations
{
    public static function bootHasTranslations()
    {
        static::addGlobalScope(TranslationScope::class);
    }

    protected abstract function translationsModel();

    public function translationsForeignKey(){
        return Str::snake(class_basename($this)) . '_id';
    }

    public function translations()
    {
        return $this->hasMany($this->translationsModel(), $this->translationsForeignKey());
    }

    public function translation()
    {
        return $this->hasOne($this->translationsModel(), $this->translationsForeignKey());
    }
}
