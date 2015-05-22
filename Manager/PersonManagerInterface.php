<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Person\Manager;

use Xidea\Component\Person\Model\PersonInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface PersonManagerInterface
{
    /**
     * Saves a person.
     * 
     * @param PersonInterface $person
     */
    function save(PersonInterface $person);

    /**
     * Updates a person.
     * 
     * @param PersonInterface $person
     */
    function update(PersonInterface $person);

    /**
     * Deletes a person.
     * 
     * @param PersonInterface $person
     */
    function delete(PersonInterface $person);
}
