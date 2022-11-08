<?php

namespace Greg0x46\MaskedField;

use Laravel\Nova\Fields\Field;

class MaskedField extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'masked-field';

    /**
     * Define field mask
     *
     * @param string $mask
     * @return $this
     */
    public function mask(string $mask = '')
    {
        return $this->withMeta(['mask' => $mask]);
    }
}
