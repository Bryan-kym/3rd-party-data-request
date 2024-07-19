$(document).ready(function() {
    $("#nextButtonStaff").click(function() {
        $("#staff").addClass("slide-out-left").removeClass("slide-in-right");
        setTimeout(function() {
            $("#staff").css("display", "none");
            $("#nextFormStaff").css("display", "block").addClass("slide-in-right").removeClass("slide-out-left");
        }, 500); // Match the timeout with the CSS transition duration
    });

    $("#backButtonStaff").click(function() {
        $("#nextForm").addClass("slide-out- ").removeClass("slide-in-right");
        setTimeout(function() {
            $("#nextFormStaff").css("display", "none");
            $("#staff").css("display", "block").addClass("slide-in-right").removeClass("slide-out-left");
        }, 500); // Match the timeout with the CSS transition duration
    });

    $("#nextButtonStud").click(function() {
        $("#student").addClass("slide-out-left").removeClass("slide-in-right");
        setTimeout(function() {
            $("#student").css("display", "none");
            $("#nextFormStudent").css("display", "block").addClass("slide-in-right").removeClass("slide-out-left");
        }, 500); // Match the timeout with the CSS transition duration
    });

    $("#backButtonStud").click(function() {
        $("#nextFormStudent").addClass("slide-out- ").removeClass("slide-in-right");
        setTimeout(function() {
            $("#nextFormStudent").css("display", "none");
            $("#student").css("display", "block").addClass("slide-in-right").removeClass("slide-out-left");
        }, 500); // Match the timeout with the CSS transition duration
    });

    $("#nextButtonIns").click(function() {
        $("#institutions").addClass("slide-out-left").removeClass("slide-in-right");
        setTimeout(function() {
            $("#institutions").css("display", "none");
            $("#nextFormIns").css("display", "block").addClass("slide-in-right").removeClass("slide-out-left");
        }, 500); // Match the timeout with the CSS transition duration
    });

    $("#backButtonIns").click(function() {
        $("#nextFormIns").addClass("slide-out- ").removeClass("slide-in-right");
        setTimeout(function() {
            $("#nextFormIns").css("display", "none");
            $("#institutions").css("display", "block").addClass("slide-in-right").removeClass("slide-out-left");
        }, 500); // Match the timeout with the CSS transition duration
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('staffForm');
    const inputs = form.querySelectorAll('input');
    const nextButton = document.getElementById('nextButtonStaff');

    function checkFormValidity() {
        let allFilled = true;
        inputs.forEach(input => {
            if (input.value === '' && input.hasAttribute('required')) {
                allFilled = false;
            }
        });
        nextButton.disabled = !allFilled;
    }

    inputs.forEach(input => {
        input.addEventListener('input', checkFormValidity);
    });
});


