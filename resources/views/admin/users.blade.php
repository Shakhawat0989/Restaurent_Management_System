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
        <div style="position:relative;top:100px; left:200px">

            <table style="background:gray">
                <tr>
                    <th style="padding:30px">Name</th>
                    <th style="padding:30px">Email</th>
                    <th style="padding:30px">Action</th>
                </tr>
                @foreach($data as $data)
                <tr style="text-align:center">
                    <td style="padding:20px">{{$data->name}}</td>
                    <td style="padding:20px">{{$data->email}}</td>

                    @if($data->user_type=="0")
                    <td style="padding:20px"><a href="{{url('deleteuser',$data->id)}}">Delete</a></td>
                    @else
                    <td style="padding:20px"><a>Not Allowed</a></td>
                    @endif


                </tr>
                @endforeach
            </table>
        </div>

    </div>

    @include("admin.adminscript")
  </body>
</html>
