//storing in variables
let userScore= 0;
let compScore= 0;
const userScore_span = document.getElementById("user-score");
const compScore_span = document.getElementById("comp-score");
const scoreBoard_div = document.querySelector(".score-board");
const result_p =document.querySelector(".result > p");
const rock_div =document.getElementById("r");
const paper_div =document.getElementById("p");
const scissor_div =document.getElementById("s");

//COMPUTER CHOICES
function getcomputerChoice(){
    const choices= ['r', 'p', 's'];
    const randomNumber = Math.floor (Math.random() * 3);
    return choices[randomNumber];
}
function convertToWord(letter){
    if (letter== "r") return "Rock";
    if (letter== "p") return "Paper";
}



function win(userChoice, computerChoice){
    userScore++;
    userScore_span.innerHTML = userScore;
    compScore_span.innerHTML = compScore;
    result_p.innerHTML = userChoice + "beats" + convertToWord(computerChoice) + "You win";
}
function lose(){
    console.log("LOST");
}
function draw(){
    console.log("DRAW");
}


//USER CHOICES
function game(userChoice){
    const computerChoice= getcomputerChoice();
    switch(userChoice + computerChoice) {
        case "rp":
        case "pr":
        case "sp":
            win(userChoice, computerChoice);
            break;
            case "rp":
            case "ps":
            case "sr" :
                lose(userChoice, computerChoice);
                break;
                case "rr":
                case "pp":
                case "ss":
                   draw(userChoice, computerChoice);
                    break;

        

    }
}
function main(){
    rock_div.addEventListener('click', function(){
        game("r");
    })
    paper_div.addEventListener('click', function(){
        game("p");
    })
    scissor_div.addEventListener('click', function() {
        game("s");
        
    })
}
main();