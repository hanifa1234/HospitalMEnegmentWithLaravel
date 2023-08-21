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



        <base href="/public">

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





                    <form action="{{ url("sandEmail",$data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div style="padding:15px">
                            <label for="">Greeting</label>
                            <input type="text" style="Color:black" name="greeting"  placeholder="Wirite the Greeting"  required="">
                        </div>



                        <div style="padding:15px">
                            <label for="">Body</label>
                            <input type="text" style="Color:black" name="body" placeholder="Wirite the body" required="">
                        </div>

                        <div style="padding:15px">
                            <label for="">Action Text</label>
                            <input type="text" style="Color:black" name="actiontext" placeholder="Wirite the actiontext" required="">
                        </div>


                        <div style="padding:15px">
                            <label for="">Action URL</label>
                            <input type="text" style="Color:black" name="actionUrl" placeholder="URL" required="">
                        </div>


                        <div style="padding:15px">
                            <label for="">End Part</label>
                            <input type="text" style="Color:black" name="endPart" placeholder="Wirite theendPart" required="">
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
