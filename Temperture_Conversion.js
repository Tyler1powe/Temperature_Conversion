// Run link_events when window loads
window.addEventListener("load", link_events);

function link_events() {
    // Make button clickable
    // To use forms object, the form tag needs a name
    document.forms.form1.submit.onclick = calculate;
}

function calculate() {
    // Input
    var temperature = parseFloat(document.forms.form1.temperature.value);
    var type = document.forms.form1.type.value;

    // Output
    var outarea = document.getElementById("outarea");
    var result;

    // Check if temperature is a valid number
    if (isNaN(temperature)) {
        result = "Please enter a valid temperature!";
    } else {
        // Perform conversion based on type
        if (type === "fahrenheit") {
            result = "Temperature is: " + ((temperature - 32) * 5 / 9).toFixed(2);
        } else if (type === "celsius") {
            result = "Temperature is: " + (temperature * 9 / 5 + 32).toFixed(2);
        } else {
            result = "Please select a conversion type!";
        }
    }

    // Update output
    outarea.innerHTML = result;
}  