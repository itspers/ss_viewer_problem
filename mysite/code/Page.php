<?php

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\ORM\ArrayList;
use SilverStripe\View\ArrayData;

class Page extends SiteTree
{
    private static $db = array();

    private static $has_one = array();


    public function menuList()
    {
return new ArrayList([
    new ArrayData([
        'Title' => 'Item 1',
        'Children' => new ArrayList([
            new ArrayData([
                'Title' => 'Item 1.1',
            ]),
            new ArrayData([
                'Title' => 'Item 1.2',
                'Children' => new ArrayList([
                    new ArrayData([
                        'Title' => 'Item 1.2.1',
                    ]),
                    new ArrayData([
                        'Title' => 'Item 1.2.2',
                        'Children' => new ArrayList([
                            new ArrayData([
                                'Title' => 'Item 1.2.2.1',
                            ]),
                            new ArrayData([
                                'Title' => 'Item 1.2.2.2',
                            ]),
                        ])
                    ]),
                ])
            ]),
        ])
    ]),
            new ArrayData([
                'Title' => 'Item 2',
                'Children' => new ArrayList([
                    new ArrayData([
                        'Title' => 'Item 2.1',
                    ]),
                    new ArrayData([
                        'Title' => 'Item 2.2',
                        new ArrayData([
                            'Title' => 'Item 2.2.1',
                            'Children' => new ArrayList([
                                new ArrayData([
                                    'Title' => 'Item 2.2.1.1',
                                ]),
                                new ArrayData([
                                    'Title' => 'Item 2.2.1.2',
                                ]),
                            ])
                        ]),
                    ]),
                ])
            ]),
        ]);
    }
}
