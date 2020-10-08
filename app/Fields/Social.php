<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Social extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $social = new FieldsBuilder('social');

        $social
            ->setLocation('post_type', '==', 'social');

        $social
            ->addText('title')
            ->addTextarea('description')
            ->addImage('image');

        return $social->build();
    }
}
