<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>YPollute</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

function GetValues(){
var name=document.getElementById("pname").value;
var location=document.getElementById("ploc").value;
var transport=document.getElementById("mot").value;

document.getElementById("pname").value="";
document.getElementById("ploc").value="";
document.getElementById("mot").value="";  

AppendRow(name,location,transport);
}

function AppendTD()
{
    var td = document.createElement("td");
    return td;
}


function AppendRow(name,location,transport)
{
        var tblObj = document.getElementById('ptable');
        var tblBody = tblObj.childNodes;
        var ttlRows = tblBody[0].childNodes.length;
        var index = ttlRows;
        var cellHTML = "";
        var tr = document.createElement('tr');
            
        //adding first column
        var td = AppendTD();
        cellHTML = name;
        td.innerHTML = cellHTML;
        tr.appendChild(td);
           
        //adding second column
        var td = AppendTD();
        cellHTML = location;
        td.innerHTML = cellHTML;
        tr.appendChild(td);

        var td = AppendTD();
		if(transport==1)
        cellHTML = "Air";
		else if(transport==3)
        cellHTML = "Rail";
    	else if(transport==2)
        cellHTML = "Road";
		else
        cellHTML = "Sea";		
        td.innerHTML = cellHTML;
        tr.appendChild(td);
       /*     
        var td = AppendTD();
        var sel = document.createElement('select');

        sel.setAttribute("id", "dd"+index+"1");
        sel.setAttribute("name", "dd"+index+"1");
        sel.className='';
         */             
        tblBody[index+1].appendChild(tr);
        return false;
}




</script>
</head>

<body>

	<div id="header">
    	<div id="logo"></div>    
    </div> <!-- end of header -->
    
    
    <div id="content">
        	<div id="center">
				<div id="form">
        		
                	<div class="section" style="padding-bottom:10px;">
                    	<h3 class="section_title">Event Details</h3>
                        	<div class="clr"></div>
                                
                                <span class="alignleft margin10" id="event_name"><label for="eventname">Event Name</label><input type="text" name="EventName" id="eventname" size="30" /></span>

                                <span class="alignleft margin10" id="event_venue"><label for="eventvenue">Event Venue</label><input type="text" name="EventVenue" id="eventvenue" size="30" /></span>
                                
                                <span class="alignright margin10" id="done_button"><input type="submit" value="Done" /></span>
                                
                                <span class="alignleft margin10" id="display_event_name"></span>

                                <span class="alignleft margin10" id="display_event_venue"></span>
                                                       
                    </div> <!-- end of first section -->
                    
                    
                    
                    <div class="section">
                    	<h3 class="section_title">Participant Details</h3>
                        	<div class="clr"></div>
                            
                              <span class="col" style="width:260px;">
                    
                                 <span class="alignleft margin10"><span class="field_title">Name</span> <input type="text" name="ParticipantName" id="pname" size="20" /></span>
    
                                 <span class="alignleft margin10 clearleft"><span class="field_title">Location</span> <input type="text" name="ParticipantLocation" id="ploc" size="20" /></span>
                                  
                                 <span class="alignleft margin10 clearleft"><span class="field_title">Transport</span> <select class="mot" id="mot"><option value="1">Air</option><option value="2">Road</option><option value="3">Rail</option><option value="4">Sea</option></select></span>                       
                                    
                                 <span class="alignleft margin10 clearleft" style="margin-left:200px;"><input type="submit" value="Add" onclick="GetValues();" /></span>
                                 
                                 
                                 <div id="participant_info" class="margin10">
                                 
                                 	John Doe : <strong>0.05 tons</strong>                                 
                                 
                                 </div>

                              </span> <!-- end of col -->
                              
                              
                              
                              <span class="col" style="padding-bottom:5px;">
                              
                              	<div id="table_div">
                              	<table border="0" cellpadding="0" cellspacing="0" id="ptable">
                                
                                	<tr>
	                              		<th class="noborder">Name</th>
                                        <th>Location</th>
                                        <th>MoT</th>
                                        <th>Distance</th>
                                        <th>CO<sub>2</sub></th>
                                    </tr>
                                    
                              	</table>
                              
                              </div>
                              
                              </span> <!-- end of participants table -->
                    
                    
                    </div> <!-- end of second section -->
                    
                    
                    
                    <div class="section blurb">
                    	Total Carbon Footprint : <strong>0.10 tons</strong>
                    </div>
                
                
				</div> <!-- end of form -->
			</div> <!-- end of center -->
	</div> <!-- end of content -->
    
    
</body>
</html>
