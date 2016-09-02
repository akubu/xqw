var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);
var redis = require('redis');
var mysql=require('mysql');
server.listen(8899);
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'akshay',
  password : 'abcd',
  database : 'notification'
});



io.on('connection', function (socket) {


  console.log("new client connected");

  var redisClient = redis.createClient();
  redisClient.subscribe('message');
  //connection.connect();
  redisClient.on("message", function(channel, message) {
    // INSERT INTO table_name
    // VALUES (value1,value2,value3,...);
    
    connection.query('INSERT into `notifications`(`username`,`text`) values ("' + message.username  + '","' + message.text  + '")', function(err, rows, fields) {
      if(err)
      {
        console.log(err);
      }
    });

    // connection.query('SELECT * from messages', function(err,results) {
    //   if (!err) {
    //     console.log('The solution is: ', results);
    //     console.log("mew message in queue " + message + "channel");
    //     var response={
    //         length:results.length,
    //         data:results
    //     };
    //     socket.emit(channel, response);
    //   }
    //   else
    //     console.log('Error while performing Query.');
    //   //connection.end();
    // });

    
  });

  socket.on('disconnect', function() {
    redisClient.quit();
  });
  
});

