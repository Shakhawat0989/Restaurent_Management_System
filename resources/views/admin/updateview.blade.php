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

        <div style= "position:relative; top:90px; left:150px">
          <form action = "{{url('/update',$data->id)}}" method = "post" enctype = "multipart/form-data">
            @csrf
            <div style= "margin-bottom:20px">
                <label>Title</label>
                <input style="color:black"type = "text" name = "title" value="{{$data->title}}" required>

            </div>
            <div style= "margin-bottom:20px">
                <label>Price</label>
                <input style="color:black" type = "num" name = "price" value="{{$data->price}}" required>

            </div>


            <div style= "margin-bottom:20px">
                <label>Description</label>
                <input style="color:black" type = "text" name = "description" value="{{$data->description}}" required>

            </div>

            <div style= "margin-bottom:20px">
                <label>Old Image</label>
               <img height="200" width="200" src="/foodimage/{{$data->image}}" class="img-fluid rounded-top" alt="">
            </div>


            <div style= "margin-bottom:20px">
                <label>Image</label>
                <input type = "file" name = "image" required>

            </div>

            <div style= "margin-bottom:20px">
                <input style="background:blue" type = "submit" value="Save">
            </div>


            </form>
            <div>


    </div>

    @include("admin.adminscript")
  </body>
</html>
