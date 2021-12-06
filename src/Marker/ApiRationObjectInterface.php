<?php

declare(strict_types=1);

namespace YaPro\ApiRation\Marker;

use YaPro\MarkerInterfaces\Base\ValueObjectInterface;

/**
 * Объекты классов имплементирующих данный интерфейс могут быть автоматически преобразованы из/в json при HTTP-запросе.
 */
interface ApiRationObjectInterface extends ValueObjectInterface
{
}