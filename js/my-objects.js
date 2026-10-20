// Как записать много данных без использования объектов
// let knight = ['Sir Lancelot', 100, 100, 100, ['sword', 'shield']] // knight - рыцарь 

// Содание объекта
let knight = {
    playerName: 'Sir Lancelot',
    health: 100,
    srenght: 100,
    mana: 100,
    inventory: ['sword', 'shield']
}

console.log(knight)






/* Карточка сотрудника разработчика IT компании */
let developerCard = {}

developerCard.name = 'John Doe'
developerCard.age = '20'
developerCard.position = 'Frontend Developer'
developerCard.departament = 'Web Development'
developerCard.email = 'john.doe@xample.com'
developerCard.phone = '89049049090'

developerCard.experience = [
    {
        company: 'Yandex',
        role: 'Junior Frontend Developer',
        skills: ['HTML', 'CSS', 'JS'],
        duration: '1 year'
    },
    {
        company: 'Google',
        role: 'Middle Frontend Developer',
        duration: '6 months'
    }
]

console.log(developerCard)

developerCard.experience[0].skills.push('React') // Добавится новый скилл

delete developerCard.experience[0] // Удаление опыта с id[0] не оставляет в ячейке Empty
developerCard.experience.shift() // Полное удаление чтобы не осталось 'Empty' после удаления через delete

console.log(developerCard)






// Вывод всего объектаа через for .. in 
/* for (let key in developerCard) {
    console.log(`${key}: ${developerCard[key]}`)
} */


























/* let student = {}

student.name = 'Kirill Fenyuk'
student.grade = '10D'
student.age = '16'
student.subjects = ['Информатика', 'Физкультура']
student.contact = {
  email: 'kirill.fenyuk@xample.com',
  phone: '+7 (999) 000-00-00'
}

console.log(student) */











let library = {
    book1: {
        title: 'Гроза',
        author: 'А.Н.Островский',
        year: '1859',
        available: true
    },
    book2: {
        title: "Преступление и наказание",
        author: "Фёдор Достоевский",
        year: 1866,
        available: false
    },
    book3: {
        title: "Мастер и Маргарита",
        author: "Михаил Булгаков",
        year: 1967,
        available: true
    }
}

function addBook(id, book) {
    library[id] = book
}

function toggleAvailability(id) {
    library[id].available = !library[id].available
}


addBook("book4", {
    title: "Алхимик",
    author: "Пауло Коэльо",
    year: 1988,
    available: true
})

toggleAvailability('book3')


console.log(library)


for (let id in library) {
    if (library[id].available) {
        console.log(`${id}: ${library[id].title} - ${library[id].author} (${library[id].year})`)
    }

}