$(document).ready(function() {
    var uname = document.getElementById("#uname").value;
    var feedback = document.getElementById("#inavalid_feed");
    $('#uname').onkeyup(function() {
        if(uname == ""){

        }
        else{
            xmlhttp = new XMLHttpRequest();	
            xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var content = xmlhttp.responseText;
                    
                    if(content != "0")
                    {
                       feedback.innerHTML = "User is available";
                        
					}
					else
					{	
						feedback.innerHTML = "User is not available";
					}
                }
            }
            
            xmlhttp.open("GET","include/check.inc.php?uname="+uname,true);
            xmlhttp.send();  
        }
    })

});