// while (condition) {
//     // condition - это условие
//     // тут будет код который будет выполняться пока условие истинно
// }


// Секундомер
// let number = 1
// let i = 1

// while (i <= 100) {
//     setTimeout(() => {
//     console.log(number, 'сек');
//     number ++
//     }, i * 1000)
//     i++
// }



// let count = 0

// while (true) {
//     input = prompt('Что вы хотите купить? Или напишите "стоп" что бы завершить.')

//     if (input === 'стоп') {
//         alert('Программа завершена, посмотрите в консоли список покупок')
//         break
//     }

//     if (input === null) {
//         break //  выход из цикла при нажатии Cancel (отмена), а если нажать ОК то будет опять этот вопрос
//     }

//     count++ // добавляем в счетчик + 1
//     console.log('В корзине: ' +  input);

// }

// console.log('Общее кол-во товаров ' + count);




// let accountBalance = 1000
// const MIN_withdrawal = 100


// while (accountBalance > 0) {
//     let userInput = prompt(`Введите сумму для снятия (не менее ${MIN_withdrawal} руб.) или 0 для завершения:`)

//     if (userInput === null) {
//         alert('Операция отменена пользователем.')
//         break
//     }

//     let withdrawal = Number(userInput)

//     if (withdrawal === 0) break


//     if (withdrawal < MIN_withdrawal) {
//         alert(`Минимальная сумма для снятия: ${MIN_withdrawal} руб.`)
//         continue
//     }


//     if (withdrawal > accountBalance) {
//         alert(`Недостаточно средств на счете. Доступно: ${accountBalance} руб.`)
//     } else {
//         accountBalance -= withdrawal
//         alert(`Вы сняли ${withdrawal} руб. Остаток на счете: ${accountBalance}`)
//     }
// }

// alert(`Процесс завершен. Остаток на счете: ${accountBalance} руб.`)





// let correctPassword = 'password123'
// let maxAttempts = 3 // максимальное кол-во попыток (3)
// let input // то что вводит пользователь
// let count = 0 // счетчик сделаных попыток
// let lockoutTime = 3000 // Время блокировки в милисекундах

// while (count < maxAttempts) {
//     input = prompt('Введите пароль (или нажмите "Отмена" для выхода')

//     // Если нажать кнопку "Отмена" (пишем это сверху что бы не считать это за попытку)
//     if (input === null) {
//         alert('Вы вышли из программы.')
//         break
//     }

//     if (input === correctPassword) {
//         alert('Пароль верный! Доступ разрешен.')
//         break
//     } else {
//         count++
//         alert(`Неверный пароль. Осталось попыток: ${maxAttempts - count}`)
//     }

// }

// if (count === maxAttempts) {
//     alert('Превышенно количество попыток. Доступ заблокирован.')

//     setTimeout(() =>{
//         alert('Блокировка снята. Вы можете попробовать снова.')
//         count = 0 // Сброс счетчика после блокировки
//     }, lockoutTime)
// }


// Цикл do...while выполняется хотя бы один раз, даже если условие изночально ложно
// let y = 1000

// do {
//     console.log();
//     y -= 100
// } while (y > 100)


// let i = 0

// do {
//     console.log(i)
//     i++
// } while (i < 5)

// Сделай программу которая будет бесконечно складывать числа которые пользователь будет вводить в promt.
//  Когда пользователь напишет “стоп” или нажмет кнопку “Отмена” программа закончит выполнение,
//  посчитает результат и скажет сколько раз пользователь вводил числа. Используй: while, isNaN, break, continue и условия. Если будет введено не число то программа выдаст ошибку.


// let summ = 0
// input = Number(prompt('Введите число'))
// while (true) {
//     summ += 
// }



