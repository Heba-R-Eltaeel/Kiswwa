function myfunction(){
    var x=document.body;
    x.classList.toggle("dark-mode");
}
function openForm(){
    window.open("donateForm.html");
}
function calculate(){
    var amount1 = parseInt(document.getElementById("amount1").value);
    var amount2 = parseInt(document.getElementById("amount2").value);
    var result = amount1 * amount2;
    document.getElementById("result").innerHTML = "The result = " +result;
}