function register(){
    const name = document.getElementById('name').value;
    const family = document.getElementById('family').value;
    const age = document.getElementById('age').value;
    const pass = document.getElementById('pass').value;


    var run = function(output){
        output = JSON.parse(output)["auth"]
        if (output == false){
            alert("قبلا این پسور انتخاب شده")            
        }else{
            document.cookie = `auth=${output};path=${URL}`
            alert(`لطفا به خاطر بسپارید ${pass} پسور شما برای ورود دوباره`)
            window.location.href = URL+"/platform/application";

        }
    }
    if (name != "" && family != "" && age >= 1300 && pass != ""){
    output = send_data("/Home/add_user_register","name="+name+"&family="+family+"&age="+age+"&pass="+pass,run);
    }else{
        alert('لطفا فرم ها رو به درستی پر کنید')
    }
}


function login(){
    const age = document.getElementById('age').value;
    const pass = document.getElementById('pass').value;

    var run = function(output){

        output = JSON.parse(output)["auth"]
        if (output == false){
            alert("کاربری با این مشخصات وجود ندارد")            
        }else{
            document.cookie = `auth=${output};path=${URL}`
            alert("با موفقیت وارد شدید")
            window.location.href = URL+"/platform/application";
        }
    }
    if (age >= 1300 && pass != ""){
    output = send_data("/Home/login_user","age="+age+"&pass="+pass,run);
    }else{
        alert('لطفا فرم ها رو به درستی پر کنید')
    }
}