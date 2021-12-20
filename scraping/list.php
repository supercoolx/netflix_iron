<?php
$data = file_get_contents('db.json');
// $data = file_get_contents('http://localhost:4000/loaddata');
$data = json_decode($data);
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
    <div class="navbar navbar-default navbar-fixed-top affix" role="navigation" data-spy="affix" data-offset-top="50" style="background: linear-gradient(to right, #1e5799 0%, #2989d8 0%,#42e595 0%, #3bb2b8 100%); box-shadow: 0 3px 15px 0 rgb(0 0 0 / 15%);">
        <div class="container">
            <!--Mobile navigation & logo-->
            <div class="navbar-header">
                <h1 style="color: white; font-family: arial black;">Netflix.com</h1>                    
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 60px">
        <h2 style="font-family: arial black;">All Cards Information<button class="btn btn-success btn-download pull-right" onclick="fnExcelReport();">download</button></h2>
        <table class="table table-striped" id="datatable">
            <thead style="font-family: cambria; font-size: large;">
                <tr class="info">
                    <th>No</th>
                    <th>Date</th>
                    <th>Number</th>
                    <th>Scheme</th>
                    <th>Type</th>
                    <th>Brand</th>
                    <th>Country</th>
                    <th>Bank</th>
                </tr>
            </thead>
            <tbody style="font-family: calibri; font-size: larger;">
                <?php
                    $i = 0;
                    foreach ($data as $obj) {
                ?>
                    <tr>
                        <td><?= ++$i ?></td>
                        <td><?= $obj->date ?></td>
                        <td><?php echo $obj->bin; ?></td>
                        <td><?php echo $obj->scheme; ?></td>
                        <td><?php echo $obj->type; ?></td>
                        <td><?php echo $obj->brand; ?></td>
                        <td><?php echo $obj->country->name; ?></td>
                        <td><?php if(isset($obj->bank->name)) echo $obj->bank->name; ?></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <iframe id="txtAreal" style="display: none;"></iframe>
</body>

</html>


<script>
function fnExcelReport()
{
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange; var j=0;
    tab = document.getElementById('datatable'); // id of table

    for(j = 0 ; j < tab.rows.length ; j++) 
    {     
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        //tab_text=tab_text+"</tr>";
    }

    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE "); 

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
    {
        txtArea1.document.open("txt/html","replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
    }  
    else                 //other browser not tested on IE 11
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

    return (sa);
}
</script>