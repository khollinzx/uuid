<?php

/**
 * This file is part of the ramsey/uuid library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Ben Ramsey <ben@benramsey.com>
 * @license http://opensource.org/licenses/MIT MIT
 */

declare(strict_types=1);

namespace Ramsey\Uuid;

use Ramsey\Uuid\Converter\NumberConverterInterface;

/**
 * This interface encapsulates deprecated methods for ramsey/uuid; this
 * interface and its methods will be removed in ramsey/uuid 5.0.0.
 *
 * @psalm-immutable
 */
interface DeprecatedUuidInterface
{
    /**
     * @deprecated This method will be removed in 5.0.0. There is no alternative
     *     recommendation, so plan accordingly.
     */
    public function getNumberConverter(): NumberConverterInterface;
}