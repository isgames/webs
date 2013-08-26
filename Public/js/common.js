$(function(){
	$('.category').children('span').click(function(){
		$(this).siblings('ul').toggle();
	});
});

$(function(){
	var localhref =document.location.href;
	var flag =localhref.match("/index.php/");
	if(flag ==null){
			$("#mypicture").show();
			setTimeout(function(){$("#mypicture").hide();},2000);
	}
	
});
/*
function paper(id){
    $.ajax({
        type: "POST",
        data:"id="+id,
        url: "paper",
        async: true,
        dataType: "json",
        success:function(data){
            var xz = data.xz;
            var tk = data.tk;
            var wd = data.wd;
            var center = $('.center');
        }
    });
}
*/
