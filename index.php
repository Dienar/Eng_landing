<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function(){
        $("#ajax_form").on('submit',function(event){
            event.preventDefault();
            $.post("php/form.php", $(this).serialize());
            event.target.reset();
            alert("Ваше сообщение отправлено");
        })
        })
        $(document).ready(function(){
        $("#registr").on('submit',function(event){
            event.preventDefault();
            $.post("php/reg.php", $(this).serialize());
            event.target.reset();
            alert("Ваше сообщение отправлено");
        })
        })
    </script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="global_list_button_container">
    <div class="container_circle_text">
    <div class="circle_container">
        <div class="circle_main">
            <div class="circle_text_container">
                <div class = "circle_text">
                   G
                </div>
            </div>
        </div>
    </div>
    <div class="block_text"><p>Global</p></div>
</div>
<div class="list_container">
<a href="">Тестовый курс</a>
<a href="">Курсы</a>
<a href="">Помощь</a>
<a href="">О нас</a>
</div>
<div class="register_container">
    
</div>
</div><div class="img__container__start">
        <img src="img/women__ready.png" alt="">
    </div>
<div class="text_container_start">
    <div class="text_container_start_bold">
        <p>Английский - это <a class="text_container_start_bold__orange">просто</a><br>
        Запишитесь на наш курс</p>
    </div>
    
    <div class="text_container_start_under_bold">
       <p> Мы поможем вам разобраться с английским, даже если будете обучаться с нуля, <br>
        Так же присутвует подготовка к ЕГЭ и ОГЭ</p><br>
    </div>

    
    <div class="text_container_start_button">
        <a href="#registr" class="text_container_start_button__button">Начать сейчас</a>
    </div>
    <form action="" id="ajax_form" method="post">
<div class="text_container_start_bold__input">
    <input type="text" name="message" id="message" required maxlength="100"
    placeholder="Есть какие то вопросы ? Ответим за 15 минут">
    <button type="submit" class="text_container_start_bold__input__img">➤</button>
</form>
</div>
</div>
</div>


<div class="users_container">
    <div class="users_container__img">
        <img src="img/user.png" alt="">
        
    </div>
    <div class="users_container__text">
    <span>45k+ Уже зарегистировались у нас. <a class="text_container_start_bold__orange__second__word">Попробуй и ты !</a></span>
    </div>
</div>
<div class="block_info_about">
    <div class="info_blocks">
        <div class="block_eng">
            <p class="block_eng_right eco blue">Под каждый уровень</p>
            <h3>Разговорный курс</h3>
            <p class="block_eng_plus">	🌟 Подберем под каждый уровень языка !</p>
            <p class="block_eng_plus">	🌟 Опыт общения с настоящим носителем !</p>
            <p class="block_eng_plus">	🌟 Быстрое обучение !</p>
            <p class="block_eng_time">&#8987; 20 уроков</p>
            <div class="block_eng_button">
            <a href="#registr">Купить сейчас</a>
            
        </div>
        
        </div>
        <div class="block_eng">
            <p class="block_eng_right eco">Экономный 💵</p>
            <p class="block_eng_right">Хит 🔥</p>
            <h3>Научиться с нуля</h3>
            <p class="block_eng_plus">	🌟 Идеально подойдёт для новичков !</p>
            <p class="block_eng_plus">	🌟 Доступная цена !</p>
            <p class="block_eng_plus">	🌟 Быстрое обучение !</p>
            <p class="block_eng_time">&#8987; 20 уроков</p>
            <div class="block_eng_button">
            <a href="#registr">Купить сейчас</a>
            
        </div>
        
        </div>
        <div class="block_eng">
            <p class="block_eng_right eco">Быстрое обучение</p>
            <h3>Уровень носителя</h3>
            <p class="block_eng_plus">  🌟 Научиться грамматике и лексике !</p>
            <p class="block_eng_plus">	🌟 Доступная цена !</p>
            <p class="block_eng_plus">	🌟 Огромное количесвто практики !</p>
            <p class="block_eng_time">&#8987; 20 уроков</p>
            <div class="block_eng_button">
            <a href="#registr">Купить сейчас</a>
            
        </div>
        
        </div>
        <div class="block_eng">
            <p class="block_eng_right">Хит 🔥</p>
            <h3>Подготовка к экзамену</h3>
            <p class="block_eng_plus">	🌟 Подготовка к ЕГЭ и ОГЭ !</p>
            <p class="block_eng_plus">	🌟 Подготовим с нуля !</p>
            <p class="block_eng_plus">	🌟 Быстрая подготовка !</p>
            <p class="block_eng_time">&#8987; 20 уроков</p>
            <div class="block_eng_button">
            <a href="#registr">Купить сейчас</a>
            
        </div>
        
        </div>
    </div>
</div>

<div class="block_test_course">
    <div class="text_test_course">
        <h1>Не можете определиться и выбрать свой курс ?</h1> <h4> Пройдите тестовый урок чтобы решить !</h4>
    </div>
    <div class="block_right_test_course">
        <div class="first-block_test_course">
            <h3>Консультация от спецаилиста</h3>
            <hr>
            <div class="second-block_img_text">
            <img src="img/Sparcle.svg" alt=""><p> Занимает не более 20-ти минут по времени</p>
            <img src="img/Sparcle.svg" alt=""><p> Бесплатная консультация</p>
        </div>
        <h2>Бесплатно</h2>
            <a onclick="Freetest()"><button>Начать</button></a>
        </div>
        <div class="second-block_test_course">
            <h3>Тест для получения скидки на курс !</h3>
            <hr>
            <div class="second-block_img_text">
            <img src="img/Sparcle.svg" alt=""><p> После прохождения вы получите скидку !</p>
            <img src="img/Sparcle.svg" alt=""><p> Уровень для прохождения теста B2</p>
        </div>
            <h2>Бесплатно</h2>
            <button>Начать</button>
        </div>
    </div>
</div>
<div class="block_info_lessons">
    <div class="block_left_lessons">
       
        <div class="info_img_lessons">
            <img src="img/img_lessons.png" alt="">
            <div class="info_text_lessons">
            <h2>Интерактивная платформа</h2>
            <p>Все в одном месте: занятия с преподавателем,
             упражнения и трекер прогресса</p>
        </div>
        </div>
    </div>
<div class="block_right_lessons">
   
    <div class="img_right_lessons">
        <img src="img/img_right_lessons.png" alt="">
        <div class="text_right_lessons">
        <h3>Мобильное приложение</h3>
           <p> Чтобы учить новые слова
             и тренировать грамматику когда угодно и где угодно</p>
    </div>
    </div>
</div>
</div>

<div class="block_bonus_form">
    <div class="left_block_bonus">
        <h2>Успейте забрать скидку до 20% на любой курс</h2>
        <p>Оставьте заявку на вводный урок сейчас и учитесь дешевле даже после завершения акции</p>
<div class="left_block_bonus_buttons">
<p>диагностика уровня бесплатно</p>
<p class="left_block_bonus_buttons second_child">персональный план</p>
</div>
</div>
<div class="right_block_bonus">
    <form action="" id="registr">
        <div class="right_block_bonus_text first_block">
        <input type="text" name="name" required placeholder="Имя">
    </div>
    <div class="right_block_bonus_text">
        <input type="email" name="email" required placeholder="Почта"></div>
        <div class="right_block_bonus_text">
        <input type="tel" data-tel-input required placeholder="+7 (999) 999-99-99" id="phone-mask"></div>
        <div class="right_block_bonus_text checkbox_label">
        <input type="checkbox" name="phone" class="custom-checkbox" id="happy" name="happy" value="yes" required><label for="happy">Даю согласие на обработу персональных данных</label></div>
        <div class="right_block_bonus_text_submit_button">
        <input type="submit" value="Получить подарок"></div>
    </form>
</div>
</div>
<div class="container_circle_text bottom_block">
    <div class="circle_container">
        <div class="circle_main">
            <div class="circle_text_container">
                <div class = "circle_text">
                   G
                </div>
            </div>
        </div>
    </div>
    <div class="list_container_a"><p>Global</p>
    <a href="">Правила акции</a>
    <a href="">Оферта</a>
    <a href="">Политика конфидециальности</a>
    <p>© Global, 2024</p>
    </div></div>
<script src="https://unpkg.com/imask"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="jquery-3.7.1.min.js"></script>
<script>
    function Freetest(){
  var result = confirm("У вас будет только 1 попытка, начинаем?");
  if(result){
 window.location = "test_free.html";   
  }else{
    
  }
};
</script>
<script src="test.js"></script>
</body>
</html>