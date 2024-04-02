function getText()
{
    console.log("hello");
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
            document.getElementById("outputText").innerHTML = this.responseText;
        }
    };

    xhr.open("GET", "../text/index.txt", true);
    xhr.send();
}

getText();