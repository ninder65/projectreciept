{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
@extends('layouts.master')
{{--{{dd($recieptdetails)}}--}}
@section('content')
    {{--pagetitle starts here--}}
    <div class="row text-center">
        <div class="col-sm-12"><h2>Reciept Details</h2></div>
    </div>
    {{--pagetitle ends here--}}

    <div class="row">
        {{--search starts here--}}
        <div class="col-sm-12">
            <form class="form1">
                {{--$recieptdetails--}}
{{--                    {{ dd($recieptdetails) }}--}}


                <div class="form-group">
                    <label class="control-label col-sm-2" for="reciept_name">Reciept Name: </label>
                    <div class="col-sm-4">{{$recieptdetails['reciept_name']}}</div>
                </div>
                <br><br><br>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="reciept_total">Reciept Total: </label>
                    <div class="col-sm-4">{{$recieptdetails['reciept_total']}}</div>
                </div>
                <br><br><br>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="vendor_name">Vendor Name: </label>
                    <div class="col-sm-4">{{$recieptdetails['vendor_name']}}</div>
                </div>
                <br><br><br>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="date">Date: </label>
                    <div class="col-sm-4">{{$recieptdetails['date']}}</div>
                </div>
                <br><br>

                {{--item div starts here--}}
                <div class="form-group" id="formGroup1">
                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item1_name">Item1 Name: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item1_name']}}
                            </div>

                            <label class="control-label col-sm-2" for="item1_quantity">Item1 Quantity: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item1_quantity']}}
                            </div>

                            <label class="control-label col-sm-2" for="item1_price">Item1 Price: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item1_price']}}
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item2_name">Item2 Name: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item2_name']}}
                            </div>

                            <label class="control-label col-sm-2" for="item2_quantity">Item2 Quantity: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item2_quantity']}}
                            </div>

                            <label class="control-label col-sm-2" for="item2_price">Item2 Price: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item2_price']}}
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item3_name">Item3 Name: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item3_name']}}
                            </div>

                            <label class="control-label col-sm-2" for="item3_quantity">Item3 Quantity: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item3_quantity']}}
                            </div>

                            <label class="control-label col-sm-2" for="item3_price">Item3 Price: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item3_price']}}
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item4_name">Item4 Name: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item4_name']}}
                            </div>

                            <label class="control-label col-sm-2" for="item4_quantity">Item4 Quantity: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item4_quantity']}}
                            </div>

                            <label class="control-label col-sm-2" for="item4_price">Item4 Price: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item4_price']}}
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item5_name">Item5 Name: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item5_name']}}
                            </div>

                            <label class="control-label col-sm-2" for="item5_quantity">Item5 Quantity: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item5_quantity']}}
                            </div>

                            <label class="control-label col-sm-2" for="item5_price">Item5 Price: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item5_price']}}
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item6_name">Item6 Name: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item6_name']}}
                            </div>

                            <label class="control-label col-sm-2" for="item6_quantity">Item6 Quantity: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item6_quantity']}}
                            </div>

                            <label class="control-label col-sm-2" for="item6_price">Item6 Price: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item6_price']}}
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item7_name">Item7 Name: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item7_name']}}
                            </div>

                            <label class="control-label col-sm-2" for="item7_quantity">Item7 Quantity: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item7_quantity']}}
                            </div>

                            <label class="control-label col-sm-2" for="item7_price">Item7 Price: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item7_price']}}
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item8_name">Item8 Name: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item8_name']}}
                            </div>

                            <label class="control-label col-sm-2" for="item8_quantity">Item8 Quantity: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item8_quantity']}}
                            </div>

                            <label class="control-label col-sm-2" for="item8_price">Item8 Price: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item8_price']}}
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item9_name">Item9 Name: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item9_name']}}
                            </div>

                            <label class="control-label col-sm-2" for="item9_quantity">Item9 Quantity: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item9_quantity']}}
                            </div>

                            <label class="control-label col-sm-2" for="item9_price">Item9 Price: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item9_price']}}
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="item10_name">Item10 Name: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item10_name']}}
                            </div>

                            <label class="control-label col-sm-2" for="item10_quantity">Item10 Quantity: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item10_quantity']}}
                            </div>

                            <label class="control-label col-sm-2" for="item10_price">Item10 Price: </label>
                            <div class="col-sm-2">
                                {{$recieptdetails['item10_price']}}
                            </div>

                        </div>
                    </div>

                </div>
                {{--item div ends here--}}

                <div class="form-group">
                    <label class="control-label col-sm-2" for="itemTotal">Item Total: </label>
                    <div class="col-sm-4">
                        {{$recieptdetails['reciept_total']}}
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
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection