$(function() {
	var scene_nav = $(".scene-nav-inner"),
		scene_array = $(".scene-array"),
		scene_left = $(".scene-left"),
		scene_right = $(".scene-right");
	scene_nav.css("width","1680px");

	var lnum = 0,
		rnum = scene_array.length - 4;
	scene_left.click(function() {
		if(lnum < 1) {
			return false;
		}
		lnum--;
		rnum++;
		scene_nav.animate({left:'+=210px'},1000);
	});
	scene_right.click(function() {
		if(rnum < 1) {
			return false;
			// scene_nav.animate({left:'1680px'},1000);
		}
		rnum--;
		lnum++;
		scene_nav.animate({left:'-=210px'},1000);
	});
});

$(function() {
var li_first = $("#line3 ul.campus-menu li:first-child"),
	    li_first2 = $("#line3 ul.volunteer-menu li:first-child"),
	    content = $("#line3 .campus-details"),
	    content2 = $("#line3 .volunteer-details"),
	    layout = $("#line3 .campus-layout"),
	    layout2 = $("#line3 .volunteer-layout"),
	    li_array = $("#line3 ul.campus-menu li"),
	    li_array2 = $("#line3 ul.volunteer-menu li");
	    
	li_first.addClass("current");
	li_first2.addClass("current");
	content.find(".campus-layout:not(:first-child)").hide();
	content2.find(".volunteer-layout:not(:first-child)").hide();

	layout.attr("id", function(){
		var linumber = idNumber("campus") + layout.index(this);
		return linumber;
	});
	layout2.attr("id", function(){
		var linumber = idNumber("volunteer") + layout2.index(this);
		return linumber;
	});

	li_array.click(function(){
	    var li = li_array;
	    var index = li.index(this);
	    var number = idNumber("campus");
	    show(li,index,number);
	});
	li_array2.click(function(){
	    var li = li_array2;
	    var index = li.index(this);
	    var number = idNumber("volunteer");
	    show(li,index,number);
	});

	function show(menu_li,menu_index,menu_number){
	    var content= menu_number + menu_index;
	    $('#'+content).show().siblings().hide();
	    menu_li.eq(menu_index).addClass("current").siblings().removeClass("current");
	};

	function idNumber(prefix){
	   var idNum = prefix;
	   return idNum;
	};
});