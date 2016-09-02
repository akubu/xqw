<?php
        use App\Models\Notification;
?>

<html>
<body>
<h1>{{$username}}'s Home Page</h1>
<a   href="logout">Logout</a>
<span id="messages">

<?php
foreach(Notification::all() as $n)
{
    if($n->username==$username){
        echo $n->text . '<br>';
    }
}
    ?>

</span>

<form action="/notification/public/index.php/sendMessage" method="POST">
    <input type="text" name="text" >
    <input type="text" name="username" value="{{$username}}" hidden>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="send">
</form>

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdn.socket.io/socket.io-1.3.4.js"></script>
<script>
    var socket = io.connect('http://localhost:8899');

//    socket.on('message', function (data) {
//        $( "#messages" ).append( "<p>"+data+"</p>" );
//    });

</script>


</body>
