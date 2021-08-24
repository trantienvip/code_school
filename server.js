var express = require('express');
var app = express();

var server = require('http').createServer(app);

var io = require('socket.io')(server);

app.get('/tien', (req, res,ext)=>{
    res.sendFile(__dirname + "/public/index.html");
});

app.use(express.static('public'));

io.on('connection', (client)=>{
    console.log('Client connect ....');
    client.on('join', (data)=>{
        console.log(data);
    });

    client.on('message', (data)=>{
        client.emit('chatchit', data);
        client.broadcast.emit('chatchit', data);
    });
});

server.listen(8080);