@extends('master')

@section('title', 'Оборудование')

@section('content')
    <main class="main">
    <h1 class="equipment_h1">
            Оборудование в нашем клубе
        </h1>
        <h2 class="equipment_h2">Игровые ПК</h2>
        <section class="equipment_section_pc">
            <div class="equipment_pc1">
                <img src="img/pc0.png" class="pc1_img">
                <div class="equipment_pc11">
                    <h4 class="equipment_h4">
                        <span class="equipment_span">
                            Стандарт:<br><br>
                        </span>
                        Процессор: AMD Ryzen 5 3600X
                        <br>Модуль памяти: KINGSTON HyperX FURY 16gb DDR4
                        <br>Видеокарта: ASUS nVidia GeForce RTX 3060 6bg
                        <br>Монитор: AOC GAMING C24G1 24"
                        <br>Клавиатура: Logitech G G413 Carbon
                        <br>Игровая мышь: Logitech G 403 HERO
                        <br>Игровое кресло: Dxracer DH73/NB
                    </h4>
                </div>
            </div>

            <div class="equipment_pc2">
                <img src="img/pc1.png" class="pc2_img">
                <div class="equipment_pc22">
                    <h4 class="equipment_h4">
                        <span class="equipment_span">
                            VIP:<br><br>
                        </span>
                        Процессор: AMD Risen 7 5800X
                        <br>Модуль памяти: KINGSTON HyperX FURY 16gb DDR4
                        <br>Видеокарта: ASUS nVidia GeForce RTX 3070SUPER 8bg
                        <br>Монитор: AOC GAMING C24G1 27"
                        <br>Клавиатура: Logitech G G413 Carbon
                        <br>Игровая мышь: Logitech G 403 HERO
                        <br>Игровое кресло: Dxracer DH73/NB
                    </h4>
                </div>
            </div>
        </section>
        <h2 class="equipment_h2_ps5">Игровые приставки</h2>
        <section class="equipment_section_ps5">
            <img src="img/playstation5.jpg" class="ps5">
            <div class="equipment_ps5">
                <h4 class="equipment_h4_ps5">
                    Мы не отстаём от тенденций современных девайсов.
                    <br>Поэтому в нашем компьютерном клубе также можно не
                    <br>только поиграть на ПК, но и насладиться игрой на
                    <br>Sony Playstation.<br>
                    <br>В клубе представлено 4 игровых консолей Sony
                    <br>Playstation 5.
                </h4>
            </div>
            
        </section>
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