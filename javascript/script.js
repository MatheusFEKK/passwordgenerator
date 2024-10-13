let sliderletter = document.getElementById("lengthletters");
let slidernum = document.getElementById("lengthnumbers");
let outputletter = document.getElementById("valueselectedletter");
let outputnum = document.getElementById("valueselectednumber");
window.onload = function selectionpassword(){
    outputletter.innerHTML = sliderletter.value;

    sliderletter.oninput = function outputtingletter() {
        outputletter.innerHTML = sliderletter.value;
    }
    outputnum.innerHTML = slidernum.value;
    
    slidernum.oninput = function outputtingnumber(){
        outputnum.innerHTML = slidernum.value;
    }
}

function add(){
    sliderletter.value = Math.min(parseInt(sliderletter.value) + 1, sliderletter.max);
    outputletter.innerHTML = sliderletter.value;
}

function less(){
    sliderletter.value = Math.max(parseInt(sliderletter.value) - 1, sliderletter.min);
    outputletter.innerHTML = sliderletter.value;

}

let input = document.getElementById('password_creating');

function passwordgenerator(){
    let password = [];
    
    let letters  = ["a", "b", "c", "d", "f", "g", "h", "i", "j", "k", "l", 
                     "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", 
                     "w", "x", "y", "z", "@", "!", "$", "/", "(", ")" ]
    let numbers  = []

        for(let a = 0; a < sliderletter.value;a++){
            let randomposition = Math.floor(Math.random() * 31);
            let choosingletters = letters[randomposition]
            password += choosingletters
        }

        for(let b = 0; b < slidernum.value;b++){
            numbers[b] = Math.floor(Math.random() * 9);
            let choosingnumbers = numbers[b]
            password += choosingnumbers
        }
        

        function adding_input(){
            input.value = password;
        }

        adding_input();
    }

function clear(){
    input.value = ""
}
    
function copy(){
        input.select();
        navigator.clipboard.writeText(input.value);
    }