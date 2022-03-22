<?php

namespace Lagan\Model;

/**
 * Example Lagan content model
 */

class Animals extends \Lagan\Lagan {

    function __construct() {
        $this->type = 'animals';

        // Description in admin interface
        $this->description = 'Animaux';

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
                'name' => 'description',
                'description' => 'Male / femelle / autres signes distinctifs',
                'searchable' => true,
                'type' => '\Lagan\Property\Str',
                'input' => 'textarea'
            ],
            [
                'name' => 'picture',
                'description' => 'Image selected',
                'required' => false,
                'type' => '\Lagan\Property\Fileselect',
                'extensions' => 'jpeg,jpg,gif,png', // Allowed extensions
                'directory' => '/files', // Directory relative to APP_PATH (no trailing slash)
                'input' => 'fileselect'
            ],
            [
                'name' => 'picture',
                'description' => 'Image to upload',
                'required' => false,
                'type' => '\Lagan\Property\Upload',
                'directory' => '/uploads', // Directory relative to APP_PATH (no trailing slash)
                'input' => 'upload',
                'validate' => [ ['extension', 'allowed=jpeg,jpg,gif,png'], ['size', 'size=1M'] ]
            ],
            [
                'name' => 'owners',
                'description' => 'Propriétaire',
                'required' => true,
                'type' => '\Lagan\Property\Manytoone',
                'input' => 'manytoone'
            ]
        ];
    }

}

?>