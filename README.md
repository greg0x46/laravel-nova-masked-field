# Laravel Nova Masked Field

## Installation

```sh
composer require greg0x46/masked-field
```

## Usage

Import it in your resources and add the InputMask to `fields` method.

```php
use Greg0x46\MaskedField\MaskedField;

public function fields(Request $request)
{
    return [
        MaskedField::make('Phone')
            ->mask('(###) ###-####'),
    ];
}
```
![masked-field-demo](https://user-images.githubusercontent.com/16712150/200448755-d3fcc39b-28b6-4145-bbd0-f2d5c8e23713.png)

## Mask syntax

Default tokens:

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

[See more](https://github.com/beholdr/maska)

## References

* It is a custom field for [Laravel Nova](https://nova.laravel.com/)
* It uses [beholdr/maska](https://github.com/beholdr/maska)
* It is inpired by [wemersonrv/input-mask](https://novapackages.com/packages/wemersonrv/input-mask)
