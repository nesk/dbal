<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Platforms;

use Doctrine\DBAL\Types\Types;

/**
 * Provides the behavior, features and SQL dialect of the MariaDB 10.4 (10.4.3 RC) database platform.
 *
 * Note: Should not be used with versions prior to 10.4.3.
 */
final class MariaDb1043Platform extends MariaDb1027Platform
{
    /**
     * {@inheritdoc}
     */
    public function getUnderlyingJsonTypeDeclarationSQL(array $field)
    {
        return Types::TEXT;
    }

    /**
     * {@inheritdoc}
     */
    public function hasNativeJsonType() : bool
    {
        return true;
    }
}
