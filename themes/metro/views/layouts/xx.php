<?php $this->widget('zii.widgets.CMenu', array(
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i><span class="username">Admin</span> <i class="icon-angle-down"></i>',
                        'url' => '#',
                        'linkOptions'=> array(
                            'class' => 'dropdown-toggle',
                            'data-toggle' => 'dropdown',
                            ),
                        'itemOptions' => array('class'=>'dropdown user'),
                        'items' => array(
                            array(
                                'label' => '<i class="icon-user"></i> My Profile',
                                'url' => '#'
                            ),
                            array(
                                'label' => '<i class="icon-key"></i> Log Out',
                                'url' => array('site/logout'),
                            ),
                        )
                    ),
                ),
                'encodeLabel' => false,
                'htmlOptions' => array(
                    'class'=>'nav pull-right',
                        ),
                'submenuHtmlOptions' => array(
                    'class' => 'dropdown-menu',
                )
            ));?>