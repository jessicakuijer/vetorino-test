<?php

namespace Lagan\Model;

/**
 * Example Lagan content model
 */

class Homepage extends \Lagan\Lagan {

    function __construct() {
        $this->type = 'homepage';

        // Description in admin interface
        $this->description = 'homepage';

        $this->properties = [
            // Always have a title
            [
                'name' => 'title',
                'description' => 'Title',
                'required' => true,
                'searchable' => true,
                'type' => '\Lagan\Property\Str',
                'input' => 'text'
            ],
            [
                'name' => 'description',
                'description' => 'Description',
                'searchable' => true,
                'type' => '\Lagan\Property\Str',
                'input' => 'textarea'
            ],
            // [
            //     'name' => 'description',
            //     'description' => 'Description',
            //     'searchable' => true,
            //     'type' => '\Lagan\Property\Str',
            //     'input' => 'trumbowyg'
            // ],
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
            // [
            //     'name' => 'position',
            //     'description' => 'Order',
            //     'autovalue' => true,
            //     'type' => '\Lagan\Property\Position',
            //     'input' => 'text'
            // ],
            // [
            //     'name' => 'slug',
            //     'description' => 'Slug',
            //     'autovalue' => true,
            //     'type' => '\Lagan\Property\Slug',
            //     'input' => 'text'
            // ],
            // [
            //     'name' => 'crew',
            //     'description' => 'Crewmembers for this Hoverkraft',
            //     'type' => '\Lagan\Property\Onetomany',
            //     'input' => 'tomany'
            // ],
            // [
            //     'name' => 'feature',
            //     'description' => 'Features this Hoverkraft has',
            //     'type' => '\Lagan\Property\Manytomany',
            //     'input' => 'tomany'
            // ]
        ];
    }

}

?>