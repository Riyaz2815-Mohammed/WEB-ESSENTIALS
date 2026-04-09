function validate(){
    let name = document.getElementById("name").value;
    let age = document.getElementById("age").value;
    let email = document.getElementById("email").value;
    let db = document.getElementById("db").value;
    let pass = document.getElementById("pass").value;
    // let name = document.getElementById("name").value;

    if(name===""||pass===""||age===""||db===""||email===""){
        alert("All field should be filled");
                return false;
    }

    for(let i=0;i<name.length;i++){
        if(!((name[i]>="A" && name[i]<="Z")||(name[i]>="a" && name[i]<="z")||(name[i]===" "))){
            alert("Name should be in the Correct Form");
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

