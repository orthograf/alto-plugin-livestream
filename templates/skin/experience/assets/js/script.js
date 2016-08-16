/**
* Плагин LiveStream v.0.2 для AltoCMS
* Widgets
*/

ls.widgets.options.type.stream_all = {
    url: ls.routerUrl('ajax') + 'livestream/all/'
};
ls.widgets.options.type.stream_comment = {
    url: ls.routerUrl('ajax') + 'livestream/comment/'
};
ls.widgets.options.type.stream_topic = {
    url: ls.routerUrl('ajax') + 'livestream/topic/'
};
ls.widgets.options.type.stream_follow = {
    url: ls.routerUrl('ajax') + 'livestream/follow/'
};


// EOF
