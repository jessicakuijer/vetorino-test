<?php
namespace Lagan\Model;

class Page extends \Lagan\Lagan {

    function __construct() {
        $this->type = 'page';

        $this->description = 'These objects contain information about a book.';

        $this->properties = [
            [
                'name' => 'title',
                'description' => 'The book title',
                'type' => '\Lagan\Property\Str',
                'input' => 'text'
            ],
            [
                'name' => 'description',
                'description' => 'Description',
                'type' => '\Lagan\Property\Str',
                'input' => 'trumbowyg'
            ],
            [
                'name' => 'slug',
                'description' => 'Slug',
                'type' => '\Lagan\Property\Slug',
                'input' => 'text'
            ],
            [
                'name' => 'image',
                'description' => 'Image',
                'type' => '\Lagan\Property\Upload',
                'input' => 'upload'
            ],
            [
                'name' => 'hello',
                'description' => 'hello',
                'type' => '\Lagan\Property\Str',
                'input' => 'trumbowyg'
            ]
        ];
    }

}