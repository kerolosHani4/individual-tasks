let content = document.querySelector(".content h2");
let style = document.querySelector(".style h2");
let remove = document.querySelector(".remove h2");
let contentB = document.querySelector(".content button");
let styleB = document.querySelector(".style button");
let removeB = document.querySelector(".remove button");
contentB.onclick= function(){
    content.innerHTML="New TextContent";
}
styleB.onclick= function(){
    style.classList.add("cssStyle");
}
removeB.onclick= function(){
    remove.style.visibility ="hidden";
  
}