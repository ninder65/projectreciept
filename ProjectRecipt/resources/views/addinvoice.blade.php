{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
@extends('layouts.master')

@section('content')
    {{--pagetitle starts here--}}
    <div class="row text-center">
        <div class="col-sm-12"><h2>Add New Invoice</h2></div>
    </div>
    {{--pagetitle ends here--}}

    <div class="row">
        {{--search starts here--}}
        <div class="col-sm-12">
            <form class="form1" method="post" action="">
                {{ csrf_field() }}
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <li> {{ $error }}</li>
                    @endforeach
                @endif

                <div class="form-group">
                    <label class="control-label col-sm-2" for="vendorName">Reciept Name: </label>
                    <div class="col-sm-4">
                        <input type="text" name="reciept_name" placeholder="Reciept Name" id="reciept_name" class="form-control" value="{{ Request::old('reciept_name') }}">
                    </div>
                </div>
                <br><br><br>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="recieptTotal">Receipt Total: </label>
                    <div class="col-sm-4">
                        <input type="text" name="reciept_total" placeholder="Reciept Total" id="reciept_total" value="{{ Request::old('reciept_total') }}" class="form-control">
                    </div>
                </div>
                <br><br>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="recieptCategory">Vendor name: </label>
                    <div class="col-sm-4">
                        <input type="text" name="vendor_name" placeholder="vendor name" id="vendor_name" value="{{ Request::old('vendor_name') }}" class="form-control">
                    </div>
                </div>
                <br><br>

                <div class="form-group">
                <label class="control-label col-sm-2" for="date">Date: </label>
                <div class="col-sm-3">
                <input type="date" name="date" placeholder="DD/MM/YYYY" min="2000-01-02" id="date" value="{{ Request::old('date') }}" class="form-control">
                </div>
                </div>
                <br><br>




                {{--item div starts here--}}
                <div class="form-group" id="formGroup1">
                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="itemName">Item Name1: </label>
                            <div class="col-sm-3">
                                <input type="text" name="item1_name" placeholder="Item Name" id="item1_name" value="{{ Request::old('item1_name') }}" class="form-control">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item1_quantity" placeholder="Item Quantity" id="item1_quantity" class="form-control" value="{{ Request::old('item1_quantity') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item1_price" placeholder="Item Price" id="item1_price" class="form-control" value="{{ Request::old('item1_price') }}">
                            </div>

                            {{--<div class="col-sm-2">--}}
                                {{--<button type="button" class="btn btn-warning" id="addMoreItem">Add More Item</button>--}}
                            {{--</div>--}}

                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="itemName">Item Name2: </label>
                            <div class="col-sm-3">
                                <input type="text" name="item2_name" placeholder="Item Name" id="item2_name" class="form-control" value="{{ Request::old('item2_name') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item2_quantity" placeholder="Item Quantity" id="item2_quantity" class="form-control" value="{{ Request::old('item2_quantity') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item2_price" placeholder="Item Price" id="item2_price" class="form-control" value="{{ Request::old('item2_price') }}">
                            </div>

                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="itemName">Item Name3: </label>
                            <div class="col-sm-3">
                                <input type="text" name="item3_name" placeholder="Item Name" id="item3_name" class="form-control" value="{{ Request::old('item3_name') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item3_quantity" placeholder="Item Quantity" id="item3_quantity" class="form-control" value="{{ Request::old('item3_quantity') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item3_price" placeholder="Item Price" id="item3_price" class="form-control" value="{{ Request::old('item3_price') }}">
                            </div>

                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="itemName">Item Name4: </label>
                            <div class="col-sm-3">
                                <input type="text" name="item4_name" placeholder="Item Name" id="item4_name" class="form-control" value="{{ Request::old('item4_name') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item4_quantity" placeholder="Item Quantity" id="item4_quantity" class="form-control" value="{{ Request::old('item4_quantity') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item4_price" placeholder="Item Price" id="item2_price" class="form-control" value="{{ Request::old('item2_price') }}">
                            </div>

                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="itemName">Item Name5: </label>
                            <div class="col-sm-3">
                                <input type="text" name="item5_name" placeholder="Item Name" id="item5_name" class="form-control" value="{{ Request::old('item5_name') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item5_quantity" placeholder="Item Quantity" id="item5_quantity" class="form-control" value="{{ Request::old('item5_quantity') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item5_price" placeholder="Item Price" id="item5_price" class="form-control" value="{{ Request::old('item5_price') }}">
                            </div>

                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="itemName">Item Name6: </label>
                            <div class="col-sm-3">
                                <input type="text" name="item6_name" placeholder="Item Name" id="item6_name" class="form-control" value="{{ Request::old('item6_name') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item6_quantity" placeholder="Item Quantity" id="item6_quantity" class="form-control" value="{{ Request::old('item6_quantity') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item6_price" placeholder="Item Price" id="item6_price" class="form-control" value="{{ Request::old('item6_price') }}">
                            </div>

                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="itemName">Item Name7: </label>
                            <div class="col-sm-3">
                                <input type="text" name="item7_name" placeholder="Item Name" id="item7_name" class="form-control" value="{{ Request::old('item7_name') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item7_quantity" placeholder="Item Quantity" id="item7_quantity" class="form-control" value="{{ Request::old('item7_quantity') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item7_price" placeholder="Item Price" id="item7_price" class="form-control" value="{{ Request::old('item7_price') }}">
                            </div>

                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="itemName">Item Name8: </label>
                            <div class="col-sm-3">
                                <input type="text" name="item8_name" placeholder="Item Name" id="item8_name" class="form-control" value="{{ Request::old('item8_name') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item8_quantity" placeholder="Item Quantity" id="item8_quantity" class="form-control" value="{{ Request::old('item8_quantity') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item8_price" placeholder="Item Price" id="item8_price" class="form-control" value="{{ Request::old('item8_price') }}">
                            </div>

                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="itemName">Item Name9: </label>
                            <div class="col-sm-3">
                                <input type="text" name="item9_name" placeholder="Item Name" id="item9_name" class="form-control" value="{{ Request::old('item9_name') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item9_quantity" placeholder="Item Quantity" id="item9_quantity" class="form-control" value="{{ Request::old('item9_quantity') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item9_price" placeholder="Item Price" id="item9_price" class="form-control" value="{{ Request::old('item9_price') }}">
                            </div>

                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <label class="control-label col-sm-2" for="itemName">Item Name10: </label>
                            <div class="col-sm-3">
                                <input type="text" name="item10_name" placeholder="Item Name" id="item10_name" class="form-control" value="{{ Request::old('item10_name') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item10_quantity" placeholder="Item Quantity" id="item10_quantity" class="form-control" value="{{ Request::old('item10_quantity') }}">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="item10_price" placeholder="Item Price" id="item10_price" class="form-control" value="{{ Request::old('item10_price') }}">
                            </div>

                        </div>
                    </div>

                </div>
                {{--item div ends here--}}

                <div class="form-group">
                    <label class="control-label col-sm-2" for="itemTotal">Total Price: </label>
                    <div class="col-sm-4">
                        <input type="text" name="itemTotal" placeholder="Item Total" id="itemTotal" class="form-control" value="{{ Request::old('itemTotal') }}">
                    </div>
                </div>
                <br><br><br>

                {{--<div class="form-group">--}}
                    {{--<label class="control-label col-sm-2" for="date">Date: </label>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<input type="date" name="date" placeholder="DD/MM/YYYY" min="2000-01-02" id="date" class="form-control">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<br><br>--}}

                {{--<div class="form-group">--}}
                    {{--<label class="control-label col-sm-2" for="totalCost">Pic: </label>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<input type="file" name="pic" placeholder="Pic" id="pic" class="form-control">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<br><br>--}}

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-2">
                        <button type="submit" class="btn btn-success form-control" name="submit">Upload Reciept</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection

{{--testting starts--}}

{{--add div, class attribute, value form-group--}}
{{--add label element, class attribute, for attribute--}}


{{--<div class="form-group">--}}
{{--<label class="control-label col-sm-3" for="itemQuantity">Item Qunatity: </label>--}}
{{--<div class="col-sm-9">--}}
{{--<input type="text" name="itemQuantity" placeholder="Item Quantity" id="itemQuantity" class="form-control">--}}
{{--</div>--}}
{{--</div>--}}
{{--<br><br>--}}

{{--testting starts--}}
{{--<div id='TextBoxesGroup'>--}}
{{--<div id="TextBoxDiv1">--}}
{{--<label for="textbox1">Textbox #1 : </label>--}}
{{--<input type='text' id='textbox1' >--}}
{{--</div>--}}
{{--</div>--}}
{{--<br><br>--}}
{{--<input type='button' value='Add Button' id='addButton'>--}}
{{--<input type='button' value='Remove Button' id='removeButton'>--}}
{{--<input type='button' value='Get TextBox Value' id='getButtonValue'>--}}
{{--testing ends--}}

{{--<script>--}}
    {{--$(document).ready(function(){--}}
        {{--var counter = 2;--}}

        {{--$("#addMoreItem").click(function () {--}}

            {{--if(counter>10){--}}
                {{--alert("Only 10 Lists allow");--}}
                {{--return false;--}}
            {{--}--}}

            {{--var createdivcolsm41 = $(document.createElement('div')).attr('class','col-sm-4');--}}

            {{--createdivcolsm41.after().html('<input type="text" name="itemName' + counter + '" id="itemName' + counter + '" placeholder="Item Name" class="form-control">');--}}

            {{--var createdivcolsm42 = $(document.createElement('div')).attr('class','col-sm-4');--}}

            {{--createdivcolsm42.after().html('<input type="text" name="itemQuantity' + counter + '" id="itemQuantity' + counter + '" placeholder="Item Quantity" class="form-control">');--}}

            {{--var createdivcolsm12 = $(document.createElement('div')).attr('class','col-sm-12');--}}

            {{--var appendtocolsm121 = createdivcolsm41.appendTo(createdivcolsm12);--}}

            {{--var appendtocolsm122 = createdivcolsm42.appendTo(createdivcolsm12);--}}

            {{--var row1 = $(document.createElement('div')).attr('class','row');--}}

            {{--var appendtorow1 = createdivcolsm41.appendTo(row1);--}}

            {{--var appendtorow2 = createdivcolsm42.appendTo(createdivrow1);--}}

            {{--appendtorow1.appendTo('#formGroup1');--}}

            {{--appendtorow2.appendTo('#formGroup1');--}}

            {{--counter++;--}}

        {{--});--}}

        {{--$("#removeButton").click(function () {--}}
            {{--if(counter==1){--}}
{{--//                alert("No more textbox to remove");--}}
{{--//                return false;--}}
{{--//            }--}}
{{--//--}}
{{--//            counter--;--}}
{{--//--}}
{{--//            $("#TextBoxDiv" + counter).remove();--}}
{{--//--}}
{{--//        });--}}
{{----}}
{{--//        $("#addMoreItem").click(function () {--}}
{{--//--}}
{{--//            var msg = '';--}}
{{--//            for(i=1; i<counter; i++){--}}
{{--//                msg += "\n Textbox #" + i + " : " + $('#itemName' + i).val();--}}
{{--//            }--}}
{{--//            alert(msg);--}}
{{--//        });--}}
    {{--});--}}
{{--//</script>--}}

{{--//testting ends--}}
