<html>
    <head>
        <title> @if($data) update @else add @endif Service</title>
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
            <form method="POST"  @if($data) action="/updateService" @else action="/addService" @endif>
                @csrf
                <tr>
                    <td>Service Id</td>
                    <td><input type="text" name="service_id" @if($data) value="{{ $data->service_id }}" @endif></td>
                </tr>
                <tr>
                    <td>Service Name</td>
                    <td><input type="text" name="service_name" @if($data) value="{{ $data->service_name }}" @endif></td>
                </tr>
                <tr>
                    <td>Service Provider</td>
                    <td><input type="text" name="service_provider" @if($data) value="{{ $data->service_provider }}" @endif></td>
                </tr>
                <tr>
                    <td>Provider Number</td>
                    <td><input type="text" name="provider_number" @if($data) value="{{ $data->provider_number }}" @endif></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="text" name="provider_gender"  @if($data) value="{{ $data->provider_gender }}" @endif></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address"  @if($data) value="{{ $data->address }}" @endif></td>
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