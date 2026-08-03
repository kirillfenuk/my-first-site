/* функция - небольшая программа которая запускается каким либо действием (клик, запуск сайта, наведение мышкой) */
/* дополнительныу параметры функции - это доп данные (цифры, текста, объкты) которые можно отправить в функцию что бы функция сними что то сделала */
/* // функция, с названием info (НАЗВАНИЕ МОЖЕТ БЫТЬ ЛЮБЫМ так же как и у переменных)
function info(параметры функции) {
   // код.. (инструкции / набор команд / то что будет делать функция)
   // код.. (инструкции)
   // код.. (инструкции)
}


// запуск функции при старте сайта
info() */

// Как работает микроволновка
/* function microwave() {
   console.log('Включает свет')
   console.log('Начинает греть включает микроволны')
   console.log('запускается вращение тарелки')
   console.log('запускаем таймер')
   console.log('Таймер завершился (выключился)')
   console.log('Микроволны останавливаются')
   console.log('Выключается свет')
   console.log('Звук дзынь')
   console.log('Перестаёт крутить')
}


// запуск функции microwave при старте сайта
microwave() */


// Запуск микроволновки
/* function startMicrowave() {
   console.log('Включает свет')
   setTimeout(() => { console.log('Начинает греть включает микроволны') }, 1000)
   setTimeout(() => { console.log('запускается вращение тарелки') }, 2000)
   setTimeout(() => { console.log('запускаем таймер') }, 3000)
}

// Остановка микроволновки
function stopMicrowave() {
   console.log('Таймер завершился (выключился)')
   setTimeout(() => { console.log('Микроволны останавливаются') }, 1000)
   setTimeout(() => { console.log('Выключается свет') }, 2000)
   setTimeout(() => { console.log('Звук дзынь') }, 3000)
   setTimeout(() => { console.log('Перестаёт крутить') }, 4000)
} */



/* стандартня запись обычной функции */
/* function sayHelloLong() {
    num1 = 5
    num2 = 10
    console.log('Привет, мир');
    console.log('Сумма чисел:', num1 + num2);
}


sayHelloLong() */

/* Стрелочная запись */
/* let sayHelloShort = () => {
    console.log('Привет, мир');
}


sayHelloShort() */



/* function startProcessing() {
            let n1 = Number(prompt("Введите первое число:"));
            let n2 = Number(prompt("Введите второе число:"));
            let n3 = Number(prompt("Введите третье число:"));

            console.log('Обработка данных... пожалуйста подождите 3 секунды');
            

            setTimeout(() => {
                let sum = n1 + n2 + n3;
                console.log('Готово!');
                console.log(`Результат сложения: ${sum}`);
            }, 3000);
        } */









// ============ Склейка слов
/* function cook(ingridient1, ingridient2) {
    if (ingridient1 == 'хлеб' && ingridient2 == 'сыр') {
        return('Повар приготовил горячий бутерброд');
    } else {
        return('Что-то странное вы дали повару');
    }
}

let product1 = prompt('Какой первый ингридиет даем повару').toLowerCase() // хлеб
let product2 = prompt('Какой второй ингридиет даем повару').toLowerCase()// сыр

let itogGotovki = cook(product1, product2)


const divChtoPrigotovili = document.getElementById('dish-finish')
divChtoPrigotovili.textContent = itogGotovki

console.log('Вот что приготовили', itogGotovki); */




/* let n1 = Number(prompt("Введите первое число:"))
let n2 = Number(prompt("Введите второе число:"))

function sum(a, b) {
    let result = a + b
    alert("Результат сложения: " + result)
    return result
}

const sumResult = sum(n1, n2)

console.log("Результат, умноженный на 2:", sumResult * 2) */




// Задача категрия билета
/* let age = Number(prompt('Введите свой возраст'))

function ageVerification() {
    if (age < 12) {
        return('Это детский билет')
    } else
        return('Это взрослый билет')
}

console.log(ageVerification()) */








// Задача расчет скидки
let price = Number(prompt('Ввдеите цену'))
let sale = Number(prompt('Введите скидку'))

function calcDiscount(a, b) {
    return a - (a * (b / 100))
}

console.log(calcDiscount(price, sale))








