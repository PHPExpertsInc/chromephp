## Overview
ChromePhp is a PHP library for the Chrome Logger Google Chrome extension.

This library allows you to log variables to the Chrome console.

## Requirements
- PHP 5 or later

## License
This library is licensed under the Apache 2.0 license:
http://www.apache.org/licenses/LICENSE-2.0

## Installation
1. Install the Chrome extension from: https://chrome.google.com/extensions/detail/noaneddfkdjfnfdakjjmocngnfkfehhd
2. Click the extension icon in the browser to enable it for the current tab's domain
3. Put ChromePhp.php somewhere in your PHP include path
4. Log some data

### Without Composer

```php
include 'ChromePHP.php';

use ChromePHP\ChromePHP;

ChromePHP::log('Hello console!');
ChromePHP::log($_SERVER);
ChromePHP::warn('something went wrong!');
```

More information can be found here:
http://www.chromelogger.com
