# Тестове завдання
## Пояснення
* Для дій було створено інтерфейси, один відповідає за можливість видавати звуки, інший - полювати
* Було створено два абстрактні класи, оскільки в завданні було сказано, що іграшки-собаки не можуть полювати і не всі можуть видавати звуки, тому абстрактний клас Dog реалізовує інтерфейси одразу і ISoundable, і IHuntable, а абстрактний клас іграшкової собаки не обов'язково повинен реалізовувати ці інтерфейси.
* Резинова такса реалізовує інтерфейс ISoundable і пищить, плюшевий лабрадор не робить нічого.
* Усі тварини собаки наслідуються від класу Dog, усі іграшки від класу ToyDog
* Тести було написано для кожного класу, від якого утворюється об'єкт
## Відповіді на питання:
1. Як працюють індекси у БД? - Індекси у БД - це спеціальні об'єкти, що дозволяють оптимізувати пошук елементів БД за певними значеннями. Зазвичай індексують ті колонки, за значеннями яких потрібно буде часто знаходити інформацію. Наприклад, можна індексувати поле категорії для посту, щоб швидше знаходити пости, що належать до певної категорії.
2. Які є JOIN в MySQL? - CrossJoin - використовується нечасто, є декартовим добутком двох(чи більше) таблиць, повертає таблицю, де кожне значення першої таблиці спіставляється з кожним значенням другої. Left outer - отримує всі значення першої таблиці, з другої таблиці повертає тільки значення, що відповідають першій, інакше буде значення тільки першої таблиці. Right outer - те саме, тільки таблиці міняються місцями (все з другої і відповідні з першої). Inner join - тільки відповідні з лівої і правої. Можливо ще щось не згадав.
3. Що таке dependency inversion? - Одна з частин принципу SOLID, відповідає за інвертування залежностей, замість залежності від конкретної реалізації класу чи методу краще впроваджувати залежності від інтерфейсів і абстрактних функцій. Дозволяє зменшити залежність від конкретної реалізації і досягти більшого рівня абстракції.
4. У чому різниця між GET та POST запитом? - GЕТ запит - запит на отримання даних від сервера, POST - запит на відправку даних на сервер. Get передає поля (якщо треба) відкрито у рядку браузера, POST передані дані приховує 
5. У чому різниця дзвінка self і static? - і те і те використовуються при роботі з класами. Self:: викликає методи у власне об'єкту класа, Static:: - викликає методи класу, а не конкретної реалізації(об'єкта) цього класу.
6. Яка різниця між MVP та MVC? - MVC - model-view-controller, складається з основних елементів моделі, представлення і контролера, при чому контролер є зв'язним ланцюгом між моделлю і представленням, а модель і представлення не мають інформації одне про одного і напряму не мають зв'язку. MVP - model-view-presenter, насправді ніколи не використовував, але розуміє, що у такому шаблоні проектування view реалізовує інтерфейси і має певні методи, а presenter підписується на зміни від view і оновлюється на умовах того, що отримав від view. 
7. Яка різниця між == та ===? == - це перевірка на відповідність без порівняння типів даних, а === - це перевірка з урахуванням типів даних. Можна сказати, що === - більш сувора перевірка. На прикладі покажу, що '0' == 0 поверне true, а '0' === 0 - false.
8. Що таке final class та final method? - final class - не дає його розширювати і наслідуватись від нього, final method - не дає перевизначати методи у дочірніх класах.
9. Якими фреймворками працювали? - працював з Laravel, починаю вивчати Vue js. Зовсім трохи вивчав Java Spring, але перейшов на php і не повертався. Laravel приваблює найбільше і вивчати його найцікавіше для мене. Колись давно вивчав NodeJS та писав на ньому простий інтернет-магазин, так що швидко згадаю і опаную знову.
10. Що можете розповісти про свої навички, що дають вам перевагу? Які з них відповідають нашій вимогам? - Маю непоганий досвід в php та laravel, на фронтенді вмію в bootstrap і вчу Vue. Вмію швидко і багато вчитися, люблю дізнаватися нове, не втрачаю настрою в стресових ситуаціях і бажаю повністю посвятити себе веб-розробці, готовий вчитися більше і більше. З того, що описано в вакансії, не мав досвіду тільки з гугл-апі(але мав з curl в php, до апі підключався), Redis (наскільки розумію, нереляційна БД, тому деякий досвід з MongoDB маю, думаю швидко розберусь) та Django(працював з Python, з часом розберусь). Шукаю місце першої роботи, заради якої готовий вчитися і працювати дуже багато.
## Дякую за увагу
