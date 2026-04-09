function validate(){
            let uname =document.getElementById("name").value;
            let  age=document.getElementById("age").value;
            let db =document.getElementById("dob").value;
            let email =document.getElementById("email").value;
            let pass =document.getElementById("pass").value;

            if(uname===""||pass===""||age===""||db===""||email===""){
                alert("All field should be filled");
                return false;
            }
        for(let i=0;i<uname.length;i++){
            let ch=uname[i];
            if(!((ch>="A" && ch <="Z")||(ch>="a" && ch <="z")||(ch===''))){
                alert("Username cant be other than alphabet and spaces");
                return false;
            }
        }
        if(age<18 || age>60){
            alert("Not ablicable");
            return false;
        }
        if(db.length!=10||db[2]!='-'||db[5]!='-'){
            alert("DOB Wrong FORMAT");
            return false;
        }
        if(!(email.includes("@gmail.com"))){
            alert("Email wrong");
            return false;
        }

        if(pass.length<8){
            alert("password is too short");
            return false;
        }

        alert("Ok");
        return true;
    }



function validatelogin(){
    let uname =document.getElementById("name").value;       
    let pass =document.getElementById("pass").value;

    if(uname===""||pass===""){
        alert("All field should be filled");
        return false;
    }
    alert("Ok");    
    return true;
}