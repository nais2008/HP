// button 'go_to_top'
const showOnPx = 100;
const backToTopButton = document.querySelector(".back-to-top")

const scrollContainer = () => {
  return document.documentElement || document.body;
};

document.addEventListener("scroll", () => {
  if (scrollContainer().scrollTop > showOnPx) {
    backToTopButton.classList.remove("hidden")
  } else {
    backToTopButton.classList.add("hidden")
  }
})

const goToTop = () => {
	document.body.scrollIntoView({
    behavior: "smooth",
  });
};

backToTopButton.addEventListener("click", goToTop)

// --------------------------------------------------------------
// Modal window

var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// ---------------------------------------------------------------------------
// Загрузка файла

class FileInputController {
  constructor() {
    this.fileInputs = document.querySelectorAll(".js-file-input-controller");
    if (this.fileInputs.length === 0) return;

    this.init(this.fileInputs, this.handleFileInput);
  }

  init(elements, func) {
    for (const el of elements) {
      func(el);
    }
  }

  handleFileInput(fileInput) {
    const uploadButton = fileInput.querySelector("button");
    const inputFileField = fileInput.querySelector("input[type='file']");
    const inputTextField = fileInput.querySelector("input[type='text']");

    // Open select file dialog if button is clicked
    uploadButton.addEventListener("click", (e) => {
      e.preventDefault();
      inputFileField.click();
    });

    // Show name of selected file in text input
    inputFileField.addEventListener("change", () => {
      if (inputFileField.files) {
        inputTextField.value = inputFileField.files[0].name;
      }
    });
  }
}

new FileInputController();