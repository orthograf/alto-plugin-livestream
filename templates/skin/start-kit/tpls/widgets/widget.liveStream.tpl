<section class="panel panel-default widget widget-type-stream">
    <div class="panel-body">
	
	<script>
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
        // удаляем класс active у вкладок при переходе на следующую  
            $(".panel-navigation ul li a").click(function() {
            $(".panel-navigation ul li a").removeClass("active");         
            $(this).toggleClass("active");
         })
    });
    </script>	
    
        <header class="widget-header">
            <h3 class="widget-title">
                <a href="{router page='comments'}" title="{$aLang.widget_stream_comments_all}">{$aLang.widget_stream}</a>
            </h3>
        </header>
        <div class="widget-content">
            <div class="panel-navigation">
					{if E::IsUser()}
						{* Показывать все вклвдки *}
						{if Config::Get('plugin.livestream.show_items') == 'true'}
							{* Ткст либо иконки *}
							{if Config::Get('plugin.livestream.hide_icons') == 'true'}
								{menu id='livestream'}
							 {else}  
								{menu id='livestream_icons'}
							{/if}   
						{* Не показывать все вклвдки *}
						{else}
							 {* Текст либо иконки *}
							 {if Config::Get('plugin.livestream.hide_icons') == 'true'}
								{menu id='livestream_items'}
							{else}
								{menu id='livestream_show_icons'}
							{/if}
						{/if}
					{else}  
						{* Показать все вклвдки *}
						{if Config::Get('plugin.livestream.show_items') == 'true'}
							{* Текст либо иконки *}
							{if Config::Get('plugin.livestream.hide_icons') == 'true'}
								{menu id='livestream_menu'}
							{else} 
								{menu id='livestream_menu_icons'}
							{/if} 
						{* Не показывать все вклвдки *}
						{else}
							{* Ткст либо иконки *}
							{if Config::Get('plugin.livestream.hide_icons') == 'true'}
								{menu id='livestream_menu_items'}
							{else}
								{menu id='livestream_menu_show_icons'}
							{/if}	
						{/if}	
					{/if}    
                {hook run='widget_stream_nav_item'}
			</div>
            <div class="widget-content-body js-widget-stream-content">
            </div>
        </div>
    </div>
</section>