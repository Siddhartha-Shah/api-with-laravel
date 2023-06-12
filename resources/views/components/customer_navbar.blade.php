<!DOCTYPE html>
<html>
<head>
<style>
    body{
        margin:0px;
    }
    
    .container{

       background-color:red;
       width:100%;
       height:100vh;
       margin:0px;
       border:1px solid black;
       
    }
    .navbar{
        width:100%;
        height:8vh;
        background-color:orange;
        display:flex;
        align-items:center;
        justify-content:space-between;
    }
</style>

<title>navbar</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="navbar">
           <h2 style="margin-left:2%;">Home Service Nepal</h2>
           @include('components.navbar') 
    </div>

    <div style="background-color:grey;width:100%;height:95%;display:grid;grid-template-columns: auto auto auto;padding-left:20%;padding-top:5%;">
    
    @include('components.cards')
  

    
    
    

    </div>
    
    
    

    </div>
   
</div>

</body>

</html>