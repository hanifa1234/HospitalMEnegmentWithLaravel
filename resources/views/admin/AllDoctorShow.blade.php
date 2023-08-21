<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->


        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding-top:100px; ">
                <table border="1">
                    <tr style="background-color: black;">
                        <td style=" color: aliceblue; font-size: 20px; padding: 5px;" align="center">Doctor name </td>
                        <td style=" color: aliceblue; font-size: 20px; padding: 5px;" align="center">Phone </td>
                        <td style=" color: aliceblue; font-size: 20px; padding: 5px;" align="center">Speciality</td>
                        <td style=" color: aliceblue; font-size: 20px; padding: 5px;" align="center">Room</td>
                        <td style=" color: aliceblue; font-size: 20px; padding: 5px;" align="center">Images</td>
                        <td style=" color: aliceblue; font-size: 20px; padding: 5px;" align="center">Deleted</td>
                        <td style=" color: aliceblue; font-size: 20px; padding: 5px;" align="center">Upload</td>
                    </tr>
                    @foreach ($doctor as $item)
                        <tr align="center">
                            <th style=" padding: 10px;" align="center">{{ $item->name }}</th>
                            <th style=" padding: 10px;" align="center">{{ $item->phone }}</th>
                            <th style=" padding: 10px;" align="center">{{ $item->speciality }}</th>
                            <th style=" padding: 10px;" align="center">{{ $item->room }}</th>
                            <th style=" padding: 10px;" align="center"><img height="100" width="100"
                                    src="doctorimage/{{ $item->image }}" alt=""></th>
                            <th>
                                <a href="{{ url('deletedDoctor', $item->id) }}"
                                    onclick="return confirm('are you sure deleted this message?')"
                                    class="btn btn-primary ml-lg-3"
                                    style="background-color: red; color:aliceblue; border-radius: 2rem"> Deleted</a>
                            </th>
                            <th>
                                <a href="{{ url('uploadDoctor', $item->id) }}"
                                    class="btn btn-primary ml-lg-3"
                                    style="background-color: rgb(52, 30, 199); color:aliceblue; border-radius: 2rem">
                                    Upload</a>
                            </th>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>



        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
</body>

</html>
