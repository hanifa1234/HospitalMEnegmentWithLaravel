<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <base href="/public">
    <style>
        label {
            width: 200px;
            display: inline-block;
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
            <div class="container" align="center" style="padding:100px">


                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">
                            x
                        </button>
                        {{ session()->get('message') }}
                    </div>
                @endif



                <form action="{{ url('editDoctor', $doctor->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div style="padding:15px">
                        <label for="">Doctor Name</label>
                        <input style="color: black" type="text" value="{{ $doctor->name }}" name="name">
                    </div>

                    <div style="padding:15px">
                        <label for="">Doctor phone</label>
                        <input style="color: black" type="number" value="{{ $doctor->phone }}" name="phone">
                    </div>

                    <div style="padding:15px">
                        <label for="">Doctor room</label>
                        <input style="color: black" type="text" value="{{ $doctor->room }}" name="room">
                    </div>

                    <div style="padding:15px">
                        <label for="">Doctor speciality</label>
                        <input style="color: black" type="text" value="{{ $doctor->speciality }}" name="speciality">
                    </div>

                    <div style="padding:15px">
                        <label for="">Old Image</label>
                        <img height="2000px" width="200px" src="doctorimage/{{ $doctor->image }}">
                    </div>

                    <div style="padding:15px">
                        <label for="">change image</label>
                        <input type="file" name="file">
                    </div>



                    <div style="padding:15px">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>


                </form>
            </div>

        </div>

        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
</body>

</html>
