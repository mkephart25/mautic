<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\CoreBundle\Event;

use Mautic\CoreBundle\Security\Permissions\CorePermissions;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class IconEvent
 *
 * @package Mautic\CoreBundle\Event
 */
class IconEvent extends Event
{
    /**
     * @var
     */
    protected $icons = array();

    protected $security;

    /**
     */
    public function __construct(CorePermissions $security)
    {
        $this->security = $security;
    }

    /**
     * @return mixed
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Add icon
     */
    public function addIcon($type, $icon)
    {
        $this->icons[$type] = $icon;
    }

    /**
     * Return the icons
     *
     * @return mixed
     */
    public function getIcons()
    {
        return $this->icons;
    }
}