<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->


    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>





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

                <div class="container" align="center" style="padding-top: 100px">

                    @if (session()->has('message'))
                    <div class="alert alert-success" >
                        <button type="button" class="close" data-dismiss="alert">
                          X
                        </button>
                        {{ session()->get('message')}}
                    </div>
                    @endif





                    <form action="{{ url("upload_doctors") }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div style="padding:15px">
                            <label for="">Doctor Name</label>
                            <input type="text" style="Color:black" name="name" id="name" placeholder="Wirite the name"  required="">
                        </div>



                        <div style="padding:15px">
                            <label for="">Phone number</label>
                            <input type="number" style="Color:black" name="number" id="number" placeholder="Wirite the number" required="">
                        </div>



                        <div style="padding:15px">
                            <label for="">Speciality</label>
                            <select name="speciality" id="speciality" style="Color:black; width:200px">
                                <option > -- select --</option>
                                <option value="skin">Skin</option>
                                <option value="heart">heard</option>
                                <option value="eye">Eye</option>
                                <option value="nose">Nose</option>
                            </select>
                        </div>



                        <div style="padding:15px">
                            <label for="">Room Number</label>
                            <input type="text" style="Color:black" name="room" id="room" placeholder="Wirite the room number" required="">
                        </div>

                        <div style="padding:15px">
                            <label for="">Doctor img</label>
                            <input type="file" name="file" required="">
                        </div>


                        <div style="padding:15px">
                            <input type="submit" class="btn btn-success">
                        </div>


                    </form>
                </div>
        </div>



        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
</body>

</html>
