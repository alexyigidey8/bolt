<?php

namespace Bolt\Storage\Field\Type;

use Doctrine\DBAL\Types\Type;

/**
 * This is one of a suite of basic Bolt field transformers that handles
 * the lifecycle of a field from pre-query to persist.
 *
 * @author Ross Riley <riley.ross@gmail.com>
 */
class CheckboxType extends FieldTypeBase
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'checkbox';
    }

    /**
     * {@inheritdoc}
     */
    public function getStorageType()
    {
        return Type::getType('boolean');
    }
}
