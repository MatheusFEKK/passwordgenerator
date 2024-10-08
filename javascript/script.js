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
        
        let input = document.getElementById('password_creating');

        function adding_input(){
            input.style.color = "#F5F5F5";
            input.value = password;
            div.append(input)
        }
        adding_input();
        
        function clear(){
            input.value = ""
        }
}


    // let div = document.getElementsByClassName('box')[0];
    // let passwordgenerated = document.createElement('input');

    // function input_entering(){
    //     passwordgenerated.type = 'text';
    //     passwordgenerated.className = "value-password";
    //     passwordgenerated.defaultValue = "Gerador de senha";
    //     passwordgenerated.value = password
    //     passwordgenerated.onchange = removing()
    //     div.append(passwordgenerated);
    // }

    // function removing (){
    //     passwordgenerated.remove();
    // }

    // input_entering();

// function passwordgenerator(){

//     let password = [];
//     let chooseletters = 0;
//     let choosenumbers = 0;
    
//     let letters  = ["a", "b", "c", "d", "f", "g", "h", "i", "j", "k", "l", 
//                      "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", 
//                      "w", "x", "y", "z", "@", "!", "$" ]
//     let numbers  = []
    
//     let length                 = prompt("Digite quantos caracteres você deseja que tenha na sua tenha: ");
//     let lengthnumbers          = prompt("Digite quantos números você deseja em sua senha: ");
    
//             for(let a = 0; a < length; a++){
//                 let randomposition = Math.floor(Math.random() * letters.length);
//                 let chooseletters  = letters[randomposition];
//                 password += chooseletters
        
//             }
//             for(let b = 0; b < lengthnumbers; b++){
//                 numbers[b] = Math.floor(Math.random() * lengthnumbers)
//                 let choosenumbers = numbers[b]
//                 password += choosenumbers
//             }
    
//             console.log(password)      
//     }
//     passwordgenerator();


