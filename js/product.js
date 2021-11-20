function showBack() {
    let x = document.getElementById("imgFront");
    let y = document.getElementById("imgBack");
    if (y.style.display === "none") {
        y.style.display = "block";
        x.style.display = "none";
    }
}

function showFront() {
    let x = document.getElementById("imgFront");
    let y = document.getElementById("imgBack");
    if (y.style.display === "block") {
        x.style.display = "block";
        y.style.display = "none";
    }
}

// =============== NAVBAR HIDE =================

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
    document.getElementById("navbar-hide").style.top = "0";
  } else {
    document.getElementById("navbar-hide").style.top = "-80px";
  }
}

// ================== CART =====================

let count = 0;
function sub() {
    let number = document.getElementById("number").value;
    if (count == 0)
    {
        document.getElementById("sub").style.display ="disable";
    }
    else{
        count--;
        document.getElementById("number").value = count;
    }
}

function add() {
    let number = document.getElementById("number").value;
    count++;
    document.getElementById("number").value = count;
}

