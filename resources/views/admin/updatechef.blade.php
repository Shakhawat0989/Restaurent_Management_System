<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
    <base href="/public">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    <div class = 'container-scroller'>

    @include("admin.navbar")

    <div style= "position:relative;top:70px; left:150px">
        <form action="{{url('/uploadchef',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Chef Name</label>
                <input  style="margin-left:25px;color:black"type="text" name="name" value= "{{$data->name}}" required>
            </div>
            <br/>
            <div>
                <label>Chef Speciality</label>
                <input style="color:black" type="text" name="speciality" value="{{$data->speciality}}" required>
            </div>
            <br/>
             <div style= "margin-bottom:20px">
                <label>Old Image</label>
               <img height="200" width="200" src="/chefimage/{{$data->image}}" class="img-fluid rounded-top" alt="">
            </div>


            <div style= "margin-bottom:20px">
                <label>Image</label>
                <input type = "file" name = "image" required>

            </div>
            <br/>
            <div>
                <input style="background:blue"type="submit" value="submit">
            </div>




        </form>

    </div>

    @include("admin.adminscript")
  </body>
</html>
