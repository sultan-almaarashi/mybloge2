function signup(e){
event.preventDefault();
let username=document.getElementById('username').value;
let email=document.getElementById('email').value;
let password=document.getElementById('password').value;

var user={
    username:username,
    email:email,
    password:password
};

var json=JSON.stringify(user);
localStorage.setItem(username,json);
console.log("add Sign up");
//  window.open("index.html");

// var arr=new Array();
for(let i=0;i<localStorage.length;i++){
 let key=  localStorage.key(i);
 let value=localStorage.getItem(key);
 console.log(value);


}
for(let i=0;i<arr.length;i++){
    console.log(arr[i].username);
}

}
var btn_login=document.getElementById("btn-login");




// btn_login.addEventListener('click',

function login(e){
    
    event.preventDefault();
    let username=document.getElementById('username').value;
    let password=document.getElementById('password').value;
    let result=document.querySelector(".result");
   var user=localStorage.getItem(username);
   
    var data=JSON.parse(user);
 


    if(user ==null){
        result.innerHTML="please first Sign up.....";
    }else if(username ==data.username && password==data.password){
        result.innerHTML="Welcome ....";
        window.open("index.html");

    }
    else{
        result.innerHTML="UserName Or PassWord is not correct";
    }
    
    };

