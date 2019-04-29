var  database ={
    user: "ali",
    pass: 123
}
var newsFeed=[{
   user: "Usman",
   content: "I am happy today"
},
    {
        user: "umer",
        content: "felling upset & alone, join me"

    }]
var name =promt("enter user name");
var pass =promt("enter password");
if(name===database.user && pass===database.pass)
{
    console.log(newsFeed)
}