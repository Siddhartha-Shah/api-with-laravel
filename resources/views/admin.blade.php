<html>
    <head>
        <title>Admin Page</title>
        <style>
            body{
                margin:0;
            }
            .main-container{
                width:100%;
                height:100%;
                background-color: #f2f2f2;
            }
            .main-container .navbar{
                width:100%;
                height:10%;
                display:flex;
                justify-content:left;
                align-items:center;
                background-color:#ffffff;
            }
        
           .sidebar{
               width:25%;
                height:90%;
               margin-left:0;
               border-top:1px solid black;
               background-color:#ffffff;
               display:flex;
               flex-direction:column;
                justify-content:space-evenly;
                align-items:center;

           }
           .navbar img{
                width:50px;
                height:50px;
                margin:0.5%;
            }
            .sidebar-content{
                background-color:#ccffff;width:90%;height:10%;display:flex;flex-direction:column;justify-content:space-evenly;align-items:left;
            }
            .sidebar-content:hover{
                width:92%;
            }
            .dashboard{
                display:flex;align-items:center;background-color:#ccffff;width:90%;height:10%;
            }
            .dashboard:hover{
                width:92%;
            }

            .datas{
                position:relative;
                left:27%;
                top:-88%;
                width:71%;
                height:85%;
                background-color:#ffffff;
                display:flex;
                flex-direction:column;
                align-items:center;
              
            }
            .navbar-of-table{
                width:95%;
                height:7.5%;
                background-color:  #1a8cff;
                margin-top:1%;
                display:flex;
                justify-content:space-around;
                align-items:center;
            }
            .navbar-of-table h3{
                color:white;
                
            }
            .data{
                background-color:  #a6a6a6;
                color: #0d0d0d;
            }
            #customers {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                min-width: 80%;

                }

                #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
                }

                #customers tr:nth-child(even){background-color: #f2f2f2;}

                #customers tr:hover {background-color: #ddd;}

                #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                margin-left:20px;
                margin-right:20px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
                }
        </style>
    </head>
    <body>
        <div class="main-container">

        <div class="navbar">
        <img style="margin-left:5%"src="https://cdn.vectorstock.com/i/1000x1000/04/22/hammer-silhouette-isolated-on-blue-background-vector-22480422.webp" alt="navbar image"/>
            <h2 style="color:purple;margin-left:1%;">Demo admin</h2>
            <img style="width:80px;margin-left:60%" src="https://banner2.cleanpng.com/20180721/gub/kisspng-flag-of-nepal-flag-of-the-maldives-flag-of-the-uni-government-of-nepal-5b532238d46bf2.1263789815321749048701.jpg" alt="flag"/>
            <img src="https://w7.pngwing.com/pngs/922/214/png-transparent-computer-icons-avatar-businessperson-interior-design-services-corporae-building-company-heroes-thumbnail.png" alt="Avatar" class="avatar">
            <p style="color:purple;margin-left:1%">DEMO ADMIN</p>
        </div>


        <div class="sidebar">
        <div class="dashboard">
        <img style="width:80px;height:70px;" src="https://w7.pngwing.com/pngs/922/214/png-transparent-computer-icons-avatar-businessperson-interior-design-services-corporae-building-company-heroes-thumbnail.png" alt="Avatar" class="avatar">
        <div style="margin-left:20px;">
        <b style="font">admin@admin.com</b><br>
        <p>Demo Admin</p>
        </div>
        </div>
  

        <div class="sidebar-content">
            <b style="margin-left:2%">Main</b>
            <div style="display:flex;justify-content:left;align-items:center;">
            <img style="width:30px;height:30px;margin-left:2%" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAbFBMVEX///8AAAAwMDDPz8/p6enm5ubS0tKjo6OcnJz19fX6+vpfX19jY2OGhoaqqqrs7OzX19d+fn5KSkrExMQ5OTlCQkJ1dXUzMzO+vr5YWFhOTk49PT0qKirc3NwdHR2WlpZqamoUFBSKioq0tLQ0gjWbAAAC2klEQVR4nO3d7VbaQBCAYcK3JCRCVCq2Vdv7v8f2tAo9ZZkZZ2dpOH2f32bIq4iYzepoBAAAAAAAAAAAcBX6epxv256Z3m4Dptd9TuBDFeMuNXy1C5q+8Qd+CjqFqlonpm/Cpvu/io9h51AlpscNb9yF47iT6E6Gd3HDd0MonJ4Mn8YNH1NIYYShFzbtwmVtKlz7hrdNYOHSOeDWVHjrnL4cQOHcVDh3TqfQgEIVhRTKKDSgUEUhhTIKDShUUUihjEIDClUUUiij0IBCFYUUyig0oFBFIYUyCg0oVFFIoYxCAwpVFFIoo9CAQhWFFMooNKBQRSGFMgoNKFRdz736m/nEY96aClvn9E1gYb6h75nJR2EWCv/nwn3cSSSmxw3fuwtbfbhRai9yHTb93H5/g7uoczjd6Bz4NH3yB0btma9TgaNRF/NVTO31/4huluv0ReZomj09/ckDAAAAAAB/y/8tfHbjf/RutopLSVmt9cskBrV0IUMwf/p5cFP0OsXnkMAqdUHYoH87uGDiIiqwevQ8/PvBD9FdR/dhhZXj2+m4vBpf9q7ouoVqcjg446VKQSGFFMouWljiXgzVRQtL3E+juopC6Z4oFYURKFRRKKIwAoUqCkUURqBQRaGIwggUqigUURiBQhWFxoPLrSEWL/xiuxTZS5csnWuTvxUunHytIuwz1hfLFs6T5+vhfxaXLQzbzFE9D7PwJiywuh9m4SB2dpV9lsYVuu4SuEBhkzxbD//OrrKFYf/EcusOLP3zsHsJCfS/kl7iXdvqvD/el3bSh2XhnbeKQhGFEShUUSiiMAKFKgpFFEagUEWhiMIIFKooFFEYgULV9dyr37QLl/XVFOajMIHCCBR+gONugmNhubtN4lb4PFt5D6tvr+FhB710zh/yzfPw27eDvT+NLWL+4IB3DbN7/XWwfw3bon/ZjbPV3lXo1XI/br6HBgEAAAAAAAAAAPw7PwDGJUXuNMFDvAAAAABJRU5ErkJggg==" alt="icon"/>
            <b style="margin-left:2%;">Dashboard</b>
            </div>
        </div>

        <div class="sidebar-content">
            <b style="margin-left:2%">Customer</b>
            <div style="display:flex;justify-content:left;align-items:center;">
            <img style="width:30px;height:30px;margin-left:2%" src="https://static.thenounproject.com/png/186492-200.png" alt="icon"/>
            <b style="margin-left:2%;">Customers</b>
            </div>
        </div>

        <div class="sidebar-content">
            <b style="margin-left:2%">Home Service</b>
            <div style="display:flex;justify-content:left;align-items:center;">
            <img style="width:30px;height:30px;margin-left:2%" src="https://4.imimg.com/data4/KK/OI/MY-5670369/home-cleaning-services-500x500.png" alt="icon"/>
            <b style="margin-left:2%;">Services</b>
            </div>
        </div>

        
        <div class="sidebar-content">
            <b style="margin-left:2%">Booking</b>
            <div style="display:flex;justify-content:left;align-items:center;">
            <img style="width:30px;height:30px;margin-left:2%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8GrTwyyMvlpdfHrQjpAtDNd-Vq9BO1wvJwQ&usqp=CAU" alt="icon"/>
            <b style="margin-left:2%;">Booking</b>
            </div>
        </div>
        </div>
       
        <div class="datas">
        <table id="customers">
  <tr>
    <th>SN</th>
    <th>User Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Password</th>
    <th>Action</th>
     </tr>
     @foreach($getData as $data)
     <tr>
     <td>{{$data->user_id}}</td>
        <td>{{$data->user_name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->phone_number}}</td>
        <td>{{$data->password}}</>
        <td style="width:20%;height:80%;display:flex;justify-content:center;align-items:center;">
            <img style="width:30%;height:100%" src="https://www.pdfzorro.com/Images/IconsFunktionen/pdf-edit.webp" alt="edit icon"/>
            <img style="width:30%;height:100%;margin-left:10%" src="data:image/png;base64,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" alt="delete icon"/>
        </td>
        </tr>
            @endforeach
</table>


        </div>

        </div>
    </body>
</html>