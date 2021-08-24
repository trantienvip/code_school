var socket = io.connect('http://localhost:8000');

socket.on('connect', (data)=>{
    socket.emit('join', 'ket noi toi may chu ne');
});

socket.on('chatchit', (data)=>{
    $('#chatchit').append(`<div class="chatcn"><img src="https://i.ibb.co/SKPC0Hk/image.png" alt=""><p>` + data + `</p></div>`);
});

$('form').submit(function() {
    var message = $('#message').val();
    socket.emit('message', message);
    this.reset();

    return false;
});