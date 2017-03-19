# Requirements
- symfony >= 3.0
- php >= 7.0

# Installation
Nothing special:

1. ```composer require todstoychev/timestampable```;
2. Add to AppKernel 
```php
    new Todstoychev\Timestampable\TimestampableBundle(),
```

# Usage
Entity that will use automatic timestamps should implement ```Todstoychev\TimestampableBundle\Entity\TimestampableInterface```.
The interface implementation is released in ```Todstoychev\TimestampableBundle\Entity\Timestampable``` trait.
So in your entity:

```php

use Todstoychev\TimestampableBundle\Entity\Timestampable;
use Todstoychev\TimestampableBundle\Entity\Timestampable;

class MyEntity implements TimestampableInterface
{
    use Timestampable;
}
```

Timestampable trait adds to entity 2 fields: createdAt and updatedAt. Describe those 2 in your entity configuration. If you are using anotations, override those 2 properties in your entity class.

That's all.