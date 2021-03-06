<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Person;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
abstract class Events
{
    /**
     * The PRE_SAVE event occurs when the person is saved.
     */
    const PRE_SAVE = 'xidea_person.person.pre_save';
    
    /**
     * The POST_SAVE event occurs when the person is saved.
     */
    const POST_SAVE = 'xidea_person.person.post_save';
    
    /**
     * The CREATE_INITIALIZE event occurs when the create process is initialized.
     */
    const CREATE_INITIALIZE = 'xidea_person.person.create_initialize';
    
    /**
     * The PRE_CREATE event occurs when the create process is initialized.
     */
    const PRE_CREATE = 'xidea_person.person.pre_create';
    
    /**
     * The CREATE_SUCCESS event occurs when the create process is initialized.
     */
    const CREATE_SUCCESS = 'xidea_person.person.create_success';
    
    /**
     * The CREATE_FORM_VALID event occurs when the create process is initialized.
     */
    const CREATE_FORM_VALID = 'xidea_person.person.create_form_valid';
    
    /**
     * The CREATE_COMPLETED event occurs when the create process is initialized.
     */
    const CREATE_COMPLETED = 'xidea_person.person.create_completed';
    
}
