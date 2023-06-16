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
    </head>
    <body>
    <div class="container">
        <div class="navbar">
           <h2 style="margin-left:2%;">Home Service Nepal</h2>
           @include('servicer.navbar') 
    </div>

    

    </div>
   
</div>

    

    </body>
</html>