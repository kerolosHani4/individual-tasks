window.onload = ()=>window.alert("hello world!");
// document.write("kerolos hany")

let text = document.querySelector("#para");
para.style.color = "orange";

console.log(text);

let Name = document.getElementsByClassName("name")[0];
Name.style.cssText = ` color:gray`;
Name.innerHTML += " haleem <span>!?</span> ";


let button = document.querySelector("button");
let i = 20;
let y = document.createElement("div");
y.className = "parant";
document.body.appendChild(y);

button.onclick = function () {
  let x = document.createElement("div");
  x.appendChild(document.createTextNode("keroooooo"));
  y.appendChild(x);
  x.style.backgroundColor = `rgb(${i}, 90, 29)`;
  x.classList.add("myname");
  i += 50;
  if (i > 255) {
    i = 20;
  }
};
