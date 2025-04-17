<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Calculator</title>
</head>
<body>
    <form action="action.php" method="POST">
        <div class="calculator card">
            <input type="text" id="display" name="display" class="calculator-screen z-depth-1 form-control" value="" />
            <div class="calculator-keys">
                <button  type="button" id="plus"  data-mdb-button-init class="operator btn btn-info" value="+">+</button>
                <button  type="button" id="minus" data-mdb-button-init class="operator btn btn-info" value="-">-</button>
                <button  type="button" id="multiple" data-mdb-button-init class="operator btn btn-info" value="*">&times;</button>
                <button  type="button" id="divide" data-mdb-button-init class="operator btn btn-info" value="/">&divide;</button>

                <button  type="button" id="seven"  data-mdb-button-init value="7" data-mdb-ripple-init class="btn btn-light waves-effect">7</button>
                <button  type="button" id="eight"  data-mdb-button-init value="8" data-mdb-ripple-init class="btn btn-light waves-effect">8</button>
                <button  type="button" id="nine"  data-mdb-button-init value="9" data-mdb-ripple-init class="btn btn-light waves-effect">9</button>


                <button  type="button" id="four"  data-mdb-button-init value="4" data-mdb-ripple-init class="btn btn-light waves-effect">4</button>
                <button  type="button" id="five"  data-mdb-button-init value="5" data-mdb-ripple-init class="btn btn-light waves-effect">5</button>
                <button  type="button" id="six"  data-mdb-button-init value="6" data-mdb-ripple-init class="btn btn-light waves-effect">6</button>


                <button  type="button" id="one"  data-mdb-button-init value="1" data-mdb-ripple-init class="btn btn-light waves-effect">1</button>
                <button  type="button" id="two"  data-mdb-button-init value="2" data-mdb-ripple-init class="btn btn-light waves-effect">2</button>
                <button  type="button" id="three"  data-mdb-button-init value="3" data-mdb-ripple-init class="btn btn-light waves-effect">3</button>


                <button  type="button" id="zero"  data-mdb-button-init value="0" data-mdb-ripple-init class="btn btn-light waves-effect">0</button>
                <button  type="button" id="dot" data-mdb-button-init class="decimal function btn btn-secondary" value=".">.</button>
                <button  type="button" id="clear"  data-mdb-button-init class="all-clear function btn btn-danger btn-sm" value="all-clear">AC</button>

                <button  type="submit" id="equal"  data-mdb-button-init class="equal-sign operator btn btn-info" value="=">=</button>
            </div>
        </div>
    </form>
    <script>
        function disableEnableCommonFunction(check){
            $("#plus").attr("disabled", check);
            $("#minus").attr("disabled", check);
            $("#multiple").attr("disabled", check);
            $("#divide").attr("disabled", check);
            $("#dot").attr("disabled", check);
            $("#equal").attr("disabled", check);
        }
        $(document).on('click', '#one', function myFunction() {
            exit_text = $("#display").val();
            $("#display").val(exit_text+"1");
            disableEnableCommonFunction(false);
        });
        $(document).on('click', '#two', function myFunction() {
            exit_text = $("#display").val();
            $("#display").val(exit_text+"2");
            disableEnableCommonFunction(false);
        });
        $(document).on('click', '#three', function myFunction() {
            exit_text = $("#display").val();
            $("#display").val(exit_text+"3");
            disableEnableCommonFunction(false);
        });
        $(document).on('click', '#four', function myFunction() {
            exit_text = $("#display").val();
            $("#display").val(exit_text+"4");
            disableEnableCommonFunction(false);
        });
        $(document).on('click', '#five', function myFunction() {
            exit_text = $("#display").val();
            $("#display").val(exit_text+"5");
            disableEnableCommonFunction(false);
        });
        $(document).on('click', '#six', function myFunction() {
            exit_text = $("#display").val();
            $("#display").val(exit_text+"6");
            disableEnableCommonFunction(false);
        });
        $(document).on('click', '#seven', function myFunction() {
            exit_text = $("#display").val();
            $("#display").val(exit_text+"7");
            disableEnableCommonFunction(false);
        });
        $(document).on('click', '#eight', function myFunction() {
            exit_text = $("#display").val();
            $("#display").val(exit_text+"8");
            disableEnableCommonFunction(false);
        });
        $(document).on('click', '#nine', function myFunction() {
            exit_text = $("#display").val();
            $("#display").val(exit_text+"9");
            disableEnableCommonFunction(false);
        });
        $(document).on('click', '#zero', function myFunction() {
            exit_text = $("#display").val();
            $("#display").val(exit_text+"0");
            disableEnableCommonFunction(false);
        });
        $(document).on('click', '#dot', function myFunction() {
            exit_text = $("#display").val();
            $("#display").val(exit_text+".");
            $("#plus").attr("disabled", false);
            $("#minus").attr("disabled", false);
            $("#multiple").attr("disabled", false);
            $("#divide").attr("disabled", false);
            $("#dot").attr("disabled", true);
            $("#equal").attr("disabled", false);
        });

        $(document).on('click', '#plus', function myFunction() {
            exit_text = $("#display").val();
            $("#display").val(exit_text+"+");
            $("#plus").attr("disabled", true);
            $("#minus").attr("disabled", true);
            $("#multiple").attr("disabled", true);
            $("#divide").attr("disabled", true);
            $("#equal").attr("disabled", true);
        });
        $(document).on('click', '#minus', function myFunction() {
            exit_text = $("#display").val();
            $("#display").val(exit_text+"-");
            $("#plus").attr("disabled", true);
            $("#minus").attr("disabled", true);
            $("#multiple").attr("disabled", true);
            $("#divide").attr("disabled", true);
            $("#equal").attr("disabled", true);
        });
        $(document).on('click', '#multiple', function myFunction() {
            exit_text = $("#display").val();
            $("#display").val(exit_text+"*");
            $("#plus").attr("disabled", true);
            $("#minus").attr("disabled", true);
            $("#multiple").attr("disabled", true);
            $("#divide").attr("disabled", true);
            $("#equal").attr("disabled", true);
        });
        $(document).on('click', '#divide', function myFunction() {
            exit_text = $("#display").val();
            $("#display").val(exit_text+"÷");
            $("#plus").attr("disabled", true);
            $("#minus").attr("disabled", true);
            $("#multiple").attr("disabled", true);
            $("#divide").attr("disabled", true);
            $("#equal").attr("disabled", true);
        });

        $(document).on('click', '#clear', function myFunction() {
            $("#display").val("");
            window.location.href = "http://localhost/calculator/index.php";
        });


        $(document).ready(function(){
            var searchParams = new URLSearchParams(window.location.search);
            if(searchParams.size > 0){
                var query = window.location.search.substring(1);
                var parms = query.split('=');
                $("#display").val(parms[1]);
                $("#one").attr("disabled", true);
                $("#two").attr("disabled", true);
                $("#three").attr("disabled", true);
                $("#four").attr("disabled", true);
                $("#five").attr("disabled", true);
                $("#six").attr("disabled", true);
                $("#seven").attr("disabled", true);
                $("#eight").attr("disabled", true);
                $("#nine").attr("disabled", true);
                $("#zero").attr("disabled", true);
                $("#dot").attr("disabled", true);
                $("#plus").attr("disabled", true);
                $("#minus").attr("disabled", true);
                $("#multiple").attr("disabled", true);
                $("#divide").attr("disabled", true);
                $("#equal").attr("disabled", true);
                $("#clear").css("border", "2px solid black");
            }
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>