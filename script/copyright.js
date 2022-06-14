let elCopyRight = document.getElementById('copyright');
let date = new Date().getFullYear();
elCopyRight.innerHTML = "ToDo List &copy;"
elCopyRight.innerText += ` ${date}`;