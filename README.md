# PHP-Code-Formatter-for-PHP-8
This is a simple code in PHP to update old codes in PHP files to correctly formatted to support PHP 8. There are few formats that are used in old ways but not accepted in PHP 8 by default (actually you can set in php setting).

This code I used to update those format or syntax. Here are some of the syntax:
1. `<?php}` to be change to `<?php }`
2. `<?if` to be change to `<?php if`
3. and few more.

You can add your format into the `$steps` array.

# Usage
Run below command:
```
php update.php <path>
php update.php /var/www/html
```

This command will open all PHP files and reformatting them recursively.
