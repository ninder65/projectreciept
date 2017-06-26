{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
@extends('layouts.master')

@section('content')
    {{--pagetitle starts here--}}
    {{--{{dd($recieptdetails)}}--}}
    <div class="row text-center">
        <div class="col-sm-12"><h2>Reciept Details</h2></div>
    </div>
    {{--pagetitle ends here--}}

    <div class="row">
        {{--search starts here--}}
        <div class="col-sm-12">
            <form class="form1" method="post" action="{{ url('/edit', $recieptdetails->id) }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label col-sm-2" for="reciept_name">Reciept Name: </label>
                    <div class="col-sm-4">
                        <input type="text" name="reciept_name" placeholder="Reciept Name" id="reciept_name" class="form-control" value="{{$recieptdetails['reciept_name']}}">
                    </div>
                </div>
                <br><br><br>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="reciept_total">Reciept Total: </label>
                    <div class="col-sm-4">
                        <input type="text" name="reciept_total" placeholder="Reciept Total" id="reciept_total" class="form-control" value="{{$recieptdetails['reciept_total']}}">
                    </div>
                </div>
                <br><br><br>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="vendor_name">Vendor Name: </label>
                    <div class="col-sm-4">
                        <input type="text" name="vendor_name" placeholder="Vendor Name" id="vendor_name" class="form-control" value="{{$recieptdetails['vendor_name']}}">
                    </div>
                </div>
                <br><br><br>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="date">Date: </label>
                    <div class="col-sm-4">
                        <input type="date" name="date" placeholder="Date" id="date" class="form-control" value="{{$recieptdetails['date']}}">
                    </div>
                </div>
                <br><br>

                {{--item div starts here--}}
                <div class="form-group" id="formGroup1">
                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item1_name">Item1: </label>
                            <div class="col-sm-3">
                                <input type="text" name="Item1_name" placeholder="Item1 Name" id="Item1_name" class="form-control" value="{{$recieptdetails['Item1_name']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_quantity">Item1 Quantity: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item1_quantity" placeholder="Item1 Quantity" id="Item1_quantity" class="form-control" value="{{$recieptdetails['Item1_quantity']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_price">Item1 Price: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item1_price" placeholder="Item1 Price" id="Item1_price" class="form-control" value="{{$recieptdetails['Item1_price']}}">
                            </div>

                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item1_name">Item2: </label>
                            <div class="col-sm-3">
                                <input type="text" name="Item2_name" placeholder="Item2 Name" id="Item2_name" class="form-control" value="{{$recieptdetails['Item2_name']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_quantity">Item1 Quantity: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item2_quantity" placeholder="Item2 Quantity" id="Item2_quantity" class="form-control" value="{{$recieptdetails['Item2_quantity']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_price">Item1 Price: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item2_price" placeholder="Item2 Price" id="Item2_price" class="form-control" value="{{$recieptdetails['Item2_price']}}">
                            </div>

                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item1_name">Item3: </label>
                            <div class="col-sm-3">
                                <input type="text" name="Item3_name" placeholder="Item3 Name" id="Item3_name" class="form-control" value="{{$recieptdetails['Item3_name']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_quantity">Item1 Quantity: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item3_quantity" placeholder="Item3 Quantity" id="Item3_quantity" class="form-control" value="{{$recieptdetails['Item3_quantity']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_price">Item1 Price: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item3_price" placeholder="Item3 Price" id="Item3_price" class="form-control" value="{{$recieptdetails['Item3_price']}}">
                            </div>

                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item1_name">Item4: </label>
                            <div class="col-sm-3">
                                <input type="text" name="Item4_name" placeholder="Item4 Name" id="Item4_name" class="form-control" value="{{$recieptdetails['Item4_name']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_quantity">Item1 Quantity: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item4_quantity" placeholder="Item4 Quantity" id="Item4_quantity" class="form-control" value="{{$recieptdetails['Item4_quantity']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_price">Item1 Price: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item4_price" placeholder="Item4 Price" id="Item4_price" class="form-control" value="{{$recieptdetails['Item4_price']}}">
                            </div>

                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item1_name">Item5: </label>
                            <div class="col-sm-3">
                                <input type="text" name="Item5_name" placeholder="Item5 Name" id="Item5_name" class="form-control" value="{{$recieptdetails['Item5_name']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_quantity">Item1 Quantity: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item5_quantity" placeholder="Item5 Quantity" id="Item5_quantity" class="form-control" value="{{$recieptdetails['Item5_quantity']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_price">Item1 Price: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item5_price" placeholder="Item5 Price" id="Item5_price" class="form-control" value="{{$recieptdetails['Item5_price']}}">
                            </div>

                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item1_name">Item6: </label>
                            <div class="col-sm-3">
                                <input type="text" name="Item6_name" placeholder="Item6 Name" id="Item6_name" class="form-control" value="{{$recieptdetails['Item6_name']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_quantity">Item1 Quantity: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item6_quantity" placeholder="Item6 Quantity" id="Item6_quantity" class="form-control" value="{{$recieptdetails['Item6_quantity']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_price">Item1 Price: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item6_price" placeholder="Item6 Price" id="Item6_price" class="form-control" value="{{$recieptdetails['Item6_price']}}">
                            </div>

                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item1_name">Item7: </label>
                            <div class="col-sm-3">
                                <input type="text" name="Item7_name" placeholder="Item7 Name" id="Item7_name" class="form-control" value="{{$recieptdetails['Item7_name']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_quantity">Item1 Quantity: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item7_quantity" placeholder="Item7 Quantity" id="Item7_quantity" class="form-control" value="{{$recieptdetails['Item7_quantity']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_price">Item1 Price: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item7_price" placeholder="Item7 Price" id="Item7_price" class="form-control" value="{{$recieptdetails['Item7_price']}}">
                            </div>

                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item1_name">Item8: </label>
                            <div class="col-sm-3">
                                <input type="text" name="Item8_name" placeholder="Item8 Name" id="Item8_name" class="form-control" value="{{$recieptdetails['Item8_name']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_quantity">Item1 Quantity: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item8_quantity" placeholder="Item8 Quantity" id="Item8_quantity" class="form-control" value="{{$recieptdetails['Item8_quantity']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_price">Item1 Price: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item8_price" placeholder="Item8 Price" id="Item8_price" class="form-control" value="{{$recieptdetails['Item8_price']}}">
                            </div>

                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item1_name">Item9: </label>
                            <div class="col-sm-3">
                                <input type="text" name="Item9_name" placeholder="Item9 Name" id="Item9_name" class="form-control" value="{{$recieptdetails['Item9_name']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_quantity">Item1 Quantity: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item9_quantity" placeholder="Item9 Quantity" id="Item9_quantity" class="form-control" value="{{$recieptdetails['Item9_quantity']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_price">Item1 Price: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item9_price" placeholder="Item9 Price" id="Item9_price" class="form-control" value="{{$recieptdetails['Item9_price']}}">
                            </div>

                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item1_name">Item10: </label>
                            <div class="col-sm-3">
                                <input type="text" name="Item10_name" placeholder="Item10 Name" id="Item10_name" class="form-control" value="{{$recieptdetails['Item10_name']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_quantity">Item1 Quantity: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item10_quantity" placeholder="Item10 Quantity" id="Item10_quantity" class="form-control" value="{{$recieptdetails['Item10_quantity']}}">
                            </div>

                            {{--<label class="control-label col-sm-2" for="item1_price">Item1 Price: </label>--}}
                            <div class="col-sm-3">
                                <input type="text" name="Item10_price" placeholder="Item10 Price" id="Item10_price" class="form-control" value="{{$recieptdetails['Item10_price']}}">
                            </div>

                        </div>
                    </div>
                    <br>

                </div>
                {{--item div ends here--}}

                <div class="form-group">
                    <label class="control-label col-sm-2" for="itemTotal">Item Total: </label>
                    <div class="col-sm-4">
                        <input type="text" name="reciept_total" placeholder="reciept total " id="reciept_total" class="form-control" value="{{$recieptdetails['reciept_total']}}">

{{--                        {{$recieptdetails['reciept_total']}}--}}
                    </div>
                </div>
                <br><br><br>

                {{--<div class="form-group">--}}
                {{--<label class="control-label col-sm-2" for="date">Date: </label>--}}
                {{--<div class="col-sm-3"></div>--}}
                {{--</div>--}}
                {{--<br><br>--}}

                {{--<div class="form-group">--}}
                {{--<label class="control-label col-sm-2" for="totalCost">Pic: </label>--}}
                {{--<div class="col-sm-3"></div>--}}
                {{--</div>--}}
                {{--<br><br>--}}

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-2">
                        <button type="button" class="btn btn-success form-control" name="button">Back</button>
                        <button type="submit" class="btn btn-success form-control" name="button">Update</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection