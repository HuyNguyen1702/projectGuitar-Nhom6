let time = 4;

const count = document.getElementById("count");

setInterval(updateTime,1000);

function updateTime(){
    count.innerHTML = `${time}`;
    time--;
}