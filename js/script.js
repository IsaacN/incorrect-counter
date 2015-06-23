$(document).ready(function(){
	$('.add').click(function(){
		var positionWhole = ($(this).attr('class').split(' ')[1]);
		var pattern = /[0-9]+/g;
		var matches = positionWhole.match(pattern);
		//gets position number of user
		var commenter_id = ($(this).attr('class').split(' ')[2]);
		load_popup(commenter_id);

	});
	$('.name').mouseenter(function(){
		var className = $(this).attr('class').split(' ')[1];
		$('.add.'+className).fadeIn(100);
	});
	$('.scorebox').mouseleave(function(){
		var className = $(this).find('.add').attr('class').split(' ')[1];
		$('.add.'+className).fadeOut(100);
	});
	

	function load_popup(commenter_id)
	{
		$.ajax({
           url : 'popup.php',
           type: "POST",
           data : {},
           success : function(data,textStatus,jqHXR)
           {
               bootbox.dialog({
	            message : data,
	            title : 'Add Comment',
	            buttons:
	            {
	                success: 
	                {
	                    label: "Add",
	                    className: "btn-primary",
	                    callback: function() {
		                    var comment = $('#comment').val();
							var reporter = $('#reporter').val();
		                    if (comment.trim() == '' || reporter == 'none')
		                    {
		                    	console.log('Incomplete Details');
	                    		return false;
		                    }
		                    else
		                    {
		                    	submit_comment(commenter_id);
		                    }
	                    }
	                },
	                'Cancel':
	                {
	                	className: "btn-danger",
	                }
	            }
	          });
           }
        });
	}

	function submit_comment(commenter_id)
	{
		var comment = $('#comment').val();
		var reporter = $('#reporter').val();
		$.ajax({
           url : 'popupsubmit.php',
           type: "POST",
           data : {comment:comment,reporter:reporter,commenter_id:commenter_id},
           success : function(data,textStatus,jqHXR)
           {
           		update_data();
           }
       });
	}

});