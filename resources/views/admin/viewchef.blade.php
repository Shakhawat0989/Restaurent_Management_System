<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    <div class = 'container-scroller'>

    @include("admin.navbar")

    <div style= "position:relative;top:70px; left:150px">
        <form action="{{url('/chef')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Chef Name</label>
                <input  style="margin-left:25px;color:black"type="text" name="name" placeholder="Enter Chef Name">
            </div>
            <br/>
            <div>
                <label>Chef Speciality</label>
                <input style="color:black" type="text" name="speciality" placeholder="Enter Chefs Speciality">
            </div>
            <br/>
            <div>
                <label>Image</label>
                <input type="file" name="image">
            </div>
            <br/>
            <div>
                <input style="background:blue"type="submit" value="submit">
            </div>




        </form>

        <div style="padding-bottom:100px">
            <table style="background:black;margin-top:40px">
                <tr>
                    <th style="padding:30px">Chef Name</th>
                    <th style="padding:30px">Speciality</th>
                    <th style="padding:30px">Image</th>
                    <th style="padding:30px">Edit</th>
                    <th style="padding:30px">Remove</th>
                </tr>
                @foreach($data as $data)
                <tr style="text-align:center">
                    <td style="padding:15px">{{$data->name}}</td>
                    <td style="padding:15px">{{$data->speciality}}</td>
                    <td style="padding:15px"><img height="100" width="100" src="/chefimage/{{$data->image}}"></td>
                    <td style="padding:15px"><a href="{{url('updatechef',$data->id)}}">Update</a></td>
                    <td style="padding:15px"><a href="{{url('deletechef',$data->id)}}">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>
    </div>

    @include("admin.adminscript")
  </body>
</html>
