@extends('layouts.master')

@section('content')



    {{--pagetitle starts here--}}
    <div class="row text-center">
        <div class="col-sm-12"><h2> All Invoices   @foreach($vendor as $vendors)
                    {{ $vendors->name }}
                @endforeach  </h2></div>
    </div>
    {{--pagetitle ends here--}}

    <div class="row">
        {{--search starts here--}}
        <div class="col-sm-10">
            <form class="form1">
                <input type="text" id="myInput" onkeyup="myFunction()" name="search" placeholder="Search By Vendor...">
            </form>
        </div>
        {{--search ends here--}}

        {{--sort function starts here--}}
        <div class="col-sm-1">
            <p style="margin-top: 1em;"><button class="btn btn-default" onclick="sortTable()">Sort By Vendor</button></p>
        </div>
        {{--sort function ends here--}}
    </div>

    {{--table starts here--}}
    <div class="row">
        <div class="table-responsive">
            <table id="myTable" class="table table-bordered table-hover table-striped" style="margin-top: 1em;">
                <thead>
                <tr>
                    <th>Vendor</th>
                    <th>Date</th>
                    <th>Category</th>
                    <th>Total</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Wallmart</td>
                    <td>5-May-2017</td>
                    <td>Grocery</td>
                    <td>$4.59</td>
                    <td><a href="#"><p class="glyphicon glyphicon-pencil"></p></a></td>
                    <td><a href="#"><p class="glyphicon glyphicon-trash"></p></a></td>
                </tr>
                <tr>
                    <td>Canadian Type</td>
                    <td>4-May-2017</td>
                    <td>Home appliances</td>
                    <td>$13.99</td>
                    <td><a href="#"><p class="glyphicon glyphicon-pencil"></p></a></td>
                    <td><a href="#"><p class="glyphicon glyphicon-trash"></p></a></td>
                </tr>
                <tr>
                    <td>Sarabjeet Motors</td>
                    <td>3-May-2017</td>
                    <td>Car</td>
                    <td>$12.89</td>
                    <td><a href="#"><p class="glyphicon glyphicon-pencil"></p></a></td>
                    <td><a href="#"><p class="glyphicon glyphicon-trash"></p></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{--table ends here--}}

    {{--pagination starts--}}
    <div class="row">
        <div class="col-sm-12 text-center">
            <ul class="pagination pagination-default">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
            </ul>
        </div>
    </div>
    {{--pagination ends--}}





        {{--<div class="col-md-10 col-md-offset-1">--}}
      <!--      <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>-->
        {{--</div>--}}


@endsection
