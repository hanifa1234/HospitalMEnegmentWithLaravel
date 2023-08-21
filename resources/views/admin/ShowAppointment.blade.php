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
                <div align="center"   style="padding-top:100px; ">
                    <table border="1">
                        <tr style="background-color: black;">
                        <td style=" color: aliceblue; font-size: 18px; padding: 5px;" align="center">Coustomer name </td>
                        <td style=" color: aliceblue; font-size: 18px; padding: 5px;" align="center">Email </td>
                        <td style=" color: aliceblue; font-size: 18px; padding: 5px;" align="center">Phone</td>
                        <td style=" color: aliceblue; font-size: 18px; padding: 5px;" align="center">Doctor Name</td>
                        <td style=" color: aliceblue; font-size: 18px; padding: 5px;" align="center">Date</td>
                        <td style=" color: aliceblue; font-size: 18px; padding: 5px;" align="center">Message</td>
                        <td style=" color: aliceblue; font-size: 18px; padding: 5px;" align="center">Status</td>
                        <td style=" color: aliceblue; font-size: 18px; padding: 5px;" align="center">user_id</td>
                        <td style=" color: aliceblue; font-size: 18px; padding: 5px;" align="center">Approbe</td>
                        <td style=" color: aliceblue; font-size: 18px; padding: 5px;" align="center">Cancel</td>
                        <td style=" color: aliceblue; font-size: 18px; padding: 5px;" align="center">Sand Mail</td>
                        </tr>
                        @foreach ($appointmentsData as $item)
                        <tr align="center" >
                            <th style=" padding: 10px;" align="center" >{{ $item->name }}</th>
                            <th style=" padding: 10px;" align="center" >{{ $item->email }}</th>
                            <th style=" padding: 10px;" align="center" >{{ $item->phone }}</th>
                            <th style=" padding: 10px;" align="center" >{{ $item->doctor }}</th>
                            <th style=" padding: 10px;" align="center" >{{ $item->data }}</th>
                            <th style=" padding: 10px;" align="center" >{{ $item->message }}</th>
                            <th style=" padding: 10px;" align="center" >{{ $item->status }}</th>
                            <th style=" padding: 10px;" align="center" >{{ $item->user_id }}</th>
                            <th>
                                <a href="{{ url("Approved", $item->id) }}"  class="btn btn-primary ml-lg-3" style="background-color: rgb(52, 30, 199); color:aliceblue; border-radius: 2rem" > Approbe</a>
                            </th>
                            <th>
                                <a href="{{ url("Cancel", $item->id) }}"  class="btn btn-danger ml-lg-3" style="background-color: red; color:aliceblue; border-radius: 2rem" > Cancel</a>
                            </th>

                            <th>
                                <a href="{{ url("EmaliView", $item->id) }}"  class="btn btn-success ml-lg-3" style="background-color: success; color:aliceblue; border-radius: 2rem" > sand mails</a>
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
