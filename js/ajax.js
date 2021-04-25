$( document ).ready(function() {
    $("#btn").click(
		function(){
			sendAjaxForm('result_form', 'ajax_form', '../send.php');
			return false; 
		}
	);
});
 
function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, 
        type:     "POST", 
        dataType: "html", 
        data: $("#"+ajax_form).serialize(), 
        success: function(response) { 
        	$('#result_form').html('<form class="form" action="send.php" method="POST"><p>Мы вам перезвоним.</p></form>');
            $('#ajax_form').css('display', 'none');
    	},
    	error: function(response) { 
            $('#ajax_form').css('display', 'none');
            $('#result_form').html('<form class="form" action="send.php" method="POST"><p>Ошибка. Данные не отправились.</p></form>');
    	}
 	});
}