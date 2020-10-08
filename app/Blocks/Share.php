<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Share extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Share';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Share block.';

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
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

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
    public $example = [
        'items' => [
            ['item' => 'Item one'],
            ['item' => 'Item two'],
            ['item' => 'Item three'],
        ],
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'title' => get_field('title'),
            // 'mobile' => get_field('mobile title'),
            'logo' => get_field('logo'),
            'share' => get_field('social'),
            'stitle' => get_field('social title'),
            'sdesc' => get_field('social description'),
            'site' => \site_url(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $share = new FieldsBuilder('share');

        $share
            ->addText('title')
            // ->addText('mobile title')
            ->addImage('logo')
            ->addText('social title')
            ->addTextarea('social description')
            ->addGallery('social');

        return $share->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    // public function share()
    // {
    //     $posts = get_field('share');
    //     $data = [];
    //     foreach($posts as $post) : 
    //         $data[] = [
    //             'title' => ($title = get_field('title', $post->ID)) ? $title : '',
    //             'link' => get_permalink($post->ID),
    //             'img' => get_field('image', $post->ID)['url'],
    //         ];
    //     endforeach;

    //     return $data;
    // }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }
}
