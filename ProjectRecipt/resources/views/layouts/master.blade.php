<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="{{ asset('css/masterstyle.css') }}" rel="stylesheet">


@if( Auth::user()->firstname)


    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav" style="">
                <a href="../home" style="color: #fff;text-decoration: none;"><p class="left-pane" style="margin-top: 5em;">All invoices</p></a>
                <a href="../addinvoice" style="color: #fff;text-decoration: none;"><p class="left-pane">Add New Invoice</p></a>
                <a href="../statistics" style="color: #fff;text-decoration: none;"><p class="left-pane">Statistics</p></a>
            </div>

            <div class="col-sm-1"></div>

            <div class="col-sm-8 text-left right-container">
                {{--body section comes here--}}
                {{--@section('body')--}}
                {{--@show--}}
                @yield('content')
            </div>

            <div class="col-sm-1"></div>
        </div>

    </div>
    {{--container ends--}}

    {{--footer starts--}}
    <footer class="text-center">
        <p>Copyright &copy;2017</p>
    </footer>
    {{--footer ends--}}

    <script>
        function myFunction() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function sortTable() {
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("myTable");
            switching = true;
            /*Make a loop that will continue until
             no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.getElementsByTagName("TR");
                /*Loop through all table rows (except the
                 first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                     one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[0];
                    y = rows[i + 1].getElementsByTagName("TD")[0];
                    //check if the two rows should switch place:
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch= true;
                        break;
                    }
                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                     and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
        }
    </script>




@endif


