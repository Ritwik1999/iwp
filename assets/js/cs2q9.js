let beginBtn = document.querySelector("button");
window.onload = () => beginBtn.disabled = false;
let evalArea = document.querySelector("section.eval-area");
let timer = document.querySelector(".timer>span");
let qnum = document.querySelector(".qnum>span");
let question = document.querySelector(".question");
let alternatives = document.querySelectorAll("label>span");
let radioBtns = document.querySelectorAll("input[type='radio']");
let result = document.querySelector(".result");

let selectedOption = -1;
let score = 0;
let currentQuestion = 0;
let interval;

function setChoosenAnswer(option) {
    selectedOption = option;
}

function play() {
    evalArea.hidden = false;
    displayQuestion();
    beginBtn.remove();
    document.querySelector("h1").remove();
}

function displayQuestion() {
    qnum.innerText = `${currentQuestion + 1}/${qbank.length}`;
    if (currentQuestion == qbank.length - 1) {
        document.querySelector("#next-btn").innerText = "Finish";
    }
    question.innerText = qbank[currentQuestion].questionStatement;
    for (let i = 0; i < 4; i++) {
        radioBtns[i].checked = false;
        alternatives[i].innerText = qbank[currentQuestion].choices[i];
    }
    monitor();
}

function monitor() {
    clearInterval(interval);
    let time = 15;
    timer.innerText = time;
    interval = setInterval(decreaseTimer, 1000);
    function decreaseTimer() {
        time -= 1;
        timer.innerText = time;
        if (time == 0) {
            nextQuestion();
        }
    }
}

function nextQuestion() {
    if (selectedOption == qbank[currentQuestion].correctAns) {
        score += 1;
    }
    selectedOption = -1;
    currentQuestion += 1;
    if (currentQuestion == qbank.length) {
        evalArea.remove();
        result.innerText = `Your final score for the quiz is ${score}/${qbank.length}`;
    } else {
        displayQuestion();
    }
}