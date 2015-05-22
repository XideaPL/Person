<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Person\Loader;

use Xidea\Component\Base\Loader\ModelLoaderInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface PersonLoaderInterface extends ModelLoaderInterface
{
    /**
     * Returns a manufacturer by id.
     * 
     * @param int $id
     * 
     * @return \Xidea\Component\Person\Model\PersonInterface
     */
    function load($id);
}
