const fromText = document.getElementById("from-text")
const toText = document.getElementById("to-text")
const fromSelect = document.getElementById("from-select");
const toSelect = document.getElementById("to-select");
const fromCopy = document.getElementById("from-copy");
const toCopy = document.getElementById("to-copy");
const fromRead = document.getElementById("from-read");
const toRead = document.getElementById("to-read");
const exchange = document.getElementById("exchange");
const translate = document.getElementById("translate");


for (language in langCodes){
    let selected = "";
    let option = `<option ${
        language === "en" ? "selected" : ""
  }  value="${language}"> ${langCodes[language]} </option>`;
  fromSelect.insertAdjacentHTML("beforeEnd", option);
  toSelect.insertAdjacentHTML("beforeEnd", option);
}

exchange.addEventListener("click", exchangeText);

function exchangeText(){
    let temp = fromText.value;
    fromText.value = toText.value;
    toText.value = temp;

    temp = fromSelect.value;
    fromSelect.value = toSelect.value;
    toSelect.value = temp;

}

translate.addEventListener("click", async (event) => {
    event.preventDefault;

    if (!fromText.value) return;
   
    const res = await fetch("http://127.0.0.1:5000/translate", {
        method: "POST",
        body: JSON.stringify({
            q: fromText.value,
            source: fromSelect.value,
            target: toSelect.value,
            format: "text"
        }),
        headers: { "Content-Type": "application/json" },
    })
    .then((res) => res.json())
    .then((data) => {
        toText.value = data.translatedText;
    })
    .catch((err) => {
        console.error(err);
    })

})

fromCopy.addEventListener("click", () => {
    if (!fromText.value) return
    navigator.clipboard.writeText(fromText.value)
})

toCopy.addEventListener("click", () => {
    if (!toText.value) return
    navigator.clipboard.writeText(toText.value)
})

fromRead.addEventListener("click", () => { 

    if (!fromText.value) return
    const synth = window.speechSynthesis;
    const utterThis = new SpeechSynthesisUtterance(fromText.value);
    synth.speak(utterThis);

})

toRead.addEventListener("click", () => { 

    if (!toText.value) return
    const synth = window.speechSynthesis;
    const utterThis = new SpeechSynthesisUtterance(toText.value);
    synth.speak(utterThis);

})

fromText.addEventListener("keyup", () => {
    if (!fromText.value) {
        toText.value = "";
    }
})


