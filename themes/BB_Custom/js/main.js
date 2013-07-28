var bbjq = jQuery.noConflict();

bbjq(function(){
	bbjq('html').removeClass('no-js');
	bbjq( "#tabs" ).tabs();
	bbjq('#menu-header').addClass('menu-primary clearfix');
	bbjq('#menu-footer').addClass('menu-foot clearfix');
	bbjq('.screen-reader-text').addClass('visuallyhidden');
	bbjq('#s').addClass('top-search-text');
	bbjq(".widget li").click(function(){
     window.location=bbjq(this).find("a").attr("href");
     return false;
	});

	bbjq("#sidr-menu").sidr();

});