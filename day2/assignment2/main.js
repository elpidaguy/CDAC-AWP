var inputContent = "";

function clearAll() 
{
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
    appendHTML(x);
}

function addExpression(x)
{
    appendHTML(x);

}

function calculate()
{
    var expr = document.getElementById("calcIP").value;
    var res = eval(expr);
    clearAll();
    appendHTML(res);
}