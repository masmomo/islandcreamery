function submitForm() {
	
	/*if (document.getElementById("action").value=="save_order") {*/
	
    var list = document.getElementById("sortable");
	var items = list.getElementsByTagName("li");
	var itemIDs = "";
	    for (var i = 0; i < items.length; i++) {
			var j = i*1+1;
	        document.getElementById("order_"+j).value = items[i].getAttribute("list_id");
		}			
		
	document.getElementById("display_form").submit();
}