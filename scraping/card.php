<?php
$username = $_POST['username'];
$password = $_POST['password'];
if ($username == 'admin' && $password == '12345') {
} else {
    echo "You are not admin!";
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Card</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Card Information</h2>

        <div class="form-group">
            <label for="email">Card Number:</label>
            <input type="text" class="form-control" id="number" placeholder="Enter Card Number" name="number">
        </div>
        <button id="btn_getdata" class="btn btn-succes">Get Information</button>
        <div id="result"></div>
        <a href="list.php"> <button class="btn btn-primary">See All Informations</button></a>
    </div>

</body>

</html>


<script>
$(document).ready(function() {
    $("button#btn_getdata").click(function() {
        var number = $("#number").val();
        var url = 'https://lookup.binlist.net/' + number;
        $("#result").text('Scraping.... please wait some seconds');
        $.ajax({
            url: 'https://lookup.binlist.net/' + number,
            type: 'get',
            success: function (json) {
                json.bin = number;
                var date = new Date();
                json.date = ( date.getMonth() + 1 ) + '/' + date.getDate();
                $.ajax({url: 'save.php', type: 'post', data: {data: json}});
                var text = `<p>BIN: ${number}</p><p>Scheme: ${json.scheme}</p><p>Type: ${json.type}</p><p>Brand: ${json.brand}</p><p>Prepaid: ${json.prepaid}</p><p>Country: ${json.country.name}</p><p>Bank: ${json.bank.name}</p><p>Phone: ${json.bank.phone}`;
                $("#result").html(text);
            },
            error: function () {
                console.log('error');
            }
        });
    });
});
</script>