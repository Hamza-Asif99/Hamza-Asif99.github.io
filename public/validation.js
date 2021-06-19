var isLogin;

        function validateSignup(id,id2,regex,minLength,message){
            var ctrl = document.getElementById(id2);
            if(id2 == "email"){
                regex= /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            }       
            if(regex.test(ctrl.value) == false){
                if(ctrl.value.length < minLength){
                    document.getElementById(id).innerText = "Enter atleast "+minLength+" characters"
                    document.getElementById(id2).style.border = "4px solid red";
                }
                else{
                    document.getElementById(id).innerText = message;
                    document.getElementById(id2).style.border = "4px solid red";
                }
            }
            else{
                document.getElementById(id).innerText = "";
                document.getElementById(id2).style.border = "4px solid green";
            }
        }
        function confirmPass(id){
            var ctrl = document.getElementById("confirmPassy");
            var originalPass = document.getElementById("passy");
                if(document.getElementById("passy").style.borderColor == "green"){

                    if(ctrl.value == originalPass.value){
                        document.getElementById(id).innerText = "";
                        document.getElementById("confirmPassy").style.border = "4px solid green";
                    }
                    else{
                        document.getElementById(id).innerText = "Password must be the same";
                        document.getElementById("confirmPassy").style.border = "4px solid red";
                    }
                }
        }
        function formCheck(){
            if(document.getElementById("username").style.borderColor == "green"&&document.getElementById("email").style.borderColor == "green"
            &&document.getElementById("passy").style.borderColor == "green"&&document.getElementById("confirmPassy").style.borderColor == "green"){
                // document.getElementById("username").value= null;
                // document.getElementById("email").value = null;
                // document.getElementById("passy").value = null;
                // document.getElementById("confirmPass").value = null;
                document.querySelector('.signupForm').style.display='none';
                // location.reload();
                
            }
        }
        function formcheck2(){
            if(document.getElementById("loginName").style.borderColor == "green" && document.getElementById("passy2").style.borderColor == "green"){
                document.querySelector('.loginForm').style.display='none';
                isLogin = true;
            }
            else{
                isLogin = false;
            }
        }