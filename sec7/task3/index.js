let content = document.querySelector(".content h2");
let style = document.querySelector(".style h2");
let fB = document.querySelector(".content button");
let cB = document.querySelector(".style button");
let inp= document.querySelector("input");
let out= document.querySelector(".out");
let list= document.querySelector("ul");

cB.onclick= function(){
let item =document.createElement("li");
item.appendChild(document.createTextNode(`${inp.value}`))
list.appendChild(item);
}
