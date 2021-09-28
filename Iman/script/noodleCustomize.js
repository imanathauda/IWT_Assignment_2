function display(image)
{
    if(image == "chickenNoodle")
    {
        document.getElementById("noodleimage").src = "images/backnew.jpg";
    }
    else if(image == "back")
    {
        document.getElementById("noodleimage").src = "images/chickenNoodle.jpg";
    }
}