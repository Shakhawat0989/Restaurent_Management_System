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

    <div style="position:relative;top:70px;left:100px">
        <table style="background:black; border:2px solid green">
            <tr style="border-bottom:2px solid green;text-align:center">
                <th style="padding:30px;border-right:2px solid green">Name</th>
                <th style="padding:30px;border-right:2px solid green">Email</th>
                <th style="padding:30px;border-right:2px solid green">Phone</th>
                <th style="padding:30px;border-right:2px solid green">Guest</th>
                <th style="padding:30px;border-right:2px solid green">Date</th>
                <th style="padding:30px;border-right:2px solid green">Time</th>
                <th style="padding:30px;border-right:2px solid green">Message</th>

            </tr>
            @foreach($data as $data)

            <tr style="text-align:center">
                <td style="padding:15px;border-right:2px solid green">{{$data->name}}</td>
                <td style="padding:15px;border-right:2px solid green">{{$data->email}}</td>
                <td style="padding:15px;border-right:2px solid green">{{$data->phone}}</td>
                <td style="padding:15px;border-right:2px solid green">{{$data->guest}}</td>
                <td style="padding:15px;border-right:2px solid green">{{$data->date}}</td>
                <td style="padding:15px;border-right:2px solid green">{{$data->time}}</td>
                <td style="padding:15px;border-right:2px solid green">{{$data->message}}</td>
            </tr>

            @endforeach
        </table>
    </div>

    </div>

    @include("admin.adminscript")
  </body>
</html>
