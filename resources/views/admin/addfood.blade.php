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

      <div style= "position:relative; top:90px; left:150px">
          <form action = "{{url('/foodupload')}}" method = "post" enctype = "multipart/form-data">
            @csrf
            <div style= "margin-bottom:20px">
                <label>Title</label>
                <input style="color:black"type = "text" name = "title" placeholder = "Title" required>

            </div>
            <div style= "margin-bottom:20px">
                <label>Price</label>
                <input style="color:black" type = "num" name = "price" placeholder = "Price" required>

            </div>

            <div style= "margin-bottom:20px">
                <label>Image</label>
                <input type = "file" name = "image" required>

            </div>

            <div style= "margin-bottom:20px">
                <label>Description</label>
                <input style="color:black" type = "text" name = "description" placeholder = "Something Write about food" required>

            </div>
            <div style= "margin-bottom:20px">
                <input style="background:blue" type = "submit" value="Save">
            </div>


            </form>
            <div style = "margin-bottom:500px">
                <table style="background:black">
                    <tr>
                        <th style="padding:30px">Food Name</th>
                        <th style="padding:30px">Price</th>
                        <th style="padding:30px">Description</th>
                        <th style="padding:30px">Image</th>
                        <th style="padding:30px">Action</th>
                        <th style="padding:30px">Edit</th>
                    </tr>

                    @foreach($data as $data)
                    <tr style="text-align:center">
                        <td>{{$data->title}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->description}}</td>
                        <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
                        <td><a href="{{url('deletemenu',$data->id)}}">Delete</a></td>
                        <td><a href="{{url('updateview',$data->id)}}">Update</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
      </div>



    </div>

    @include("admin.adminscript")
  </body>
</html>
