<?php
/*
*   config.php
*   Файл конфигурационных параметров плагина LiveStream v.0.2
*
*   Идея: LSP-GoStream (goweb.pro)
*   Модернизация и адаптация плагина для AltoCMS: Orthograf
*   Для связи: support@orthograf.ru
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
*/

/**
 * Параметры плагина
 */
$aConfig = array(
    /*
     * Показывать все вкладки навигации (true - да, false - нет)?
     *   Свойства:
     *       true - Комментарии, Публикации, Вевсь эфир и Я слежу (последнее видно только авторизированным пользователям)
     *       false - Вевсь эфир и Я слежу (последнее видно только авторизированным пользователям)
     */
     'show_items' => 'true',
     
     /*
     * Показывать иконки вкладок вместо текста (true - да, false - нет)?
     *   Свойства:
     *       true - Показывать текст (настраивается в языковом файле /language/ru.php)
     *       false - Поазывать иконки (<i class="fa fa-..."></i>)
     * Внимание: Возможность использования данной функции в шаблоне Start Kit на данный момент не реализована
     */
     'hide_icons' => 'true',
    
    /*
     * Страницы на которых нужно отображать Виджет
     * Настройки берутся из главного конфига виджета "Прямой эфир" common/config/widgets.php
     */
    'widget_stream_pages' => array(
        //'index',
    ),
    
    /*
     * Страницы на которых НЕ нужно отображать Виджет
     * Настройки берутся из главного конфига виджета "Прямой эфир" common/config/widgets.php
     */
    'widget_pages_off' => array(
        //'profile',
    ),
    
);

$aConfig['widgets']['stream'] = array(
    'action' => $aConfig['widget_stream_pages'],
    'off' => $aConfig['widget_pages_off']
);

return $aConfig;

//EOF
