jQuery(function($){
		function layer_open_1(el){
			//$('.subdiv_1').addClass('open');
			$('.subdiv_1').fadeIn();
			var temp_1 = $('#' + el);
			if (temp_1.outerHeight() < $(document).height() ) temp_1.css('margin-top', '-'+temp_1.outerHeight()/2+'px');
			else temp_1.css('top', '0px');
			if (temp_1.outerWidth() < $(document).width() ) temp_1.css('margin-left', '-'+temp_1.outerWidth()/2+'px');
			else temp_1.css('left', '0px');
		}
		$('#layer_open_1').click(function(){
			layer_open_1('layer_1'); /* 열고자 하는 것의 아이디를 입력 */
			return false;
		});
		$('.subdiv_1 .bg_1').click(function(){
			$('.subdiv_1').fadeOut();
		});
		$('#layer_close_1').click(function(){
			$('.subdiv_1').fadeOut();
			return false;
		});
		function layer_open_2(el){
			//$('.subdiv_2').addClass('open');
			$('.subdiv_2').fadeIn();
			var temp_2 = $('#' + el);
			if (temp_2.outerHeight() < $(document).height() ) temp_2.css('margin-top', '-'+temp_2.outerHeight()/2+'px');
			else temp_2.css('top', '0px');
			if (temp_2.outerWidth() < $(document).width() ) temp_2.css('margin-left', '-'+temp_2.outerWidth()/2+'px');
			else temp_2.css('left', '0px');
		}
		$('#layer_open_2').click(function(){
			layer_open_2('layer_2'); /* 열고자 하는 것의 아이디를 입력 */
			return false;
		});
		$('.subdiv_2 .bg_2').click(function(){
			$('.subdiv_2').fadeOut();
		});
		$('#layer_close_2').click(function(){
			$('.subdiv_2').fadeOut();
			return false;
		});
		function layer_open_3(el){
			//$('.subdiv_3').addClass('open');
			$('.subdiv_3').fadeIn();
			var temp_3 = $('#' + el);
			if (temp_3.outerHeight() < $(document).height() ) temp_3.css('margin-top', '-'+temp_3.outerHeight()/2+'px');
			else temp_3.css('top', '0px');
			if (temp_3.outerWidth() < $(document).width() ) temp_3.css('margin-left', '-'+temp_3.outerWidth()/2+'px');
			else temp_3.css('left', '0px');
		}
		$('#layer_open_3').click(function(){
			layer_open_3('layer_3'); /* 열고자 하는 것의 아이디를 입력 */
			return false;
		});
		$('.subdiv_3 .bg_3').click(function(){
			$('.subdiv_3').fadeOut();
		});
		$('#layer_close_3').click(function(){
			$('.subdiv_3').fadeOut();
			return false;
		});
		function layer_open_4(el){
			//$('.subdiv_4').addClass('open');
			$('.subdiv_4').fadeIn();
			var temp_4 = $('#' + el);
			if (temp_4.outerHeight() < $(document).height() ) temp_4.css('margin-top', '-'+temp_4.outerHeight()/2+'px');
			else temp_4.css('top', '0px');
			if (temp_4.outerWidth() < $(document).width() ) temp_4.css('margin-left', '-'+temp_4.outerWidth()/2+'px');
			else temp_4.css('left', '0px');
		}
		$('#layer_open_4').click(function(){
			layer_open_4('layer_4'); /* 열고자 하는 것의 아이디를 입력 */
			return false;
		});
		$('.subdiv_4 .bg_4').click(function(){
			$('.subdiv_4').fadeOut();
		});
		$('#layer_close_4').click(function(){
			$('.subdiv_4').fadeOut();
			return false;
		});
		function layer_open_5(el){
			//$('.subdiv_5').addClass('open');
			$('.subdiv_5').fadeIn();
			var temp_5 = $('#' + el);
			if (temp_5.outerHeight() < $(document).height() ) temp_5.css('margin-top', '-'+temp_5.outerHeight()/2+'px');
			else temp_5.css('top', '0px');
			if (temp_5.outerWidth() < $(document).width() ) temp_5.css('margin-left', '-'+temp_5.outerWidth()/2+'px');
			else temp_5.css('left', '0px');
		}
		$('#layer_open_5').click(function(){
			layer_open_5('layer_5'); /* 열고자 하는 것의 아이디를 입력 */
			return false;
		});
		$('.subdiv_5 .bg_5').click(function(){
			$('.subdiv_5').fadeOut();
		});
		$('#layer_close_5').click(function(){
			$('.subdiv_5').fadeOut();
			return false;
		});
		function layer_open_6(el){
			//$('.subdiv_6').addClass('open');
			$('.subdiv_6').fadeIn();
			var temp_6 = $('#' + el);
			if (temp_6.outerHeight() < $(document).height() ) temp_6.css('margin-top', '-'+temp_6.outerHeight()/2+'px');
			else temp_6.css('top', '0px');
			if (temp_6.outerWidth() < $(document).width() ) temp_6.css('margin-left', '-'+temp_6.outerWidth()/2+'px');
			else temp_6.css('left', '0px');
		}
		$('#layer_open_6').click(function(){
			layer_open_6('layer_6'); /* 열고자 하는 것의 아이디를 입력 */
			return false;
		});
		$('.subdiv_6 .bg_6').click(function(){
			$('.subdiv_6').fadeOut();
		});
		$('#layer_close_6').click(function(){
			$('.subdiv_6').fadeOut();
			return false;
		});
		function layer_open_7(el){
			//$('.subdiv_7').addClass('open');
			$('.subdiv_7').fadeIn();
			var temp_7 = $('#' + el);
			if (temp_7.outerHeight() < $(document).height() ) temp_7.css('margin-top', '-'+temp_7.outerHeight()/2+'px');
			else temp_7.css('top', '0px');
			if (temp_7.outerWidth() < $(document).width() ) temp_7.css('margin-left', '-'+temp_7.outerWidth()/2+'px');
			else temp_7.css('left', '0px');
		}
		$('#layer_open_7').click(function(){
			layer_open_7('layer_7'); /* 열고자 하는 것의 아이디를 입력 */
			return false;
		});
		$('.subdiv_7 .bg_7').click(function(){
			$('.subdiv_7').fadeOut();
		});
		$('#layer_close_7').click(function(){
			$('.subdiv_7').fadeOut();
			return false;
		});
		function layer_open_8(el){
			//$('.subdiv_8').addClass('open');
			$('.subdiv_8').fadeIn();
			var temp_8 = $('#' + el);
			if (temp_8.outerHeight() < $(document).height() ) temp_8.css('margin-top', '-'+temp_8.outerHeight()/2+'px');
			else temp_8.css('top', '0px');
			if (temp_8.outerWidth() < $(document).width() ) temp_8.css('margin-left', '-'+temp_8.outerWidth()/2+'px');
			else temp_8.css('left', '0px');
		}
		$('#layer_open_8').click(function(){
			layer_open_8('layer_8'); /* 열고자 하는 것의 아이디를 입력 */
			return false;
		});
		$('.subdiv_8 .bg_8').click(function(){
			$('.subdiv_8').fadeOut();
		});
		$('#layer_close_8').click(function(){
			$('.subdiv_8').fadeOut();
			return false;
		});
		function layer_open_9(el){
			//$('.subdiv_9').addClass('open');
			$('.subdiv_9').fadeIn();
			var temp_9 = $('#' + el);
			if (temp_9.outerHeight() < $(document).height() ) temp_9.css('margin-top', '-'+temp_9.outerHeight()/2+'px');
			else temp_9.css('top', '0px');
			if (temp_9.outerWidth() < $(document).width() ) temp_9.css('margin-left', '-'+temp_9.outerWidth()/2+'px');
			else temp_9.css('left', '0px');
		}
		$('#layer_open_9').click(function(){
			layer_open_9('layer_9'); /* 열고자 하는 것의 아이디를 입력 */
			return false;
		});
		$('.subdiv_9 .bg_9').click(function(){
			$('.subdiv_9').fadeOut();
		});
		$('#layer_close_9').click(function(){
			$('.subdiv_9').fadeOut();
			return false;
		});
		function layer_open_10(el){
			//$('.subdiv_10').addClass('open');
			$('.subdiv_10').fadeIn();
			var temp_10 = $('#' + el);
			if (temp_10.outerHeight() < $(document).height() ) temp_10.css('margin-top', '-'+temp_10.outerHeight()/2+'px');
			else temp_10.css('top', '0px');
			if (temp_10.outerWidth() < $(document).width() ) temp_10.css('margin-left', '-'+temp_10.outerWidth()/2+'px');
			else temp_10.css('left', '0px');
		}
		$('#layer_open_10').click(function(){
			layer_open_10('layer_10'); /* 열고자 하는 것의 아이디를 입력 */
			return false;
		});
		$('.subdiv_10 .bg_10').click(function(){
			$('.subdiv_10').fadeOut();
		});
		$('#layer_close_10').click(function(){
			$('.subdiv_10').fadeOut();
			return false;
		});
		function layer_open_11(el){
			//$('.subdiv_11').addClass('open');
			$('.subdiv_11').fadeIn();
			var temp_11 = $('#' + el);
			if (temp_11.outerHeight() < $(document).height() ) temp_11.css('margin-top', '-'+temp_11.outerHeight()/2+'px');
			else temp_11.css('top', '0px');
			if (temp_11.outerWidth() < $(document).width() ) temp_11.css('margin-left', '-'+temp_11.outerWidth()/2+'px');
			else temp_11.css('left', '0px');
		}
		$('#layer_open_11').click(function(){
			layer_open_11('layer_11'); /* 열고자 하는 것의 아이디를 입력 */
			return false;
		});
		$('.subdiv_11 .bg_11').click(function(){
			$('.subdiv_11').fadeOut();
		});
		$('#layer_close_11').click(function(){
			$('.subdiv_11').fadeOut();
			return false;
		});
		function layer_open_12(el){
			//$('.subdiv_12').addClass('open');
			$('.subdiv_12').fadeIn();
			var temp_12 = $('#' + el);
			if (temp_12.outerHeight() < $(document).height() ) temp_12.css('margin-top', '-'+temp_12.outerHeight()/2+'px');
			else temp_12.css('top', '0px');
			if (temp_12.outerWidth() < $(document).width() ) temp_12.css('margin-left', '-'+temp_12.outerWidth()/2+'px');
			else temp_12.css('left', '0px');
		}
		$('#layer_open_12').click(function(){
			layer_open_12('layer_12'); /* 열고자 하는 것의 아이디를 입력 */
			return false;
		});
		$('.subdiv_12 .bg_12').click(function(){
			$('.subdiv_12').fadeOut();
		});
		$('#layer_close_12').click(function(){
			$('.subdiv_12').fadeOut();
			return false;
		});
		$(document).ready(function(){
		});
	});