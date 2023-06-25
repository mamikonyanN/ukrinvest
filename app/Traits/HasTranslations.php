<?php

namespace App\Traits;

use Exception;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait HasTranslations
{
  public function translations(): HasMany
  {
    if (empty($this->translationClass)) {
      throw new Exception("Translation class must be specified.");
    }

    return $this->hasMany($this->translationClass);
  }

  public function ru(): HasOne
  {
    return $this->translations()->where('locale', 'ru')->one();
  }

  public function en(): HasOne
  {
    return $this->translations()->where('locale', 'en')->one();
  }

  public function hy(): HasOne
  {
    return $this->translations()->where('locale', 'hy')->one();
  }

  public function __get($key)
  {
    $attribute = $this->getAttribute($key);
    if (isset($attribute)) return $attribute;
    return $this->{app()->getLocale()}->getAttribute($key);
  }
}
