function edit_row(id)
{
 var name=document.getElementById("name_val"+id).innerHTML;
 var phone=document.getElementById("phone_val"+id).innerHTML;
  var carli=document.getElementById("carli_val"+id).innerHTML;
   var date=document.getElementById("date_val"+id).innerHTML;
    var mechanic=document.getElementById("mechanic_val"+id).innerHTML;

 document.getElementById("name_val"+id).innerHTML="<input type='text' id='name_text"+id+"' value='"+name+"'>";
 document.getElementById("phone_val"+id).innerHTML="<input type='text' id='phone_text"+id+"' value='"+phone+"'>";
 document.getElementById("carli_val"+id).innerHTML="<input type='text' id='carli_text"+id+"' value='"+carli+"'>";
 document.getElementById("date_val"+id).innerHTML="<input type='text' id='date_text"+id+"' value='"+date+"'>";
 document.getElementById("mechanic_val"+id).innerHTML="<input type='text' id='mechanic_text"+id+"' value='"+mechanic+"'>";

	
 document.getElementById("edit_button"+id).style.display="none";
 document.getElementById("save_button"+id).style.display="block";
}

function save_row(id)
{
 var name=document.getElementById("name_text"+id).value;
 var phone=document.getElementById("phone_text"+id).value;
 var carli=document.getElementById("carli_text"+id).value;
 var date=document.getElementById("date_text"+id).value;
 var mechanic=document.getElementById("mechanic_text"+id).value;
 
	
 $.ajax
 ({
  type:'post',
  url:'modify_records.php',
  data:{
   edit_row:'edit_row',
   row_id:id,
   name_val:name,
   phone_val:phone,
   carli_val:carli,
   date_val:date,
   mechanic_val:mechanic,
   
  },
  success:function(response) {
   if(response=="success")
   {
    document.getElementById("name_val"+id).innerHTML=name;
    document.getElementById("phone_val"+id).innerHTML=age;
	document.getElementById("carli_val"+id).innerHTML=name;
    document.getElementById("date_val"+id).innerHTML=age;
	document.getElementById("mechanic_val"+id).innerHTML=name;
   
    document.getElementById("edit_button"+id).style.display="block";
    document.getElementById("save_button"+id).style.display="none";
   }
  }
 });
}

function delete_row(id)
{
 $.ajax
 ({
  type:'post',
  url:'modify_records.php',
  data:{
   delete_row:'delete_row',
   row_id:id,
  },
  success:function(response) {
   if(response=="success")
   {
    var row=document.getElementById("row"+id);
    row.parentNode.removeChild(row);
   }
  }
 });
}

function insert_row()
{
 var name=document.getElementById("new_name").value;
 var phone=document.getElementById("new_phone").value;
 var carli=document.getElementById("new_carli").value;
 var date=document.getElementById("new_date").value;
 var mechanic=document.getElementById("mew_mechanic").value;
 

 $.ajax
 ({
  type:'post',
  url:'modify_records.php',
  data:{
   insert_row:'insert_row',
    name_val:name,
   phone_val:phone,
   carli_val:carli,
   date_val:date,
   mechanic_val:mechanic,
  },
  success:function(response) {
   if(response!="")
   {
    var id=response;
    var table=document.getElementById("client_info");
    var table_len=(table.rows.length)-1;
    var row = table.insertRow(table_len).outerHTML="<tr id='row"+id+"'><td id='name_val"+id+"'>"+name+"</td><td id='phone_val"+id+"'>"+phone+"</td><td id='carli_val"+id+"'>"+carli+"</td><td id='date_val"+id+"'>"+date+"</td><td id='mechanic_val"+id+"'>"+mechanic+"</td><td><input type='button' class='edit_button' id='edit_button"+id+"' value='edit' onclick='edit_row("+id+");'/><input type='button' class='save_button' id='save_button"+id+"' value='save' onclick='save_row("+id+");'/><input type='button' class='delete_button' id='delete_button"+id+"' value='delete' onclick='delete_row("+id+");'/></td></tr>";

    document.getElementById("new_name").value="";
    document.getElementById("new_phone").value="";
	document.getElementById("new_carli").value="";
    document.getElementById("new_date").value="";
	document.getElementById("new_mechanic").value="";
    
   }
  }
 });
}