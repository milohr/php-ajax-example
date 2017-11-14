<html>

<head>

<link></link>
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
<input type="text" placeholder="id" name="id" required></input>
<input type="text" placeholder="name" name="name" required></input>
<input type="text" placeholder="lastname" name="lastname" required></input>
<input type="text" placeholder="phone" name="phone"  required></input>
<input type="submit" value="create" name="create"></input>
</form>

<h2>Search</h2>
<form method="post" action="#">
<input type="text" placeholder="query" name="query"  required></input>
<input type="submit" value="search" name="search"></input>
</form>

<div>
<h2>Output</h2>
<label id="output"> </label>
</div>

</body>


</html>
