// JavaScript Document
        $(document).ready(function () {
            $('div.box').hover(function(){
                $(this).find('div.animated').stop(true).animate({top:'0px'});
            },function(){
                $(this).find('div.animated').stop(true).animate({top:'-150px'});
            })
        })
