@extends('master')

@section('title', 'О нас')

@section('content')
<main class="main">
        <section class="banner_for_us">
            <div class="banner_for_us_left">
                    <h1 class="banner_for_us_h1">
                        О нашем клубе
                    </h1>
                    <h3 class="banner_for_us_h3">
                        PC Home - компьютерный клуб нового поколения для игроков
                        <br>всех уровней. Наша миссия - предоставить абсолютно каждому
                        <br>человеку все необходимое, чтобы максимально быстро
                        <br>переместиться из реальности в кибер-мир, полный
                        <br>возможностей и расслабления
                    </h3>
                    <h3 class="banner_for_us_hh3">
                        Клуб оснащён топовым железом, отвечающим всем требованиям
                        <br>для комфортной и реалистичной игры.
                        <br>Проводи время за играми невероятно интересно вместе
                        <br>с нами, с друзьями или своей командой!
                    </h3>
                </div>
        </section>

        
        <div class="flex_for_us_block">
            <h1 class="for_us_block_h1" id="whyWe">
                Преимущества клуба
            </h1>
            <section class="for_us_block">
                <div class="for_us_block1">
                    <img src="img/icons8-краска-металлик-100.png" class="for_us_block1_image">
                    <h2 class="for_us_block_name">
                        Атмосфера
                    </h2>
                    <h3 class="for_us_block_h3">
                        Комфортная среда
                        <br>и приятное погружение
                        <br>в виртуальную реальность
                        <br>в стенах нашего клуба
                    </h3>
                </div>

                <div class="for_us_block1">
                    <img src="img/icons8-компьютер-100.png" class="for_us_block1_image">
                    <h2 class="for_us_block_name">
                        Мощное оборудование
                    </h2>
                    <h3 class="for_us_block_h3">
                        ПК и игровые приставки оснащены
                        <br>современными компонентами,
                        <br>способными выдержать любые
                        <br>нагрузки
                    </h3>
                </div>

                <div class="for_us_block1">
                    <img src="img/icons8-тележка-96.png" class="for_us_block1_image">
                    <h2 class="for_us_block_name">
                        Ассортимент
                    </h2>
                    <h3 class="for_us_block_h3">
                        У нас найдётся любая игра.
                        <br>Еженедельное обновление
                        <br>каталога игр. Установка игр по
                        <br>просьбам посетителей
                    </h3>
                </div>

                <div class="for_us_block1">
                    <img src="img/icons8-открыто-24-7-96.png" class="for_us_block1_image">
                    <h2 class="for_us_block_name">
                        Работаем 24/7
                    </h2>
                    <h3 class="for_us_block_h3">
                        Круглосуточная работа
                        <br>позволяет погрузиться в мир
                        <br>компьютерных игр в любое
                        <br>время суток
                    </h3>
                </div>

                <div class="for_us_block1">
                    <img src="img/icons8-фастфуд-100.png" class="for_us_block1_image">
                    <h2 class="for_us_block_name">
                        Бар
                    </h2>
                    <h3 class="for_us_block_h3">
                        Наш ассортимент порадует
                        <br>тебя вкусной едой и напитками
                        <br>и не оставит грустным
                        <br>и голодным
                    </h3>
                </div>

                <div class="for_us_block1">
                    <img src="img/icons8-телохранительница-100.png" class="for_us_block1_image">
                    <h2 class="for_us_block_name">
                        Поддержка
                    </h2>
                    <h3 class="for_us_block_h3">
                        Ты всегда можешь
                        <br>рассчитывать на помощь
                        <br>администратора если вдруг
                        <br>что-то пойдет не так
                    </h3>
                </div>
                
            </section>
        </div>
    </main>
@endsection

<dialog class="review_dialog" id="review">
        <div class="flex_dialog">
            <h1 class="h1review_dialog">Отзывы</h1>
            <button class="button_review1" onclick="window.review.close()">
                <img src="img/icons8-закрыть-окно-100.png" class="close_img">
            </button>
        </div>

        <div class="feedback">
                <div class="feedback_1">

                    <div class="name_text">
                        <div class="circle" style="background-color: #910a0a;"></div>
                        <h1 class="feedback_1_name">Мария П.</h1>
                    </div>

                    <h2 class="feedback_1_text">
                        Хороший клуб, очень красиво,было очень удобно играть
                        <br>так же приятный администратор.Можно купить напитки по достаточно хорошим ценам.
                    </h2>
                </div>

                <div class="feedback_1">

                    <div class="name_text">
                        <div class="circle" style="background-color: #2b0091;"></div>
                        <h1 class="feedback_1_name">Дмитрий Лунаковьев</h1>
                    </div> 

                    <h2 class="feedback_1_text">
                        Клуб понравился. Компьютеры хорошие, цены недорогие, особенно 
                        понравились цены на пакеты времени - очень выгодно. Администраторы отзывчивые.
                    </h2>
                </div>

                <div class="feedback_1">

                    <div class="name_text">
                        <div class="circle" style="background-color: #ac7aec;"></div>
                        <h1 class="feedback_1_name">Danila Nazarov</h1>
                    </div>

                    <h2 class="feedback_1_text">
                        Клуб хороший, хожу сюда долго, админы топ.
                        Цены демократичные, вайб компов если понимаешь о чем я.
                        Есть аккаунты для кс с прайсом если нет своего(другие игры тоже есть)
                    </h2>
                </div>

                <div class="feedback_1">

                    <div class="name_text">
                        <div class="circle" style="background-color: #8f36ca;"></div>
                        <h1 class="feedback_1_name">karim Saifutdinov</h1>
                    </div>

                    <h2 class="feedback_1_text">
                        Хороший и приятный киберклуб,цены приемлемые чуть дороговаты,но в целом все отлично и очень приветливые администраторы,советую посетить лучший кибер в городе!
                    </h2>
                </div>

                <div class="feedback_1">

                    <div class="name_text">
                        <div class="circle" style="background-color: #68124b;"></div>
                        <h1 class="feedback_1_name">Валерий Р.</h1>
                    </div>

                    <h2 class="feedback_1_text">
                        Хорошие компы, лучший персонал,
                        Крутая атмосфера. Рекомендую каждому
                    </h2>
                </div>

                <div class="feedback_1">

                    <div class="name_text">
                        <div class="circle" style="background-color: #1d31a0;"></div>
                        <h1 class="feedback_1_name">Сергей Иванов</h1>
                    </div>

                    <h2 class="feedback_1_text">
                        Лучший ПК клуб в Ульяновске, часто прихожу после 
                        работы что бы поиграть в любимые игры. Приятная атмосфера и не высокий 
                        ценник. Всем рекомендую!
                    </h2>
                </div>


        </div>
        
    </dialog>