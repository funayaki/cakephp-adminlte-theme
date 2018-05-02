# CakePHP AdminLTE Theme

## Installation

You can install using [composer](http://getcomposer.org).

```
composer require funayaki/cakephp-adminlte-theme
```

### Enable Plugin

```php
// config/bootstrap.php

Plugin::load('AdminLTE');

```

### Enable Form

```php
// src/View/AppView.php

public function initialize()
{
    $this->loadHelper('Breadcrumbs', ['className' => 'AdminLTE.Breadcrumbs']);
    $this->loadHelper('Form', ['className' => 'AdminLTE.Form']);
}
```

## Contributing

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request
