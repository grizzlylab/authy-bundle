GrizzlylabAuthyBundle
======================

This is a simple wrapper of "authy/php" to easily configure it inside a Symfony project.

### 1. Installation

- ```composer require 'grizzlylab/authy-bundle@2.0'```
- in AppKernel.php: ```new Grizzlylab\Bundle\AuthyBundle\GrizzlylabAuthyBundle()```

### 2. Configuration

```yml
grizzlylab_authy:
    api_key: "%authy_key%"
    api_url: ~
```

License
-------
This bundle is under the MIT license.
