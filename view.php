<html>

<head>

<link></link>

<script type="text/javascript" src="jquery-3.2.1.min.js"> </script>

<style>

form input
{
    display: block;
    padding: 10px;
    margin:5px;
    width: 30%;
}   

</style>

</head>


<body>


<h2>Create contact</h2>
<form method="post" action="#">
<input type="text" placeholder="id" id="id" required></input>
<input type="text" placeholder="name" id="name" required></input>
<input type="text" placeholder="lastname" id="lastname" required></input>
<input type="text" placeholder="phone" id="phone"  required></input>
<input type="button" value="create" id="create" onClick="javascript:sendData();"></input>
</form>

<h2>Search</h2>
<form method="post" action="#">
<input type="text" placeholder="query" id="query"  required></input>
<input type="button" value="search" id="search"></input>
</form>

<div>
<h2>Output</h2>
<label id="output"> </label>
</div>

<script>

function sendData()
{
    
    var id = document.getElementById('id')
    var name = document.getElementById('name')
    var lastname = document.getElementById('lastname')
    var phone = document.getElementById('phone')
    
    $.ajax({
        
        type: 'POST',
        url: 'main.php',
        data: ("id="+id+"&name="+name+"&lastname="+lastname+"&phone="+phone),
        success: function(response)
        {
            if(response)
            {
                $("#output").html(response)            
            
            }else $("#output").html("Contact couldn't be saved")              
        }  
    
    
    })
    


}



</script>


</body>


</html>
