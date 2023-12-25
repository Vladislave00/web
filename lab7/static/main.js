// Функция priority позволяет получить 
// значение приоритета для оператора.
// Возможные операторы: +, -, *, /.

function priority(operation) {
    if (operation == '+' || operation == '-') {
        return 1;
    } else {
        return 2;
    }
}

// Проверка, является ли строка str числом.
function isNumeric(str) {
    return /^\d+(.\d+){0,1}$/.test(str);
}

// Проверка, является ли строка str цифрой.
function isDigit(str) {
    return /^\d{1}$/.test(str);
}

// Проверка, является ли строка str оператором.
function isOperation(str) {
    return /^[\+\-\*\/]{1}$/.test(str);
}

// Функция tokenize принимает один аргумент -- строку
// с арифметическим выражением и делит его на токены 
// (числа, операторы, скобки). Возвращаемое значение --
// массив токенов.

function tokenize(str) {
    let tokens = [];
    let lastNumber = '';
    for (char of str) {
        if (isDigit(char) || char == '.') {
            lastNumber += char;
        } else {
            if (lastNumber.length > 0) {
                tokens.push(lastNumber);
                lastNumber = '';
            }
        }
        if (isOperation(char) || char == '(' || char == ')') {
            tokens.push(char);
        }
    }
    if (lastNumber.length > 0) {
        tokens.push(lastNumber);
    }
    // alert(tokens)
    return tokens;
}

// Функция compile принимает один аргумент -- строку
// с арифметическим выражением, записанным в инфиксной 
// нотации, и преобразует это выражение в обратную 
// польскую нотацию (ОПН). Возвращаемое значение -- 
// результат преобразования в виде строки, в которой 
// операторы и операнды отделены друг от друга пробелами. 
// Выражение может включать действительные числа, операторы 
// +, -, *, /, а также скобки. Все операторы бинарны и левоассоциативны.
// Функция реализует алгоритм сортировочной станции 
// (https://ru.wikipedia.org/wiki/Алгоритм_сортировочной_станции).

function compile(str) {
    let out = [];
    let stack = [];
    for (token of tokenize(str)) {
        if (isNumeric(token)) {
            out.push(token);
        } else if (isOperation(token)) {
            while (stack.length > 0 && isOperation(stack[stack.length - 1]) && priority(stack[stack.length - 1]) >= priority(token)) {
                out.push(stack.pop());
            }
            stack.push(token);
        } else if (token == '(') {
            stack.push(token);
        } else if (token == ')') {
            while (stack.length > 0 && stack[stack.length - 1] != '(') {
                out.push(stack.pop());
            }
            stack.pop();
        }
    }
    while (stack.length > 0) {
        out.push(stack.pop());
    }

    return out.join(' ');
}

// Функция evaluate принимает один аргумент -- строку 
// с арифметическим выражением, записанным в обратной 
// польской нотации. Возвращаемое значение -- результат 
// вычисления выражения. Выражение может включать 
// действительные числа и операторы +, -, *, /.
// Вам нужно реализовать эту функцию
// (https://ru.wikipedia.org/wiki/Обратная_польская_запись#Вычисления_на_стеке).

function evaluate(str) {
    // let polishString = compile(str)
    // let result
    // for (let index = 0; index < polishString.length; ++index) {
    //     if(polishString[index] )
    // }
    let polishString = compile(str)
    let tokens = polishString.split(' ')
    // alert(tokens)
    let result = 0;
    let stack = [];
    while (tokens.length > 0) {
        let item = tokens.shift();
        let a, b;
        switch (item) {
            case '+':
                b = parseFloat(stack.pop());
                a = parseFloat(stack.pop());
                stack.push(a + b);
                break;

            case '-':

                b = parseFloat(stack.pop());
                a = parseFloat(stack.pop());
                stack.push(a - b);
                break;
            case '*':
                b = parseFloat(stack.pop());
                a = parseFloat(stack.pop());
                stack.push(a * b);
                break;
            case '/':
                b = parseFloat(stack.pop());
                a = parseFloat(stack.pop());
                result = a / b;
                // alert(result)
                stack.push(Number((result).toFixed(2)));
                break;
            default:
                stack.push(item);
                break;
        }
    }
    return Math.round(stack.pop()*100)/100;
}

// Функция clickHandler предназначена для обработки 
// событий клика по кнопкам калькулятора. 
// По нажатию на кнопки с классами digit, operation и bracket
// на экране (элемент с классом screen) должны появляться 
// соответствующие нажатой кнопке символы.
// По нажатию на кнопку с классом clear содержимое экрана 
// должно очищаться.
// По нажатию на кнопку с классом result на экране 
// должен появиться результат вычисления введённого выражения 
// с точностью до двух знаков после десятичного разделителя (точки).
// Реализуйте эту функцию. Воспользуйтесь механизмом делегирования 
// событий (https://learn.javascript.ru/event-delegation), чтобы 
// не назначать обработчик для каждой кнопки в отдельности.

//Свойство innerHTML позволяет получить HTML-содержимое элемента в виде строки. Мы также можем изменять его. Это один из самых мощных способов менять содержимое на странице.

//кнопка цифры или действия
function clickHandler(event) {
    let target = event.target;
    document.getElementById('output').innerHTML = document.getElementById('output').textContent + target.innerHTML
}
//кнопка равно
function clickResult(event){
    document.getElementById('output').innerHTML = evaluate(document.getElementById('output').innerHTML)
}
//кнопка очистки
function clickClear(event){
    document.getElementById('output').innerHTML = ''
}
// Назначьте нужные обработчики событий.
window.onload = function () {
    // var element = document.querySelectorAll("button[class='key-digit']");
    // element.addEventListener('click',clickHandler)
    const buttons = document.getElementsByClassName('key-digit');
    for (const button of buttons) {
        button.addEventListener('click', clickHandler);
    }
    const result = document.getElementsByClassName('key-result');
    for (const item of result) {
        item.addEventListener('click', clickResult);
    }

    const clears = document.getElementsByClassName('key-clear');
    for (const clear of clears) {
        clear.addEventListener('click', clickClear);
    }
    
    const operations = document.getElementsByClassName('key-operation');
    for (const operation of operations) {
        operation.addEventListener('click', clickHandler);
    }
    
};