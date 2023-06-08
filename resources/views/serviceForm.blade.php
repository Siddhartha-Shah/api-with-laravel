<html>
    <head>
        <title>Add Service</title>
        <style>
            
           div{
            margin-top:10%;
            margin-left:35%;
            width:30%;
            height:50%;
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
                border:1px solid black;
            }
        </style>
    </head>
    <body>
        <div>
        <h1>Add Service</h1>
        <table>
            <form method="POST"  action="/addService">
                @csrf
                <tr>
                    <td>Service Id</td>
                    <td><input type="text" name="service_id"></td>
                </tr>
                <tr>
                    <td>Service Name</td>
                    <td><input type="text" name="service_name"></td>
                </tr>
                <tr>
                    <td>Service Provider</td>
                    <td><input type="text" name="service_provider"></td>
                </tr>
                <tr>
                    <td>Provider Number</td>
                    <td><input type="text" name="provider_number"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="text" name="provider_gender"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>
                    
                    </td>
                    <td>
                    <button type="submit" value="submit">Submit</button>
                    </td>
                
                </tr>
                
                
            </form>
        </table>
        </div>
    </body>
</html>