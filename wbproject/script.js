function myFunction()
{
    var x = document.getElementById("mynav");
    if(x.className == "topnav")
    {
        x.className += " responsive";
    }
    else
    {
        x.className = "topnav";
    }
}