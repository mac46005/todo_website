
var elTime = document.getElementById('time');
function show_Time(){
    setInterval(() => {
        var today = new Date();
        var hr = today.getHours();
        var minute = today.getMinutes();
        var seconds = today.getSeconds();
        elTime.innerHTML = `${today.getDate()}/${today.getMonth()}/${today.getFullYear()}`;
        elTime.innerHTML += "<br/>";
        elTime.innerText += `${hr}:${minute}:${seconds}`;
    },1000)
}

show_Time();