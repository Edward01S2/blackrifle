<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class hero extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'hero';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Lorem ipsum...';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'custom';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'editor-ul';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'edit';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = 'wide';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => true,
        'align_text' => false,
        'align_content' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
    ];

    /**
     * The block preview example data.
     *
     * @var array
     */
    // public $example = [
    //     'items' => [
    //         ['item' => 'Item one'],
    //         ['item' => 'Item two'],
    //         ['item' => 'Item three'],
    //     ],
    // ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'pretitle' => get_field('pretitle'),
            // 'mobile' => get_field('mobile pretitle'),
            'title' => get_field('title'),
            'content' => get_field('content'),
            'poster' => get_field('poster'),
            'link' => get_field('video link'),
            'bg' => get_field('video bg')
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $hero = new FieldsBuilder('hero');

        $hero
            ->addText('pretitle')
            // ->addText('mobile pretitle')
            ->addText('title')
            ->addTextarea('content')
            ->addFile('video bg')
            ->addText('video link')
            ->addImage('poster');

        return $hero->build();
    }

}
