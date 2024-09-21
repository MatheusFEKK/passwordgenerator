let slider = document.getElementById("passwordrange");
let output = document.getElementById("valueselected");
window.onload = function selectionpassword(){
    output.innerHTML = slider.value;

    slider.oninput = function outputting() {
        output.innerHTML = slider.value;
    }
    
}

function add(){
    slider.value = Math.min(parseInt(slider.value) + 1, slider.max);
    output.innerHTML = slider.value;
    
}

function less(){
    slider.value = Math.max(parseInt(slider.value) - 1, slider.min);
    output.innerHTML = slider.value;

}





// function passwordgenerator(){

// let password = [];
// let chooseletters = 0;
// let choosenumbers = 0;

// let letters  = ["a", "b", "c", "d", "f", "g", "h", "i", "j", "k", "l", 
//                  "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", 
//                  "w", "x", "y", "z", "@", "!", "$" ]
// let numbers  = []

// let length                 = prompt("Digite quantos caracteres você deseja que tenha na sua tenha: ");
// let lengthnumbers          = prompt("Digite quantos números você deseja em sua senha: ");

//         for(let a = 0; a < length; a++){
//             let randomposition = Math.floor(Math.random() * 28);
//             let chooseletters  = letters[randomposition];
//             password += chooseletters
    
//         }
//         for(let b = 0; b < lengthnumbers; b++){
//             numbers[b] = Math.floor(Math.random() * lengthnumbers)
//             let choosenumbers = numbers[b]
//             password += choosenumbers
//         }

//         console.log(password)      
// }
// passwordgenerator();


