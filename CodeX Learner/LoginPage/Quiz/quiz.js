const quizData = [
    {
        question: "Who was the developer of C++?",
        options: ["Bjarne Stroustrup", "James Gosling", "Guido van Rossum", "Dennis MacAlistair Ritchie"],
        correct: "Bjarne Stroustrup"
    },
    {
        question: "In which year C++ was developed?",
        options: [1979, 1980, 1981, 1982],
        correct: 1980
    },

];


let currentQuestionIndex = 0;
const questionText = document.getElementById("question-text");
const optionsContainer = document.getElementById("options-container");
const nextButton = document.getElementById("next-button");

function loadQuestion() {
    const currentQuestion = quizData[currentQuestionIndex];
    questionText.innerText = currentQuestion.question;
    optionsContainer.innerHTML = "";

    currentQuestion.options.forEach((option) => {
        const optionElement = document.createElement("div");
        optionElement.className = "option";
        optionElement.innerText = option;
        optionElement.addEventListener("click", () => checkAnswer(option));
        optionsContainer.appendChild(optionElement);
    });
}

function checkAnswer(selectedOption) {
    const currentQuestion = quizData[currentQuestionIndex];
    if (selectedOption == currentQuestion.correct) {
        questionText.innerText = "right answer";
    }
    else {
        questionText.innerText = "wrong answer";
    }

    currentQuestionIndex++;

    if (currentQuestionIndex < quizData.length) {
        loadQuestion();
    } else {
        // Quiz is finished, you can display the result or take other actions
        questionText.innerText = "Quiz Finished!";
        optionsContainer.innerHTML = "";
        nextButton.style.display = "none";
    }
}

nextButton.addEventListener("click", () => {
    if (currentQuestionIndex < quizData.length) {
        loadQuestion();
    }
});

loadQuestion(); // Load the first question when the page loads
