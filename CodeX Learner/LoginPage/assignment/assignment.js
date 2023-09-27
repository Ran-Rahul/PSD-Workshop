// Sample questions
const questions = [
    "Write short note on Python.",
    "Write applications of Python.",
    "Write pros and cons of Python.",
];

let currentQuestionIndex = 0;

const questionContainer = document.querySelector(".question-container");
const prevButton = document.querySelector("#prevButton");
const nextButton = document.querySelector("#nextButton");
const submitButton = document.querySelector("#submitButton");

const textArea = document.getElementById("codeX");

function displayQuestion() {
    questionContainer.querySelector("h1").textContent = `Question ${currentQuestionIndex + 1}:`;
    questionContainer.querySelector("p").textContent = questions[currentQuestionIndex];
}

function goToPreviousQuestion() {
    if (currentQuestionIndex > 0) {
        currentQuestionIndex--;
        textArea.value = "";
        displayQuestion();
    }

}

function goToNextQuestion() {
    if (currentQuestionIndex < questions.length - 1) {
        currentQuestionIndex++;
        textArea.value = "";
        displayQuestion();
    }

}

function submitAnswers() {
    // Add your code to process and submit the user's answers here
    // For now, we'll just display an alert
    prevButton.disabled = true;
    nextButton.disabled = true;
    alert("Answers submitted!");
}

displayQuestion();

prevButton.addEventListener("click", goToPreviousQuestion);
nextButton.addEventListener("click", goToNextQuestion);
submitButton.addEventListener("click", submitAnswers);
