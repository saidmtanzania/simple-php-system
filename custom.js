$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
		var email=$('#email'+id).text();
		var first=$('#firstname'+id).text();
		var last=$('#lastname'+id).text();
		var post=$('#position'+id).text();
		var salary=$('#salary'+id).text();
 
		$('#edit').modal('show');
		$('#F1').val(id);
		$('#F2').val(email);
		$('#F3').val(first);
		$('#F4').val(last);
		$('#F5').val(post);
		$('#F6').val(salary);
	});
});
