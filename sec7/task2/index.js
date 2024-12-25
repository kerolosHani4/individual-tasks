let content = document.querySelector(".content h2");
let style = document.querySelector(".style h2");
let fB = document.querySelector(".content button");
let cBx = document.querySelector(".style button");
let inp= document.querySelector("input");
let out= document.querySelector(".out");
fB.onclick= function(){
    out.innerHTML=  `${inp.value} Celsius is equivalent to ${(9*inp.value/5.0)+32} Fahrenheit`;
}
cBx.onclick= function(){
    out.innerHTML=  `${inp.value} Fahrenheit is equivalent to ${parseInt((5.0/9)*(inp.value - 32))} Celsius`;
    console.log("sgg")
    
}
