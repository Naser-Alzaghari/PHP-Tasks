let display = document.getElementById("display");
let sum = document.getElementById("sum");
let num1 = document.getElementById("num1");
let num2 = document.getElementById("num2");
let min = document.getElementById("min");
let multibly = document.getElementById("multibly");
let devide = document.getElementById("devide");


sum.addEventListener("click", ()=>{
    display.value = Number(num1.value) + Number(num2.value);
})
min.addEventListener("click", ()=>{
    display.value = Number(num1.value) - Number(num2.value);
})
multibly.addEventListener("click", ()=>{
    display.value = Number(num1.value) * Number(num2.value);
})
devide.addEventListener("click", ()=>{
    display.value = Number(num1.value) / Number(num2.value);
})