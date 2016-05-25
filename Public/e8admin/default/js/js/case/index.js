// JavaScript Document
$(function(){
	$(".nav ul li:last").css("background","none");
		
	
	
	$(".works_list ul li").mouseover(function(){
		$(this).children(".img_hover").stop().animate({"opacity":"0"},300);
		$(this).siblings().children(".img_hover").stop().animate({"opacity":"1.0"},300);
		}).mouseleave(function(){
			$(this).children(".img_hover").stop().animate({"opacity":"1.0"},300);
			});
	
	$(".case_list ul li a").mouseover(function(){
		$(this).children(".img_hover").css("display","block");
		$(this).children(".img_hover").stop().animate({"opacity":"1"},300);
		$(this).siblings().children(".img_hover").stop().animate({"opacity":"1.0"},300);
		}).mouseleave(function(){
			$(this).children(".img_hover").stop().animate({"opacity":"0"},300);
			});
			
	$(".Under_company_li a").mouseover(function(){
		$(this).children(".Under_company_pic").children(".conpany_hover").css("display","block");
		$(this).siblings().children(".Under_company_pic").children(".conpany_hover").css("display","none");
		}).mouseleave(function(){
			$(this).children(".Under_company_pic").children(".conpany_hover").css("display","none");
			});
			
			
			
	$(".logo").each(function(){ 
		$(this).find("img").eq(1).hide();						 
	});
	$(".logo").hover(function(){
		$(this).find("img").eq(0).hide();
		$(this).find("img").eq(1).show();

		},function(){
		$(this).find("img").eq(1).hide();
		$(this).find("img").eq(0).show();                        
		});
		
	//banner 按钮效果
	
	//$(".rjkf_banner a")
	$(".rjkf_banner a").stop().animate({"left":"50%","opacity":"1.0"},800);
	$(window).scroll(function(){
	
	if($(".rjkf_banner").length > 0){
		if( $(document).scrollTop() > 400 ){
			$(".rjkf_banner a").stop().animate({"left":"-100%","opacity":".1"},800);
		}else{
			$(".rjkf_banner a").stop().animate({"left":"50%","opacity":"1.0"},800);
		}
	}	

	// if($(".rjkf_banner").length > 0){
		// if($(window).height() + $(window).scrollTop() - $(".rjkf_banner").offset().top > 100 && $(window).height() + $(window).scrollTop() - $(".rjkf_banner").offset().top < $(window).height() -50){
			// $(".rjkf_banner a").stop().animate({"left":"50%","opacity":"1.0"},800);
		// }else{
			// $(".rjkf_banner a").stop().animate({"left":"-100%","opacity":".1"},800);
		// }
	// }	

	
	
	});
	
	$(function(){
		$(".in_banner").hover(function(){
			$(".slide_left",this).stop().animate({"left":"0"},300)
			$(".slide_right",this).stop().animate({"right":"0"},300)
		},function(){
			$(".slide_left",this).stop().animate({"left":"-50px"},300)
			$(".slide_right",this).stop().animate({"right":"-50px"},300)
		})
	});

	
	//pop close
	//$(".my_close").click(function(){
//		$("#xubox_layer1,#xubox_shade1").hide();
//		});

$(function(){
	$(".link_weixin_li").hover(function(){
		$(".link_weixin_ewm",this).stop().animate({"height":"138px"},300);
	},function(){
		$(".link_weixin_ewm",this).stop().animate({"height":"0"},300)
	})
});

/*progress*/
$(function(){
	// $("#services_ul li").hover(function(){
		// $(".services_ico div",this).stop().animate({"opacity":"1"},300);
	// },function(){
		// $(".services_ico div",this).stop().animate({"opacity":"0"},300);
	// })
	$(".progress").mousemove(function(e) {
		if($(window).width() > $(this).width()){
			var leftWidth = ($(window).width() - $(this).width())/2;
		}else{
			var leftWidth = 0;
		}
		var offset=e.clientX - leftWidth;
		var x=0;
		var y=0;
		$(".progress_dl",this).css({"margin-left": -( ($(".progress_dl",this).width() - $(this).width()) / $(this).width())*offset +"px"});
	});
	// $(".services_popclose").click(function(){
		// $(this).parents("#services_pop").slideUp(200);
	// })
});
//progress .time_show
$(function(){
	var all_show = $(".time_show"),all_icon = $("em.time_icon");
	
	$("span.time").hover(function(){
		all_show.hide();
		all_icon.hide();
		$(this).siblings(".time_show").show();
		$(this).find("em.time_icon").show();
		
	});
});

//be_find
// $(function(){
	// var $be_find=$(".be_find");
	// $(".header_icon").click(function(){
		// $be_find.stop().slideDown(500);
	// });
	// $(".find_close").click(function(){
		// $be_find.stop().slideUp(500);
	// })
// });

// })

//be_find 最左侧菜单
$(function(){
	var $be_find=$(".be_find");
	var $body_me=$("body");
	var $header_me=$(".header");
	$(".header_icon").click(function(){
		$body_me.addClass("main_me");
		$body_me.animate({right:"280px"},300);
		$header_me.animate({right:"280px"},300);
		$be_find.animate({right:"0"},300);
		
	});
	
	$(".find_close").click(function(){
		 $body_me.animate({right:"0"},300);
		 $header_me.animate({right:"0"},300);
		 $be_find.animate({right:"-280px"},300);
	 })
});
	
	});