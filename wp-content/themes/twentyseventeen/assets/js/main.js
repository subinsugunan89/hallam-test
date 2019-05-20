

$(document).ready(function ($) {

	$(".order-cheezburger").on("click", function() {
	  $.colorbox.close();
	});

	function onPopupOpen() {
	  $("#modal-content").show();
	}

	function onPopupClose() {
	  $("#modal-content").hide();
	}

	function displayPopup() {
	  $.colorbox({
	    inline: true,
	    href: "#modal-content",
	    className: "cta",
	    width: 600,
	    height: 350,
	    onComplete: onPopupOpen,
	    onClosed: onPopupClose
	  });
	}


	$.ajax({
		url:site_data.ajax_url, //site_data.url,
		type: 'post',
		data: {
			action: 'get_quote'
		},
		success: function (response) {


			 $("#alert").text(response);


			displayPopup();
		}
	});

});