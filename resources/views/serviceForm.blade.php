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
        <h1> @if($data) Update @else Add @endif Service</h1>
        <table>
            <form method="POST"  @if($data) action="/updateService" @else action="/addService" @endif>
                @csrf
                <tr>
                    <td>Service Id</td>
                    <td><input type="text" name="service_id" @if($data) value="{{ $data->service_id }}" @endif></td>
                </tr>
                <tr>
                    <td> Name</td>
                    <td><input type="text" name="provider_name" @if($data) value="{{ $data->provider_name }}" @endif></td>
                </tr>
                <tr>
                    <td>Provider Address</td>
                    <td><input type="text" name="provider_address" @if($data) value="{{ $data->provider_address }}" @endif></td>
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
                    <td>Email</td>
                    <td><input type="text" name="provider_email"  @if($data) value="{{ $data->provider_email }}" @endif></td>
                </tr>
                <tr>
                    <td>Experience</td>
                    <td><input type="text" name="provider_experience"  @if($data) value="{{ $data->provider_experience }}" @endif></td>
                </tr>
                <tr>
                    <td>Service</td>
                    <td><input type="text" name="provider_service"  @if($data) value="{{ $data->provider_service }}" @endif></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="provider_password"  @if($data) value="{{ $data->provider_password }}" @endif></td>
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