var pagination = {
	page: 1,
	country:null,
	getFriends: function (callback){
		if(pagination.country == null){
			pagination.country = $('#country').find(":selected").val();
		}
		
		$.ajax({
	            url : location.href+'/suggestions'+'?page=' + pagination.page+"&country="+pagination.country,
	            dataType: 'json',
	        }).done(function (data) {
	        	$('.msg').remove();
	        	if(data.next_page_url != null){
	        		pagination.showFriends(callback(data.data));
	          		pagination.page++;
	          		
	          		$('#searchFriends').attr('value','Намери още приятели');
	          		$('#country').hide();
	          		
	        	}else{
	        		if(data.data.lenght > 0){
	          			$('#searchFriends').hide();
	          			$('#country').hide();
	          		}else{
	          			$('#friends').html("<p class='msg'>Няма предложения за пириятелство!</p>");
	          			pagination.country = null;
	          		}
	        		
	        	}
	           
	        }).fail(function () {
	            console.log('connot load')
	        });
	},

	showFriends: function (data){
	  for(i in data){
	  	$('#friends').append("<li>Name:<b>"+data[i].real_name+"</b> Email: <b>"+data[i].email+"</b>Country: <b>"+data[i].lang.country_name+"</b></li>")
	  }
	}
}
