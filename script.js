let counter = document.getElementById("contador");
let count = 5;


setInterval(()=>{
    counter.innerText = count;
    count--
},1000)