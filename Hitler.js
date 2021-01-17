function submit() {

  	value = document.getElementById("commentInput").value;
  	document.getElementById("list").append("<li>" + value +"</li>");

    // $('#list').append('<li>'+value+'</li>'); 
};

// $(document).on('click', 'li', function () { $(this).remove(); });