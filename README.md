Laravel Nova tool to view PHP info
========================================
## Installation

Install the package via Composer in any Laravel app using [Nova](https://nova.laravel.com):

```shell
composer require arrowsgm/nova-phpinfo
```

Register the tool with Nova in the `tools` method of your `NovaServiceProvider`:

```php
// in app/Providers/NovaServiceProvider.php
//...
use Arrowsgm\NovaPhpinfo\NovaPhpinfo;
use Laravel\Nova\NovaApplicationServiceProvider;
//...
class NovaServiceProvider extends NovaApplicationServiceProvider {
    //...
    public function tools()
    {
        return [
            //...
            new NovaPhpinfo,
            //...
        ];
    }
    //...
}
```

You can apply policy to this tool like so:

```php
    //...
    public function tools()
    {
        return [
            //...
            (new NovaPhpinfo())->canSee(function ($request) {
                return $request->user->can('manage-users');
            }),
            //...
        ];
    }
    //...
```
