<?php

namespace Greg0x46\MaskedField;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Fields\SupportsDependentFields;

class MaskedField extends Field
{
    use SupportsDependentFields;

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


    /**
     * Set raw mode when save
     *  TRUE    Send value without mask ( RAW )
     *  FALSE   Send value with mask
     *
     * @param  bool  $raw
     * @return $this
     */
    public function raw(bool $raw = true)
    {
        return $this->withMeta([__FUNCTION__ => $raw]);
    }

}
