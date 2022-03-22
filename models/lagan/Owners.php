<?php

namespace Lagan\Model;

/**
 * Example Lagan content model
 */

class Owners extends \Lagan\Lagan {

    function __construct() {
        $this->type = 'owners';

        // Description in admin interface
        $this->description = 'Proprietaires';

        $this->properties = [
            // Always have a title
            [
                'name' => 'title',
                'description' => 'Nom',
                'required' => true,
                'searchable' => true,
                'type' => '\Lagan\Property\Str',
                'input' => 'text'
            ],
            [
                'name' => 'title',
                'description' => 'Prénom',
                'required' => true,
                'searchable' => true,
                'type' => '\Lagan\Property\Str',
                'input' => 'text'
            ],
            [
                'name' => 'Animals',
                'description' => 'Animaux',
                'required' => true,
                'type' => '\Lagan\Property\Manytoone',
                'input' => 'manytoone'
            ],
            [
                'name' => 'description',
                'description' => 'Adresse',
                'searchable' => true,
                'type' => '\Lagan\Property\Str',
                'input' => 'textarea'
            ],
            [
                'name' => 'email',
                'description' => 'Email',
                'searchable' => true,
                'type' => '\Lagan\Property\Str',
                'input' => 'text',
                'validate' => 'emaildomain'
            ],
        ];
    }

}

?>