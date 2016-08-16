<?php
/**
 * Файл конфигурации меню виджета Активности
 */
 
/**
 *  Меню авторизированного пользователя 
 */
$config['data']['livestream'] = array(
    'class' => 'js-widget-stream-navs',
    'init'        => array(
        'fill' => array(
            'list' => array('*'),
        ),
    ),
    
    'list' => array(
        'all' => array(
            'text' => array (
                '{{plugin.livestream.widget_livestream_all}}',
            ),    
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'all',
                ),
            ),
            'active' => true, // сделать вкладку активной (true, false)
        ),
        'follow' => array(
            'text' => array (
                '{{plugin.livestream.widget_livestream_follow}}', 
            ),    
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'follow',
                ),
            ),
            'active' => false, // сделать вкладку активной (true, false)
        ), 
        'comment' => array(
            'text' => array (
                '{{plugin.livestream.widget_livestream_comments}}',
            ),    
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'comment',
                ),
            ),
            'active' => false, // сделать вкладку активной (true, false)
        ),  
        'topic' => array(
            'text' => array (
                '{{plugin.livestream.widget_livestream_topics}}', 
            ),  
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'topic',
                ),
            ),
            'active' => false, // сделать вкладку активной (true, false)
        ),
    )
);

/**
 *  Меню авторизированного пользователя (выводим две вкладки: Весь эфир и Я слежу (текст))
 */
$config['data']['livestream_items'] = array(
    'class' => 'js-widget-stream-navs',
    'init'        => array(
        'fill' => array(
            'list' => array('*'),
        ),
    ),
    
    'list' => array(
        'all' => array(
            'text' => array (
                '{{plugin.livestream.widget_livestream_all}}',
            ),    
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'all',
                ),
            ),
            'active' => true, // сделать вкладку активной (true, false)
        ),
        'follow' => array(
            'text' => array (
                '{{plugin.livestream.widget_livestream_follow}}', 
            ),    
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'follow',
                ),
            ),
            'active' => false, // сделать вкладку активной (true, false)
        ), 
    )
);

/**
 *  Меню авторизированного пользователя (выводим иконки вместо текста)
 */
$config['data']['livestream_icons'] = array(
    'class' => 'js-widget-stream-navs',
    'init'        => array(
        'fill' => array(
            'list' => array('*'),
        ),
    ),
    
    'list' => array(
        'all' => array(
            'text' => array (
                '<i class="fa fa-flag-o"></i>'
            ),    
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'all',
                ),
                'data' => array(
                'toggle' => 'tooltip',
                'container' => 'body',
                'placement' => 'top',
                'original-title' => 'Весь эфир',
                ),
            ),
            'active' => true, // сделать вкладку активной (true, false)
        ),
        'follow' => array(
            'text' => array (
                '<i class="fa fa-star-o"></i>'
            ),    
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'follow',
                ),
                'data' => array(
                'toggle' => 'tooltip',
                'container' => 'body',
                'placement' => 'top',
                'original-title' => 'Я слежу',
                ),
            ),
            'active' => false, // сделать вкладку активной (true, false)
        ), 
        'comment' => array(
            'text' => array (
                '<i class="fa fa-comments-o"></i>'
            ),    
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'comment',
                ),
                'data' => array(
                'toggle' => 'tooltip',
                'container' => 'body',
                'placement' => 'top',
                'original-title' => 'Комментарии',
                ),
            ),
            'active' => false, // сделать вкладку активной (true, false)
        ),  
        'topic' => array(
            'text' => array (
                '<i class="fa fa-pencil-square-o"></i>'
            ),  
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'topic',
                ),
                'data' => array(
                'toggle' => 'tooltip',
                'container' => 'body',
                'placement' => 'top',
                'original-title' => 'Публикации',
                ),
            ),
            'active' => false, // сделать вкладку активной (true, false)
        ),
    )
);

/**
 *  Меню авторизированного пользователя (выводим две вкладки: Весь эфир и Я слежу (иконки))
 */
$config['data']['livestream_show_icons'] = array(
    'class' => 'js-widget-stream-navs',
    'init'        => array(
        'fill' => array(
            'list' => array('*'), // сделать вкладку активной (true, false)
        ),
    ),
    
    'list' => array(
        'all' => array(
            'text' => array (
                '<i class="fa fa-flag-o"></i>'
            ),    
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'all',
                ),
                'data' => array(
                'toggle' => 'tooltip',
                'container' => 'body',
                'placement' => 'top',
                'original-title' => 'Весь эфир',
                ),
            ),
            'active' => true, // сделать вкладку активной (true, false)
        ),
        'follow' => array(
            'text' => array (
                '<i class="fa fa-star-o"></i>'
            ),    
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'follow',
                ),
                'data' => array(
                'toggle' => 'tooltip',
                'container' => 'body',
                'placement' => 'top',
                'original-title' => 'Я слежу',
                ),
            ),
            'active' => false, // сделать вкладку активной (true, false)
        ), 
    )
);

/**
 *  Меню НЕ авторизированного пользователя
 */
$config['data']['livestream_menu'] = array(
    'class' => 'js-widget-stream-navs',
    'init'        => array(
        'fill' => array(
            'list' => array('*'),
        ),
    ),
    
    'list' => array(
        'all' => array(
            'text' => '{{plugin.livestream.widget_livestream_all}}', 
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'all',
                ),
            ),
            'active' => true, // сделать вкладку активной (true, false)
        ),
        'comment' => array(
            'text' => '{{plugin.livestream.widget_livestream_comments}}', 
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'comment',
                ),
            ),
            'active' => false, // сделать вкладку активной (true, false)
        ),  
        'topic' => array(
            'text' => '{{plugin.livestream.widget_livestream_topics}}', 
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'topic',
                ),
            ),
            'active' => false, // сделать вкладку активной (true, false)
        ),
    )
);

/**
 *  Меню НЕ авторизированного пользователя (выводим одну вкладку: Весь эфир (текст))
 */
$config['data']['livestream_menu_items'] = array(
    'class' => 'js-widget-stream-navs',
    'init'        => array(
        'fill' => array(
            'list' => array('*'),
        ),
    ),
    
    'list' => array(
        'all' => array(
            'text' => '{{plugin.livestream.widget_livestream_all}}', 
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'all',
                ),
            ),
            'active' => true, // сделать вкладку активной (true, false)
        ),
    )
);


/**
 *  Меню НЕ авторизированного пользователя (выводим иконки вместо текста)
 */
$config['data']['livestream_menu_icons'] = array(
    'class' => 'js-widget-stream-navs',
    'init'        => array(
        'fill' => array(
            'list' => array('*'),
        ),
    ),
    
    'list' => array(
        'all' => array(
            'text' => array (
                '<i class="fa fa-flag-o"></i>'
            ),    
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'all',
                ),
                'data' => array(
                'toggle' => 'tooltip',
                'container' => 'body',
                'placement' => 'top',
                'original-title' => 'Весь эфир',
                ),
            ),
            'active' => true, // сделать вкладку активной (true, false)
        ),
        'comment' => array(
            'text' => array (
                '<i class="fa fa-comments-o"></i>'
            ),    
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'comment',
                ),
                'data' => array(
                'toggle' => 'tooltip',
                'container' => 'body',
                'placement' => 'top',
                'original-title' => 'Комментарии',
                ),
            ),
            'active' => false, // сделать вкладку активной (true, false)
        ),  
        'topic' => array(
            'text' => array (
                '<i class="fa fa-pencil-square-o"></i>'
            ),  
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'topic',
                ),
                'data' => array(
                'toggle' => 'tooltip',
                'container' => 'body',
                'placement' => 'top',
                'original-title' => 'Публикации',
                ),
            ),
            'active' => false, // сделать вкладку активной (true, false)
        ),
    )
);

/**
 *  Меню НЕ авторизированного пользователя (выводим одну вкладку: Весь эфир (иконка))
 */
$config['data']['livestream_menu_show_icons'] = array(
    'class' => 'js-widget-stream-navs',
    'init'        => array(
        'fill' => array(
            'list' => array('*'),
        ),
    ),
    
    'list' => array(
        'all' => array(
            'text' => array (
                '<i class="fa fa-flag-o"></i>'
            ),    
            'link'    => '#',
            'options' => array(
                'link_class' => 'link link-lead link-clear link-dark',
                'link_data' => array(
                    'toggle' => 'tab',
                    'type' => 'all',
                ),
                'data' => array(
                'toggle' => 'tooltip',
                'container' => 'body',
                'placement' => 'top',
                'original-title' => 'Весь эфир',
                ),
            ),
            'active' => true, // сделать вкладку активной (true, false)
        ),  
    )
);