let box1Button = document.querySelector(`.box1 input[type="button"]`);
let box1inp = document.querySelector(`.box1 input[type="text"]`);
let box1out = document.querySelector(`.box1 .outbox1`);
box1Button.onclick = function () {
  console.log("sdv");
  let deg = box1inp.value;
  if (parseInt(deg) < 5) {
    box1out.style.cssText = `display:block;`;
    box1out.textContent = "bad";
    box1out.classList.add("box1out");
  } else if (parseInt(deg) < 8) {
    box1out.style.cssText = `display:block;`;
    box1out.textContent = "good";
    box1out.classList.add("box1out");
  } else if (parseInt(deg) <= 10) {
    box1out.style.cssText = `display:block;`;
    box1out.textContent = "very good";
    box1out.classList.add("box1out");
  } else {
    box1out.style.cssText = `display:block;
    text-transform: capitalize;
    `;
    box1out.textContent = "please enter valid degree";
    box1out.classList.add("box1out");
  }
};

let box2Button = document.querySelector(`.box2 input[type="button"]`);
let box2inp = document.querySelector(`.box2 input[type="text"]`);
let box2out = document.querySelector(`.box2 .outbox2`);
box2Button.onclick = function () {
    box2out.textContent ="";
  let text = box2inp.value;
  text = text.split("");
  console.log(text);
  for (let i = text.length - 1; i >= 0; i--) {
    box2out.textContent += text[i];
    box2out.style.cssText = `display:block;`;
    box2out.classList.add("box1out");
  }
};


let box3Button = document.querySelector(`.box3 input[type="button"]`);
let box3multi = document.querySelector(`.box3 input[type="text"]`);
let box3num = document.querySelector(`.box3 select`);
let box3out = document.querySelector(`.box3 .outbox3`);
box3Button.onclick = function () {
    box3out.innerHTML ="";
    let multi=box3multi.value;
    let num=box3num.value;
    box3out.style.cssText = `display:block;`;
    box3out.classList.add("box1out");
    for(let i=1;i<=num;i++){
        box3out.innerHTML+=`${multi}*${i}=${multi*i}<br>`;

    }
    
};

let box4 = document.querySelector(`.box`);
let item = document.querySelector(`.box4 .item`);

function red(){
    item.style.cssText = `
    background-color: red;
    `;
 item.textContent="Hany";
}
function green(){
    item.style.cssText = `
    background-color: green;
    `; item.textContent="salama";

    

}




