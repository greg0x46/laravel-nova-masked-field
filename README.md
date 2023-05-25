# Laravel Nova Masked Field

## Installation

```sh
composer require greg0x46/masked-field
```

## Basic Usage

To use the Laravel Nova Masked Field, follow these steps:


1. Import the MaskedField class in your Nova resource file:
```php
use Greg0x46\MaskedField\MaskedField;
```
2. Add the MaskedField to the fields method of your resource file:
```php
public function fields(Request $request)
{
    return [
        MaskedField::make('Phone')
            ->mask('(###) ###-####'),
    ];
}
```

![masked-field-demo](https://user-images.githubusercontent.com/16712150/200448755-d3fcc39b-28b6-4145-bbd0-f2d5c8e23713.png)

## Usage with dependsOn

You can also use the dependsOn method to set a conditional mask based on the value of another field. Here's an example:

```php
use Greg0x46\MaskedField\MaskedField;

public function fields(Request $request)
{
    return [
        MaskedField::make('Phone', 'phone')
            ->mask('(###) ###-####')
            ->dependsOn(['country'], function (MaskedField $field, NovaRequest $request, FormData $formData) {
                if($formData->country == 'BR')
                    $field->mask('(##) ####-####');
            })
    ];
}
```

## Mask syntax

The Laravel Nova Masked Field uses a mask syntax to define patterns for input formatting. Here are the default tokens available:

``` javascript
{
    '#': { pattern: /[0-9]/ },
    'X': { pattern: /[0-9a-zA-Z]/ },
    'S': { pattern: /[a-zA-Z]/ },
    'A': { pattern: /[a-zA-Z]/, uppercase: true },
    'a': { pattern: /[a-zA-Z]/, lowercase: true },
    '!': { escape: true },
    '*': { repeat: true }
}
```

You can refer to the [beholdr/maska](https://github.com/beholdr/maska)  repository for more information on the mask syntax.

## References

* It is a custom field for [Laravel Nova](https://nova.laravel.com/)
* It uses [beholdr/maska](https://github.com/beholdr/maska)
* It is inpired by [wemersonrv/input-mask](https://novapackages.com/packages/wemersonrv/input-mask)
