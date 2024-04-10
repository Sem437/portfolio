
function getText(pathToText)
{
    console.log("test getText function");
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
            document.getElementById("outputText").innerHTML += this.responseText + "<br> <br>";
        }
    };

    xhr.open("GET", pathToText, true);
    xhr.send();
}