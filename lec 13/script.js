var database ={
    username:"ali",
    password:"123"
}

var newsFeed=[{
    friend:"usman",
    status:"I am feeling happy today!"
},
    {
        frined:"umer",
        status:"I am feeling Amazing"
    }
];

var x=prompt("Enter UserName");
var y=prompt("Enter pasword");
if(x===database.username)
{
    if(y===database.password)
    {
        console.log(newsFeed);
    }
    else
        console.log("Wrong password");
}
else
    console.log("Wrong username");