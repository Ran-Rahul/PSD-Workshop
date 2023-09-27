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

    // const optionElements = optionsContainer.querySelectorAll(".option");
    // optionElements.forEach((optionElement) => {
    //     optionElement.removeEventListener("click", () => { });
    // });
    // Enable the Next button
    // nextButton.style.display = "block";

    // currentQuestionIndex++;

    // if (currentQuestionIndex < quizData.length) {
    //     // loadQuestion();
    // } else {
    //     // Quiz is finished, you can display the result or take other actions
    //     questionText.innerText = "Quiz Finished!";
    //     optionsContainer.innerHTML = "";
    //     nextButton.style.display = "none";
    // }
}

nextButton.addEventListener("click", () => {
    currentQuestionIndex++;
    if (currentQuestionIndex < quizData.length) {
        loadQuestion();
    }
    else {
        // Quiz is finished, you can display the result or take other actions
        questionText.innerText = "Quiz Finished!";
        optionsContainer.innerHTML = "";
        nextButton.style.display = "none";
    }
});

loadQuestion(); // Load the first question when the page loads




// const quizData = [
//     {
//         question: "Who was the developer of C++?",
//         options: ["Bjarne Stroustrup", "James Gosling", "Guido van Rossum", "Dennis MacAlistair Ritchie"],
//         correct: "Bjarne Stroustrup"
//     },
//     {
//         question: "In which year was C++ developed?",
//         options: [1979, 1980, 1981, 1982],
//         correct: 1980
//     },
// ];

// let currentQuestionIndex = 0;
// const questionText = document.getElementById("question-text");
// const optionsContainer = document.getElementById("options-container");
// const nextButton = document.getElementById("next-button");
// let selectedOption = null; // Store the selected option

// function loadQuestion() {
//     const currentQuestion = quizData[currentQuestionIndex];
//     questionText.innerText = currentQuestion.question;
//     optionsContainer.innerHTML = "";

//     currentQuestion.options.forEach((option) => {
//         const optionElement = document.createElement("div");
//         optionElement.className = "option";
//         optionElement.innerText = option;

//         optionElement.addEventListener("click", () => {
//             if (!selectedOption) {
//                 selectedOption = option;
//                 optionElement.classList.add("selected");
//             }
//         });

//         optionsContainer.appendChild(optionElement);
//     });
// }

// function checkAnswer() {
//     const currentQuestion = quizData[currentQuestionIndex];
//     if (selectedOption === currentQuestion.correct) {
//         questionText.innerText = "Right answer!";
//     } else {
//         questionText.innerText = "Wrong answer!";
//     }

//     // Disable further interaction with options
//     const optionElements = optionsContainer.querySelectorAll(".option");
//     optionElements.forEach((optionElement) => {
//         optionElement.removeEventListener("click", () => { });
//     });

//     // Enable the Next button
//     nextButton.style.display = "block";
// }

// nextButton.addEventListener("click", () => {
//     currentQuestionIndex++;
//     // selectedOption = null; // Reset selected option
//     if (currentQuestionIndex < quizData.length) {
//         loadQuestion();
//         // nextButton.style.display = "none"; // Hide Next button after loading the next question
//     } else {
//         // Quiz is finished, you can display the result or take other actions
//         questionText.innerText = "Quiz Finished!";
//         optionsContainer.innerHTML = "";
//         nextButton.style.display = "none";
//     }
// });

// loadQuestion(); // Load the first question when the page loads
