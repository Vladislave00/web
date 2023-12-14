function clickCalcPower() {
    let x = document.getElementById("inputX").value
    let y = document.getElementById("inputY").value
    document.getElementById("labelForPower").textContent = "Ответ:" + calcPower(x, y);
}
function calcPower(x, y) {
    let xStart = x;
    for (var i = 1; i < y; i++) {
        x *= xStart;
    }
    return x;
}
function clickFindNOD() {
    let a = document.getElementById("inputA").value
    let b = document.getElementById("inputB").value
    document.getElementById("labelNOD").textContent = "Ответ:" + findNOD(a, b);
}
function findNOD(a, b) {
    let min = 0;
    let max = 0;
    if (a > b) {
        min = b;
        max = a;
    }
    else if (b > a) {
        min = a;
        max = b;
    }
    else {
        min = a;
        max = a;
    }
    // while (max !== 0) {
    //     let temp = max;
    //     max = min % max;
    //     min = temp;
    // }
    // return min;
    let nod = 1;
    for (let index = 1; index <= min; index++) {
        if (min % index == 0 && max % index == 0) {
            nod = index;
        }
    }
    return nod;
}
function clickFindTheSmallestDigit() {
    let a = document.getElementById("inputTheSmallest").value
    document.getElementById("labelTheSmallestDigit").textContent = "Ответ:" + FindTheSmallestDigit(a);
}
function FindTheSmallestDigit(x) {
    strX = x.toString();

    if (strX.length == 0) {
        return null;
    }

    let smallestDigit = parseInt(strX[0]);

    for (let i = 1; i < strX.length; i++) {
        let digit = parseInt(strX[i]);
        if (digit < smallestDigit) {
            smallestDigit = digit;
        }
    }

    return smallestDigit;
}
function clickPluralization() {
    let x = document.getElementById("inputPluralization").value
    document.getElementById("labelPluralization").textContent = "Ответ:" + Pluralization(x);
}
function Pluralization(x) {
    let word = 'записей';
    if (x % 10 === 1 && x % 100 !== 11) {
        word = 'запись';
    }
    else if (x % 10 >= 2 && x % 10 <= 4 && (x % 100 < 10 || x % 100 >= 20)) {
        word = 'записи';
    }
    return word;
}
function clickFib() {
    let x = document.getElementById("inputFib").value
    document.getElementById("labelFib").textContent = "Ответ:" + Fib(x);
}
function Fib(x) {

    if (x <= 0) {
        return 0;
    }

    let a = 0;
    let b = 1;

    for (let i = 2; i <= x; i++) {
        let next = a + b;
        a = b;
        b = next;
    }
    return b;
}