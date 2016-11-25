$(document).ready(function() {
	$(".fl_select").click(function(){
		$(this).toggleClass('active');
	});

	$(".menu_btn, .close_menu").click(function(){
		$(".tm_wr").toggleClass("active");
	});

	$(".kk_it").click(function(){
		$(this).toggleClass('active');
	});

	$(".rm").click(function(){
		$(this).toggleClass('active');
		$("html").toggleClass("ovh");
		$(".right_cont").toggleClass('active');
	});

	$(".fpr_it").click(function(){
		$(this).closest(".fil_pr").find(".fpr_it").removeClass("active");
		$(this).addClass('active');
	});

	$(".hs_wr").click(function(e){e.stopPropagation();});

	$('.zast_sl').slick({
		infinite: true,
		slidesToShow: 3,
		responsive: [
		{
			breakpoint: 720,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true
			}
		}
		]
	});

	$(".scroll_cont").customScrollbar({
		skin: "default-skin", 
		hScroll: false,
		updateOnWindowResize: true
	});

	$(".rmb_tit.list").click(function(){
		$(this).toggleClass("active");
		$(this).closest(".rm_bl").find('.rmb_wr').toggleClass("active");
	});

	$(".rmb_par.list").click(function(){
		$(this).toggleClass("active");
		$(this).closest(".rmb_it").find('.rmb_wr2').toggleClass("active");
	});

	$(".rmb2_par.list").click(function(){
		$(this).toggleClass("active");
		$(this).closest(".rmb_it2").find('.rmb_wr3').toggleClass("active");
		$(".scroll_cont").customScrollbar("resize", true);
	});

	$(".rmb3_item").click(function(){
		$(this).toggleClass("active");
	});

	$(window).scroll(function () {
		if ($(this).scrollTop() > 0) {
			$('#scroller').fadeIn();
		} else {
			$('#scroller').fadeOut();
		}
	});

	$('#scroller').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 400);
		return false;
	});

	$(".gomod").click(function(e){
		e.stopPropagation();
		e.preventDefault();
		$(".topmod").css('display', 'none');
		var mod = $(this).attr("modal");
		$(".topmod[modal="+mod+"]").css('display', 'block');
		if($(".wrap").hasClass("mod")){}
			else {$(".wrap").addClass("mod");}
		$(".wrap.mod").click(function(){
			$(".topmod").css('display', 'none');
			$(this).removeClass("mod");
		});
	});
	$(".topmod").click(function(e){e.stopPropagation();});
	$(".closmod").click(function(){$(".topmod").css('display', 'none'); $(".wrap.mod").removeClass("mod");});

	$(".full_poisk").click(function(e){
		e.preventDefault();
		$(".tf_cont").toggleClass("active");
		$(".wr_top").toggleClass("active");
		$(".wr_top").toggleClass("noactive");
	});

	$(".sv_tab").click(function(){
		var tab = $(this).attr("tab");
		$(this).toggleClass("active");
		$(".par_row[tab="+tab+"]").toggleClass("active");
	});

	$(".com_read").click(function(e){
		e.preventDefault();
		$(this).toggleClass("active");
		$(this).closest(".comm_block").find(".comm_hide").toggleClass("active");
	});

	$(".jkm_it").click(function(){
		$(".jkm_it").removeClass("active");
		$(this).addClass("active");
	});

	$(".psl").slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 720,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true
			}
		}
		]
	});



});