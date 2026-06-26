<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * https://www.d3data.de
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author    D3 Data Development - Daniel Seifert <info@shopmodule.com>
 * @link      https://www.oxidmodule.com
 */

declare(strict_types=1);

namespace D3\OxidTwigExtensions;

use InvalidArgumentException;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class InstanceOfExtension extends AbstractExtension
{
    /**
     * @return TwigFunction[]
     */
    public function getFunctions(): array
    {
        return [new TwigFunction('instance_of', [$this, 'twig_instance_of'], ['is_safe' => ['html']])];
    }

    /**
     * @param object      $entity
     * @param string      $method
     *
     * @return bool
     */
    public function twig_instance_of($entity, string $interface_name ): bool
    {
        if (!is_object($entity)) {
            throw new InvalidArgumentException(
                'Given entity is not of type object, got: ' . get_debug_type($entity)
            );
        }

        if (empty($interface_name)) {
            throw new InvalidArgumentException('Interface name empty');
        }

        return $entity instanceof $interface_name;
    }
}
