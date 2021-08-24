var msbtn = document.querySelector('.ms-btn');
var uploadfilebtn = document.querySelector('.uploadfile-btn');
var inputchat = document.querySelector('.inputchat');
var chatupload = document.querySelector('.chatupload');

uploadfilebtn.addEventListener('click', ()=>{
    chatupload.style.display = "block";
    inputchat.style.display = "none";
    inputchat.style.width = "0px";
    uploadfilebtn.style.display = "none";
    msbtn.style.display = "flex";
});
msbtn.addEventListener('click', ()=>{
    chatupload.style.display = "none";
    msbtn.style.display = "none";
    uploadfilebtn.style.display = "flex";
    inputchat.style.display = "block";
    inputchat.style.width = "100%";
});


document.querySelector('.menubar').addEventListener('click', function () {
    document.querySelector('.nav-bar').classList.add('active');
});
document.querySelector('.dongnav').addEventListener('click', function () {
    document.querySelector('.nav-bar').classList.remove('active');
});

document.querySelector('.cup').addEventListener('click', function () {
    document.querySelector('.top-content').classList.add('active');
});
document.querySelector('.daylen').addEventListener('click', function () {
    document.querySelector('.top-content').classList.remove('active');
});