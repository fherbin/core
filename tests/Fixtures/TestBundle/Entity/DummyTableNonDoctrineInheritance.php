<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Herbin Francois <francois.rb1@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\Tests\Fixtures\TestBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource
 */
class DummyTableNonDoctrineInheritance
{
    /**
     * @var int The id
     *
     * @Groups({"default"})
     */
    public $id;

    /**
     * @var string The dummy name
     *
     * @Groups({"default"})
     */
    public $name;

    /**
     * @var DummyTableNonDoctrineInheritanceRelated
     */
    public $parent;
}