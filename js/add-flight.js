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
						$(':input','#addf').not(':button, :submit, :reset, :hidden').val('');
					}
                }
            }
            
        xmlhttp.open("GET","admin_include/add-flight.inc.php?flightno="+flightno+"&airplaneid="+airplaneid+"&departure="+departure+"&dtime="+dtime+"&arrival="+arrival+"&atime="+atime+"&ec="+ec+"&ep="+ep+"&bc="+bc+"&bp="+bp,true);
        xmlhttp.send();  
    }
  
	});

	$("#search").click(function(){
		
		// console.log("clicked");
		// if(flightno == ""){

        // }
        // else{
        //     xmlhttp = new XMLHttpRequest();	
        //     xmlhttp.onreadystatechange = function() {
        //             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		// 			var content = xmlhttp.responseText;
					
		// 			// var myObj = JSON.parse(this.responseText);
                    
        //             if(content != "0")
        //             {
		// 				document.getElementById("airpalneid").value = flights.id;
		// 			   console.log(content);
                        
		// 			}
		// 			else
		// 			{	
		// 				// feedback.innerHTML = "User is not available";
		// 				console.log(content);
		// 			}
        //         }
        //     }
            
        //     xmlhttp.open("GET","admin_include/flight_search.inc.php?flightno="+flightno,true);
		// 	xmlhttp.send(); 
        // }



		var url = "admin_include/flight_search.inc.php";	
		// var flightno = document.getElementById("number").value;
		$.getJSON(url, {flightno: document.getElementById("number").value}, function(data){
			if(data.flights == "")
				alert("No flight found!");
				else{

			$.each(data.flights, function(i, flight){
				document.getElementById("flightno").value	 = flight.number;
				document.getElementById("airplaneid").value = flight.airplane_id;
				document.getElementById("departure").value = flight.departure;
				document.getElementById("dtime").value = flight.d_time;
				document.getElementById("arrival").value = flight.arrival;
				document.getElementById("atime").value = flight.a_time;
				
			});	
			$.each(data.classes, function(i, class_info){
				if(class_info.flight_name == "Economy")
				{
					document.getElementById("ecapacity").value = class_info.capacity;
					document.getElementById("eprice").value = class_info.price;
				}
				else
				{
					document.getElementById("bcapacity").value = class_info.capacity;
					document.getElementById("bprice").value = class_info.price;
				}
			});
		}
		});
	});
	
	
	$("#a").click(function(){
		$("#update").hide();
		$("#add").show();
	});
	$("#u").click(function(){
		$(':input','#result').not(':button, :submit, :reset, :hidden').val('');
  	$("#number").val('');
		$("#update").show();
		$("#add").hide();
		$("#de").hide();
		$("#up").show();;
	});
	$("#d").click(function(){
		$("#number").val('');
		$(':input','#result').not(':button, :submit, :reset, :hidden').val('');
		$("#update").show();
		$("#add").hide();
		$("#de").show();
		$("#up").hide();
	});
});