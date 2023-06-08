<html>
    <head>
        <title>Add customer</title>
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
        <h1>Add customer</h1>
        <table>
            <form method="POST"  action="/addCustomer">
                @csrf
                <tr>
                    <td>customer Id</td>
                    <td><input type="text" name="customer_id"></td>
                </tr>
                <tr>
                    <td>customer Name</td>
                    <td><input type="text" name="customer_name"></td>
                </tr>
                <tr>
                    <td>Service</td>
                    <td><input type="text" name="service"></td>
                </tr>
                <tr>
                    <td>Number</td>
                    <td><input type="text" name="number"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
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