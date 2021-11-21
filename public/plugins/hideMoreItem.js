(function($){
    $.fn.extend({
        hideMore: function(options) {
            var defaults = {
				liHig:0,
				show:0,
				myMore:null,
				txt_hide:"hide",
				txt_show:"expand"
            };
             
            var options = $.extend(defaults, options);
            return this.each(function() {
                var o =options;
                var obj = $(this);
				 down(obj)
				 function down(_obj){
				 	var txtHide = o.txt_hide;
				 	var txtShow = o.txt_show;
				 	var totalItem = _obj.find("li").length;
				 					 					 	
				 	_obj.css("height",o.liHig * o.show);
				 	o.myMore.html(txtShow);
				 	
				 	if(totalItem <= o.show){
						o.myMore.addClass("dpNone"); 	
				 	}else{
						o.myMore.click(function(){
							if(o.myMore.html() == txtShow){
								_obj.css("height",o.liHig * totalItem); 	
								o.myMore.text(txtHide); 		
							}else{
								_obj.css("height",o.liHig * o.show); 	
								o.myMore.text(txtShow); 	
							}
							
					 	}) 	
				 	}				 
				 }                                                                  
            });
        }
    });
})(jQuery);