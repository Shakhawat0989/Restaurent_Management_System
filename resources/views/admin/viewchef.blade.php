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
    </div>
    </div>

    @include("admin.adminscript")
  </body>
</html>
