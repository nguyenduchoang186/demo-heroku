$(document).ready(function() {
	$('#delete').click(function(event) {
		$.post(base_url()'Admin_controller/delete_account', {id: $('#id').val()}, function() {
			alert(id);
		});
	});
});

function deleteRow(r) {
  var i = r.parentNode.parentNode.rowIndex;
  document.getElementById("myTable").deleteRow(i);
  alert(i);
}