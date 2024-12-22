@extends('master')

@section('title', 'Цены')

@section('content')
    <main class="main_price">
        <section class="price_section">
            <div class="flex_price_names">
                <button class="button_opacity" onclick="changeDisplayPrice1()">
                    <h3 class="price_name1">
                        Игровые зоны
                    </h3>
                </button>
                <button class="button_opacity" onclick="changeDisplayPrice2()">
                    <h3 class="price_name2">
                        Кухня
                    </h3>
                </button>
                <button class="button_opacity" onclick="changeDisplayPrice3()">
                    <h3 class="price_name3">
                        Напитки
                    </h3>
                </button>
                
            </div>
            
            <div class="price_block">
                
                <div class="price_block_content1" id="priceBlockContent1">
                    
                    <div class="price_block_1" >
                        <div class="price_block_left">
                            <h2 class="price_block_left_days">Пн-Чт</h2>
                            <h3 class="price1_block_left">ПК - 120 руб/час</h3><br>
                            <h3 class="price2_block_left">ПК VIP - 200 руб/час</h3><br>
                            <h3 class="price3_block_left">Sony PS5 - 200 руб/час</h3><br><br><br>

                            <h3 class="price1_block_left">ПК - 100 руб/час</h3><br>
                            <h3 class="price2_block_left">ПК VIP - 160 руб/час</h3><br>
                            <h3 class="price3_block_left">Sony PS5 - 160 руб/час</h3>
                        </div>

                        <div class="price_block_center">
                            <h2 class="price_block_center_day">День</h2>
                            <h2 class="price_block_center_time1">11:00 - 20:00</h2>
                            <hr class="hr2">
                            <h2 class="price_block_center_night">Ночь</h2>
                            <h2 class="price_block_center_time2">20:00 - 11:00 </h2>
                        </div>

                        <div class="price_block_right">
                            <h2 class="price_block_left_days">Пт-Вс</h2>
                            <h3 class="price1_block_left">ПК - 150 руб/час</h3><br>
                            <h3 class="price2_block_left">ПК VIP - 250 руб/час</h3><br>
                            <h3 class="price3_block_left">Sony PS5 - 250 руб/час</h3><br><br><br>

                            <h3 class="price1_block_left">ПК - 130 руб/час</h3><br>
                            <h3 class="price2_block_left">ПК VIP - 200 руб/час</h3><br>
                            <h3 class="price3_block_left">Sony PS5 - 200 руб/час</h3>
                        </div>
                    </div>
                    
                    <div class="price_block_2">
                        <h1 class="price_block_2_all_night">Пакет вся ночь (с 23:00 до 07:00)</h1>
                        <br>
                        <div class="price_block_2_room">
                            <h2 class="price_block_2_room1">ПК - 700 руб</h2>
                            <h2 class="price_block_2_room2">ПК VIP- 700 руб</h2>
                            <h2 class="price_block_2_room3">Sony PS5</h2>
                        </div>
                    </div>
                </div>
            
                <div class="price_block_content2" id="priceBlockContent2">
                    <h1 class="price_block_content_h1">Шаурма - 250 рубле</h1>
                </div>

                <div class="price_block_content3" id="priceBlockContent3">
                    <h1 class="price_block_content_h1">Сок 1Л - 150 рубле</h1>
                </div>
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

<script>
    function changeDisplayPrice1() {
            let element1 = document.getElementById('priceBlockContent1');
            if (element1.style.display == 'none') {
                element1.style.display = 'block';
            } else {
                element1.style.display = 'block';
            }
            let element2 = document.getElementById('priceBlockContent2');
            if (element2.style.display == 'block') {
                element2.style.display = 'none';
            } else {
                element2.style.display = 'none';
            }
            let element3 = document.getElementById('priceBlockContent3');
            if (element3.style.display == 'block') {
                element3.style.display = 'none';
            } else {
                element3.style.display = 'none';
            }
            
        }

    function changeDisplayPrice2() {
        let element1 = document.getElementById('priceBlockContent1');
            if (element1.style.display == 'block') {
                element1.style.display = 'none';
            } else {
                element1.style.display = 'none';
            }
            let element2 = document.getElementById('priceBlockContent2');
            if (element2.style.display == 'none') {
                element2.style.display = 'block';
            } else {
                element2.style.display = 'block';
            }
            let element3 = document.getElementById('priceBlockContent3');
            if (element3.style.display == 'block') {
                element3.style.display = 'none';
            } else {
                element3.style.display = 'none';
            }
            
        }

    function changeDisplayPrice3() {
        let element1 = document.getElementById('priceBlockContent1');
            if (element1.style.display == 'block') {
                element1.style.display = 'none';
            } else {
                element1.style.display = 'none';
            }
            let element2 = document.getElementById('priceBlockContent2');
            if (element2.style.display == 'block') {
                element2.style.display = 'none';
            } else {
                element2.style.display = 'none';
            }
            let element3 = document.getElementById('priceBlockContent3');
            if (element3.style.display == 'none') {
                element3.style.display = 'block';
            } else {
                element3.style.display = 'block';
            }
            
        }
</script>