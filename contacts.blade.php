@extends('master')

@section('title', 'О нас')

@section('content')
    <main class="main">
    <h1 class="contacts_h1">
            <b>ОСТАВЬТЕ СВОИ КОНТАКТЫ</b>
        </h1>
        <h3 class="contacts_h3">
            Менеджер свяжется с вами и ответит на все интересующие вопросы
        </h3>
        <div class="contacts_inputs">
            <div class="send_name_block">
                <h5 class="input_name_block_h5">Ваше имя*</h5>
                <input class="input_name_block" placeholder="Никитос">
            </div>
            <div class="send_tel_block">
                <h5 class="input_name_block_h5">Номер телефона*</h5>
                <input class="input_tel_block" placeholder="+7 (900) 000-00-00">
            </div>
            <div class="send_name_block">
                <h5 class="input_name_block_h5">Комментарий</h5>
                <input class="input_comment_block" placeholder="Шаурма дизлайк">
            </div>
            <div class="send_contacts">
                <h1 class="send_contact_h1"><b>Отправить</b></h1>
            </div>
        </div>
        
        <div class="block_contacts">
            <div class="block_contacts_left">
                <h1 class="block_contacts_left_h1">
                    КОНТАКТЫ
                </h1>
                <div class="icon_and_description">
                    <img src="img/icons8-позиция-на-карте-мира-96.png" class="icon_geolocation">
                    <h3 class="h3_geolocation"> г. Ульяновск, Дворцовая улица, 4А/1</h3>
                </div>

                <div class="icon_and_description">
                    <img src="img/icons8-tel-58.png" class="icon_tel">
                    <h3 class="h3_geolocation">+7 (999) 999 99 99</h3>
                </div>

                <div class="icon_and_description">
                    <img src="img/icons8-speech-bubble-48.png" class="icon_help">
                    <h3 class="h3_geolocation">pchome@gmail.com</h3>
                </div>

                <div class="icon_and_description">
                    <img src="img/icons8-время-2-100.png" class="icon_time">
                    <h3 class="h3_geolocation">Работаем 24/7</h3>
                </div>
                <h5 class="contacts_h5">Связаться с нами можно любым удобным вам
                    <br>способом</h5>
                
            </div>
            <div class="block_contacts_right">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4f887ace846489a6b93f6f1af1f7d4025b6d276506e135a3f724bbe43bb44e51&amp;width=741&amp;height=436&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
        <br><br><br><br><br>
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