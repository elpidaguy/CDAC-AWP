var expression = [];
var numbers = [];
var inputContent = "";

function clearAll() 
{
    expression = [];
    numbers = [];
    inputContent = "";
    appendHTML("");
}

function appendHTML(x)
{
    inputContent = inputContent+x;

    document.getElementById("calcIP").value = inputContent;
}

function addNumbers(x)
{
    console.log("got number : "+x);
    numbers.push(x);
    appendHTML(x);
}

function addExpression(x)
{
    console.log("got expression : "+x);
    // numbers.push(document.getElementById("calcIP").value);
    numbers.push(x);
    appendHTML(x);

}

function calculate()
{
    var expr = document.getElementById("calcIP").value;
    console.log(expr);
    var res = eval(expr);
    clearAll();
    appendHTML(res);
}