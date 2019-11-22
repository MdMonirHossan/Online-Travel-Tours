$(document).ready(function() {
	$("#update").hide();
	$("#add").show();
	$("#delete").hide();
    
    // Add flight event handler with ajax call
	$("#ad").click(function(){
	var flightno = document.getElementById("flightno").value;	
	var airplaneid = document.getElementById("airplaneid").value;	
	var departure = document.getElementById("departure").value;	
	var dtime = document.getElementById("dtime").value;	
	var arrival = document.getElementById("arrival").value;	
	var atime = document.getElementById("atime").value;	
	var ec = document.getElementById("ecapacity").value;	
	var ep = document.getElementById("eprice").value;	
	var bc = document.getElementById("bcapacity").value;	
	var bp = document.getElementById("bprice").value;	
	
    if(flightno == "" || airplaneid == "" || departure == "" || dtime == "" || arrival == "" || atime == "" || 
                    ec == "" || ep == "" || bc == "" || bp == ""){
        alert("All Value must be filled!") 
    }
    else{
        xmlhttp = new XMLHttpRequest();	
        xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var content = xmlhttp.responseText;
                    
                    if(content != "0")
                    {
                        alert("Done");
                        
                        }
                        else
                        {	
                        alert("Flight added!");
                        $(':input','#addf')
                            .not(':button, :submit, :reset, :hidden')
                            .val('');
                        }
                }
            }
            
        xmlhttp.open("GET","admin_include/add-flight.inc.php?flightno="+flightno+"&airplaneid="+airplaneid+"&departure="+departure+"&dtime="+dtime+"&arrival="+arrival+"&atime="+atime+"&ec="+ec+"&ep="+ep+"&bc="+bc+"&bp="+bp,true);
        xmlhttp.send();  
    }
  
	});

// Update flight event handler through ajax
	$("#up").click(function(){
	var flightno = document.getElementById("flightno1").value;	
	var airplaneid = document.getElementById("airplaneid1").value;	
	var departure = document.getElementById("departure1").value;	
	var dtime = document.getElementById("dtime1").value;	
	var arrival = document.getElementById("arrival1").value;	
	var atime = document.getElementById("atime1").value;	
	var ec = document.getElementById("ecapacity1").value;	
	var ep = document.getElementById("eprice1").value;	
	var bc = document.getElementById("bcapacity1").value;	
	var bp = document.getElementById("bprice1").value;	

	xmlhttp = new XMLHttpRequest();	
	xmlhttp.onreadystatechange = function() {
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var content = xmlhttp.responseText;
                
                if(content != "0")
                {
             	   alert(content);
             	   
             	  }
             	   else
             	   {	
             	   alert("Flight updated!");
             	   $(':input','#result')
 		 .not(':button, :submit, :reset, :hidden')
  		.val('');
             	   }
            }
        }
        
        xmlhttp.open("GET","Adminupdate.php?flightno="+flightno+"&airplaneid="+airplaneid+"&departure="+departure+"&dtime="+dtime+"&arrival="+arrival+"&atime="+atime+"&ec="+ec+"&ep="+ep+"&bc="+bc+"&bp="+bp,true);
        xmlhttp.send();      
        
	});


	// search flight 
	$("#search").click(function(){
		var url = "Adminsearch.php";	
		
		$.getJSON(url, {flightno: document.getElementById("number").value}, function(data){
			if(data.flights == "")
				alert("No flight found!");
				else{

			$.each(data.flights, function(i, flight){
				document.getElementById("flightno1").value	 = flight.number;
				document.getElementById("airplaneid1").value = flight.airplane_id;
				document.getElementById("departure1").value = flight.departure;
				document.getElementById("dtime1").value = flight.d_time;
				document.getElementById("arrival1").value = flight.arrival;
				document.getElementById("atime1").value = flight.a_time;
				
			});	
			$.each(data.classes, function(i, class_info){
				if(class_info.name == "Economy")
				{
					document.getElementById("ecapacity1").value = class_info.capacity;
					document.getElementById("eprice1").value = class_info.price;
				}
				else
				{
					document.getElementById("bcapacity1").value = class_info.capacity;
					document.getElementById("bprice1").value = class_info.price;
				}
			});
		}
		});
	});

    // Delete flight
	$("#de").click(function(){
		var flightno = document.getElementById("flightno1").value;	
		xmlhttp = new XMLHttpRequest();	
	xmlhttp.onreadystatechange = function() {
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var content = xmlhttp.responseText;
                
             	 	alert(content);
            }
        }
        
        xmlhttp.open("GET","Admindelete.php?flightno="+flightno,true);
        xmlhttp.send();      
        $(':input','#result')
 	 .not(':button, :submit, :reset, :hidden')
  	.val('');
	});
	
	$("#ad1").hover(function(){
		xmlhttp = new XMLHttpRequest();	
	xmlhttp.onreadystatechange = function() {
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var content = xmlhttp.responseText;
                	document.getElementById("detail").innerHTML = content;
             	 	$("#detail").show();
             	 	
            }
        }
        
        xmlhttp.open("GET","Admindetail1.php",true);
        xmlhttp.send();      
	}, function(){
		$("#detail").hide();
	});
	
	$("#ud1").hover(function(){
		xmlhttp = new XMLHttpRequest();	
	xmlhttp.onreadystatechange = function() {
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var content = xmlhttp.responseText;
                	document.getElementById("detail1").innerHTML = content;
             	 	$("#detail1").show();
             	 	
            }
        }
        
        xmlhttp.open("GET","Admindetail1.php",true);
        xmlhttp.send();      
	}, function(){
		$("#detail1").hide();
	});
	
	$("#ud2").hover(function(){
		xmlhttp = new XMLHttpRequest();	
	xmlhttp.onreadystatechange = function() {
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var content = xmlhttp.responseText;
                	document.getElementById("udetail2").innerHTML = content;
             	 	$("#udetail2").show();
             	 	
            }
        }
        
        xmlhttp.open("GET","Admindetail2.php",true);
        xmlhttp.send();      
	}, function(){
		$("#udetail2").hide();
	});
	
	$("#ud3").hover(function(){
		xmlhttp = new XMLHttpRequest();	
	xmlhttp.onreadystatechange = function() {
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var content = xmlhttp.responseText;
                	document.getElementById("udetail3").innerHTML = content;
             	 	$("#udetail3").show();
             	 	
            }
        }
        
        xmlhttp.open("GET","Admindetail2.php",true);
        xmlhttp.send();      
	}, function(){
		$("#udetail3").hide();
	});
	
	$("#ad2").hover(function(){
		xmlhttp = new XMLHttpRequest();	
	xmlhttp.onreadystatechange = function() {
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var content = xmlhttp.responseText;
                	document.getElementById("adetail2").innerHTML = content;
             	 	$("#adetail2").show();
             	 	
            }
        }
        
        xmlhttp.open("GET","Admindetail2.php",true);
        xmlhttp.send();      
	}, function(){
		$("#adetail2").hide();
	});
	
	$("#ad3").hover(function(){
		xmlhttp = new XMLHttpRequest();	
	xmlhttp.onreadystatechange = function() {
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var content = xmlhttp.responseText;
                	document.getElementById("adetail3").innerHTML = content;
             	 	$("#adetail3").show();
             	 	
            }
        }
        
        xmlhttp.open("GET","Admindetail2.php",true);
        xmlhttp.send();      
	}, function(){
		$("#adetail3").hide();
	});
	
	
	$("#a").click(function(){
		$("#update").hide();
		$("#add").show();
	});
	$("#u").click(function(){
		$(':input','#result')
 	 .not(':button, :submit, :reset, :hidden')
  	.val('');
  	$("#number").val('');
		$("#update").show();
		$("#add").hide();
		$("#de").hide();
		$("#up").show();;
	});
	$("#d").click(function(){
		$("#number").val('');
		$(':input','#result')
 	 .not(':button, :submit, :reset, :hidden')
  	.val('');
		$("#update").show();
		$("#add").hide();
		$("#de").show();
		$("#up").hide();
	});
});