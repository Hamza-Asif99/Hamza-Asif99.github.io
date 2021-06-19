var numOfQuestions = document.querySelectorAll(".question").length;
var allQuestions = document.querySelectorAll(".question");
var allAnswers = document.querySelectorAll(".answer");
var allIconsUp = document.querySelectorAll(".up");
var allIconsDown = document.querySelectorAll(".down");    //This file adds some interactivity with the help desk page
                                                        // it is mainly used for the FAQ section. User can click to show or hide the answer
var toggle= [];                                         // to the written questions.
                                                        // Belongs to helpDesk.html
for(let i = 0;i<numOfQuestions; i++){
    toggle[i] = false;
}
for(let i = 0 ; i <numOfQuestions ; i++){
    allQuestions[i].addEventListener("click",function(){
        // console.log(allQuestions[i])
        // if(allAnswers[i].style.display = "none"){
            if(toggle[i] == true){
                allAnswers[i].style.display = "none";
                allQuestions[i].style.backgroundColor = "rgba(1,1,1,0)"
                allQuestions[i].style.color = "gold"
                allIconsDown[i].style.display = "inline";
                allIconsUp[i].style.display = "none";
                toggle[i] = false;
            }
            else{

                allAnswers[i].style.display = "block";
                // allQuestions[i].style.backgroundColor = "rgba(255,255,255,0.7)"
                allQuestions[i].style.color = "gold"
                allAnswers[i].style.border = "none"
                allIconsDown[i].style.display = "none";
                allIconsUp[i].style.display = "inline";
                toggle[i] = true;
            }
        // }
        
    
    })
}
