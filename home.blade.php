@extends('master')

@section('title', 'Главная')

@section('content')
<main class="main">
        <section class="section_hello">
            <h1 class="section_hello_h1"><b>PC Home</b></h1>
            <h3 class="section_hello_h3">
                Место в котором ты окунешься
                <br>в виртуальную реальность
            </h3>
            <h3 class="section_hello2_h3">забудешь о рутине</h3>
            <h3 class="section_hello3_h3">и сможешь расслабиться</h3>
        </section>


        <section class="new_games">
            <h1 class="new_games_h1">Новые игры</h1>

            <div class="new_games_cards">
                <button class="button_game_card" onclick="onDisplay1()">
                    <div class="new_games_card">
                        <img src="img/bg3.jpg" class="new_games_card_img">
                    </div>
                </button>
                <button class="button_game_card" onclick="onDisplay2()">
                    <div class="new_games_card">
                        <img src="img/helldivers2.jpg" class="new_games_card_img">
                    </div>
                </button>
                <button class="button_game_card" onclick="onDisplay3()">
                    <div class="new_games_card">
                        <img src="img/sonsoftheforest.jpg" class="new_games_card_img">
                    </div>
                </button>
                <button class="button_game_card" onclick="onDisplay4()">
                    <div class="new_games_card">
                        <img src="img/spacemarine2.jpg" class="new_games_card_img">
                    </div>
                </button>
                <button class="button_game_card" onclick="onDisplay5()">
                    <div class="new_games_card">
                        <img src="img/outlasttrials.jpg" class="new_games_card_img">
                    </div>
                </button>
                <button class="button_game_card" onclick="onDisplay6()">
                    <div class="new_games_card">
                        <img src="img/wukong.jpg" class="new_games_card_img">
                    </div>
                </button>
            </div>


<!-- bg3 -->
            <div class="new_game1_block"  id="game1">
                <div class="new_game_block_display">
                    <div class="new_game_block_txt">
                        <h1 class="game_name">Baldur's Gate 3</h1>
                        <h3 class="game_desctiprion">
                            Ваш мозг стал вместилищем для личинки иллитида, и она пробуждает в вас таинственные, 
                            пугающие способности. Сопротивляйтесь паразиту и обратите тьму против себя самой – или же 
                            безоглядно отдайтесь злу и станьте его воплощением.</h3>
                    </div>

                    <div class="new_game_block_img">
                        <img src="img/bg3_back.jpg" class="new_game_img_back">
                    </div>
                </div>
            </div>
<!-- helldivers2 -->
            <div class="new_game1_block"  id="game2">
                <div class="new_game_block_display">
                    <div class="new_game_block_txt">
                        <h1 class="game_name">HELLDIVERS 2</h1>
                        <h3 class="game_desctiprion">
                        Действие игры происходит в далёком будущем. Игроки принимают на себя 
                        роли «адских десантников» — солдат на службе Супер-Земли, космического государства людей, 
                        которое ведёт галактическую войну с инопланетными врагами. 
                        Противниками Супер-Земли являются жуки-Терминиды и «социалистические» киборги-Автоматоны.</h3>
                    </div>

                    <div class="new_game_block_img">
                        <img src="img/helldivers2_back.jpg" class="new_game_img_back">
                    </div>
                </div>
            </div>
<!-- sons of the forest -->
            <div class="new_game1_block"  id="game3">
                <div class="new_game_block_display">
                    <div class="new_game_block_txt">
                        <h1 class="game_name">Sons Of The Forest</h1>
                        <h3 class="game_desctiprion">
                        Отправившись на поиски пропавшего миллиардера на отдаленном острове, 
                        вы оказываетесь в кишащем каннибалами аду. Создавайте, стройте и боритесь 
                        за выживание, в одиночку или с друзьями, в этом новом ужасающем симуляторе 
                        выживания в открытом мире.</h3>
                    </div>

                    <div class="new_game_block_img">
                        <img src="img/sonsoftheforest_back.jpg" class="new_game_img_back">
                    </div>
                </div>
            </div>
<!-- Warhammer 40,000: Space Marine 2 -->
            <div class="new_game1_block"  id="game4">
                <div class="new_game_block_display">
                    <div class="new_game_block_txt">
                        <h1 class="game_name">Warhammer 40,000: Space Marine 2</h1>
                        <h3 class="game_desctiprion">
                        Обретите сверхчеловеческую мощь космодесантника. 
                        Пустите в ход смертоносные навыки и разрушительное оружие, чтобы истребить 
                        безжалостных тиранидов. Защитите Империум в ярких одиночных 
                        боях или многопользовательских режимах с видом от третьего лица.</h3>
                    </div>

                    <div class="new_game_block_img">
                        <img src="img/spacemarine2_back.jpg" class="new_game_img_back">
                    </div>
                </div>
            </div>
<!-- outlast trials -->
            <div class="new_game1_block"  id="game5">
                <div class="new_game_block_display">
                    <div class="new_game_block_txt">
                        <h1 class="game_name">The Outlast Trials</h1>
                        <h3 class="game_desctiprion">
                        В эпоху Холодной войны, и добрые люди из корпорации 
                        Меркофф невольно набирают подопытных кроликов для тестирования передовых 
                        методов промывания мозгов и контроля над разумом. В мире недоверия, 
                        страха и насилия ваши моральные принципы будут подвергнуты сомнению</h3>
                    </div>

                    <div class="new_game_block_img">
                        <img src="img/outlasttrials_back.jpg" class="new_game_img_back">
                    </div>
                </div>
            </div>
<!-- wukong -->
            <div class="new_game1_block"  id="game6">
                <div class="new_game_block_display">
                    <div class="new_game_block_txt">
                        <h1 class="game_name">Black Myth: Wukong</h1>
                        <h3 class="game_desctiprion">
                        Ролевой боевик по мотивам китайской мифологии. Его сюжет основывается на 
                        «Путешествии на Запад», одном из четырёх классических романов китайской литературы. 
                        Став Избранным, вы отправитесь в приключение, полное испытаний и чудес, 
                        в котором вам предстоит приподнять завесу тайны над великой легендой.</h3>
                    </div>

                    <div class="new_game_block_img">
                        <img src="img/wukong_back.jpg" class="new_game_img_back">
                    </div>
                </div>
            </div>
        </section>

        <section class="recomended_games">
            <h1 class="recomended_games_h1">Рекомендуем</h1>
            <div class="recomended_games_cards">
                <button class="button_game_card" onclick="onDisplay7()">
                    <div class="recomended_games_card">
                        <img src="img/terraria.jpg" class="recomended_games_card_img">
                    </div>
                </button>
                <button class="button_game_card" onclick="onDisplay8()">
                    <div class="recomended_games_card">
                        <img src="img/eldenring.jpg" class="recomended_games_card_img">
                    </div>
                </button>
                <button class="button_game_card" onclick="onDisplay9()">
                    <div class="recomended_games_card">
                        <img src="img/enderlilies.jpg" class="recomended_games_card_img">
                    </div>
                </button>
                <button class="button_game_card" onclick="onDisplay10()">
                    <div class="recomended_games_card">
                        <img src="img/witcher3.jpg" class="recomended_games_card_img">
                    </div>
                </button>
                <button class="button_game_card" onclick="onDisplay11()">
                    <div class="recomended_games_card">
                        <img src="img/ori.jpg" class="recomended_games_card_img">
                    </div>
                </button>
                <button class="button_game_card" onclick="onDisplay12()">
                    <div class="recomended_games_card">
                        <img src="img/horizon.jpg" class="recomended_games_card_img">
                    </div>
                </button>
            </div>
<!-- terraria -->
            <div class="new_game1_block"  id="game7">
                <div class="new_game_block_display">
                    <div class="new_game_block_txt">
                        <h1 class="game_name">Terraria</h1>
                        <h3 class="game_desctiprion">
                        Копайте, сражайтесь, исследуйте, стройте! 
                        Нет ничего невозможного в этой насыщенной событиями приключенческой игре. 
                        Весь мир — ваше полотно, а вся земля — ваши краски!
                        Хватайте инструменты и вперед! Создавайте оружие, чтобы 
                        сражаться с различными врагами в разных биомах.</h3>
                    </div>

                    <div class="new_game_block_img">
                        <img src="img/terraria_back.jpg" class="new_game_img_back">
                    </div>
                </div>
            </div>
<!-- elden ring -->
            <div class="new_game1_block"  id="game8">
                <div class="new_game_block_display">
                    <div class="new_game_block_txt">
                        <h1 class="game_name">Elden Ring</h1>
                        <h3 class="game_desctiprion">
                        Восстань, погасшая душа! 
                        Междуземье ждёт своего повелителя. 
                        Пусть благодать приведёт тебя к Кольцу Элден.</h3>
                    </div>

                    <div class="new_game_block_img">
                        <img src="img/eldenring_back.jpg" class="new_game_img_back">
                    </div>
                </div>
            </div>
<!-- ENDER LILIES: Quietus of the Knights -->
            <div class="new_game1_block"  id="game9">
                <div class="new_game_block_display">
                    <div class="new_game_block_txt">
                        <h1 class="game_name">ENDER LILIES: Quietus of the Knights</h1>
                        <h3 class="game_desctiprion">
                        Давным-давно, в далеком Запределье.
                        Внезапно начавшийся «дождь смерти» превратил живых существ в безумные живые трупы – «оскверненных».
                        Человеческий разум не мог выстоять перед лицом этой трагедии, и королевство пало.
                        Бесконечный, словно проклятый, дождь.</h3>
                    </div>

                    <div class="new_game_block_img">
                        <img src="img/enderlilies_back.jpg" class="new_game_img_back">
                    </div>
                </div>
            </div>
<!-- the witcher 3 -->
            <div class="new_game1_block"  id="game10">
                <div class="new_game_block_display">
                    <div class="new_game_block_txt">
                        <h1 class="game_name">The Witcher 3</h1>
                        <h3 class="game_desctiprion">
                        Вы — Геральт из Ривии. Города и поселения Северных королевств безжалостно 
                        стираются с лица земли потусторонним врагом, известным как Дикая Охота, 
                        которой неведом страх и жалость.</h3>
                    </div>

                    <div class="new_game_block_img">
                        <img src="img/witcher3_back.jpg" class="new_game_img_back">
                    </div>
                </div>
            </div>
<!-- ori -->
            <div class="new_game1_block"  id="game11">
                <div class="new_game_block_display">
                    <div class="new_game_block_txt">
                        <h1 class="game_name">Ori and the Blind Forest</h1>
                        <h3 class="game_desctiprion">
                        Лес Нибель умирает. Сильнейшая буря поразила его в самое сердце, 
                        и теперь его судьба зависит от того, сможет ли маленький герой по 
                        имени Ори найти в себе мужество и бросить вызов ужасному врагу.</h3>
                    </div>

                    <div class="new_game_block_img">
                        <img src="img/ori_back.jpg" class="new_game_img_back">
                    </div>
                </div>
            </div>
<!-- Horizon Forbidden West -->
            <div class="new_game1_block"  id="game12">
                <div class="new_game_block_display">
                    <div class="new_game_block_txt">
                        <h1 class="game_name">Horizon Forbidden West</h1>
                        <h3 class="game_desctiprion">
                        Земля умирает. Жестокие штормы и неудержимая болезнь опустошают 
                        разрозненные остатки человечества, в то время как устрашающие новые
                         машины рыщут по их границам. Жизнь на Земле стремительно движется 
                         к очередному вымиранию, и никто не знает, почему.</h3>
                    </div>

                    <div class="new_game_block_img">
                        <img src="img/horizon_back.jpg" class="new_game_img_back">
                    </div>
                </div>
            </div>
 
        </section>
        
        <section class="FAQ">
            <h1 class="have_questions">Есть вопросы?</h1>

            <hr class="hr1">

            <div class="FAQ_block1" id="FAQblock1">
                <div class="FAQ_flex">
                    <h2 class="FAQ_block1_h2">
                        Какие игры установлены на ПК?
                    </h2>
                    <button class="button_FAQ_h4" onclick="toggleDisplay()">
                        <img src="img/icons8-плюс-2-50.png" class="plus">
                    </button>
                </div>
                <h4 class="FAQ_block1_h4" id="FAQh4_1">
                    CS GO, GTA 5, Far Cry 6, Doom Eternal, Dota 2, Cyberpunk 2077, Rainbow Six Siege,
                     Apex Legends, PUB, League of Legends, Fortnite, Warface, Overwatch и др.
                </h2>
            </div>

            <hr class="hr1">

            <div class="FAQ_block1" id="FAQblock1">
                <div class="FAQ_flex">
                    <h2 class="FAQ_block1_h2">
                        Можно ли заранее забронировать компьютер?
                    </h2>
                    <button class="button_FAQ_h4" onclick="toggleDisplay2()">
                        <img src="img/icons8-плюс-2-50.png" class="plus">
                    </button>
                </div>
                <h4 class="FAQ_block1_h4" id="FAQh4_2">
                    Забронировать любой ПК можно телефону: +7 (999) 999 99 99 , а также, воспользовавшись формой на нашем сайте
                </h2>
            </div>

            <hr class="hr1">

            <div class="FAQ_block1" id="FAQblock1">
                <div class="FAQ_flex">
                    <h2 class="FAQ_block1_h2">
                        Можно ли прийти со своей едой и напитками?
                    </h2>
                    <button class="button_FAQ_h4" onclick="toggleDisplay3()">
                        <img src="img/icons8-плюс-2-50.png" class="plus">
                    </button>
                </div>
                <h4 class="FAQ_block1_h4" id="FAQh4_3">
                    К сожалению, посещение клуба со своими едой и напитками запрещено. 
                    Вы можете не переживать по поводу этого,
                    у нас очень широкий ассортимент напитков и закусок по демократичным ценам.
                </h2>
            </div>

            <hr class="hr1">

            <div class="FAQ_block1" id="FAQblock1">
                <div class="FAQ_flex">
                    <h2 class="FAQ_block1_h2">
                        Сколько в клубе игровых мест?
                    </h2>
                    <button class="button_FAQ_h4" onclick="toggleDisplay4()">
                        <img src="img/icons8-плюс-2-50.png" class="plus">
                    </button>
                </div>
                <h4 class="FAQ_block1_h4" id="FAQh4_4">
                    Стандартные места: 22 места. Места-VIP: 10 мест.
                </h2>
            </div>

            <hr class="hr1">

            <div class="FAQ_block1" id="FAQblock1">
                <div class="FAQ_flex">
                    <h2 class="FAQ_block1_h2">
                        Есть ли в клубе PlayStation?
                    </h2>
                    <button class="button_FAQ_h4" onclick="toggleDisplay5()">
                        <img src="img/icons8-плюс-2-50.png" class="plus">
                    </button>
                </div>
                <h4 class="FAQ_block1_h4" id="FAQh4_5">
                    В клубе есть 4 игровые консоли Sony PlayStation 5 + телевизоры Samsung OLED 4к 55"
                </h2>
            </div>

            <hr class="hr1">

            <div class="FAQ_block1" id="FAQblock1">
                <div class="FAQ_flex">
                    <h2 class="FAQ_block1_h2">
                        Какой режим работы клуба?
                    </h2>
                    <button class="button_FAQ_h4" onclick="toggleDisplay6()">
                        <img src="img/icons8-плюс-2-50.png" class="plus">
                    </button>
                </div>
                <h4 class="FAQ_block1_h4" id="FAQh4_6">
                    Мы работаем круглосуточно, без выходных.
                </h2>
            </div>

            <a class="a_none_decorate" href="contacts.html">
                <div class="contacts_link_button">
                    <h1 class="contacts_link_button_h1"><b>Связаться с нами</b></h1>
                </div>
            </a>
        </section>

        
    </main>
@endsection

<script>
    function toggleDisplay() {
        let element = document.getElementById('FAQh4_1');
        if (element.style.display == 'none') {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }

    function toggleDisplay2() {
        let element = document.getElementById('FAQh4_2');
        if (element.style.display == 'none') {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }

    function toggleDisplay3() {
        let element = document.getElementById('FAQh4_3');
        if (element.style.display == 'none') {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }

    function toggleDisplay4() {
        let element = document.getElementById('FAQh4_4');
        if (element.style.display == 'none') {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }

    function toggleDisplay5() {
        let element = document.getElementById('FAQh4_5');
        if (element.style.display == 'none') {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }

    function toggleDisplay6() {
        let element = document.getElementById('FAQh4_6');
        if (element.style.display == 'none') {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }

    function onDisplay1() {
        let element1 = document.getElementById('game1');
        let element2 = document.getElementById('game2');
        let element3 = document.getElementById('game3');
        let element4 = document.getElementById('game4');
        let element5 = document.getElementById('game5');
        let element6 = document.getElementById('game6');
        if (element1.style.display == 'none') {
            element1.style.display = 'block';
        } else {
            element1.style.display = 'none';
        }
        if (element2.style.display == 'none') {
            element2.style.display = 'none';
        } else {
            element2.style.display = 'none';
        }
        if (element3.style.display == 'none') {
            element3.style.display = 'none';
        } else {
            element3.style.display = 'none';
        }
        if (element4.style.display == 'none') {
            element4.style.display = 'none';
        } else {
            element4.style.display = 'none';
        }
        if (element5.style.display == 'none') {
            element5.style.display = 'none';
        } else {
            element5.style.display = 'none';
        }
        if (element6.style.display == 'none') {
            element6.style.display = 'none';
        } else {
            element6.style.display = 'none';
        }
    }

    function onDisplay2() {
        let element1 = document.getElementById('game1');
        let element2 = document.getElementById('game2');
        let element3 = document.getElementById('game3');
        let element4 = document.getElementById('game4');
        let element5 = document.getElementById('game5');
        let element6 = document.getElementById('game6');
        if (element1.style.display == 'none') {
            element1.style.display = 'none';
        } else {
            element1.style.display = 'none';
        }
        if (element2.style.display == 'none') {
            element2.style.display = 'block';
        } else {
            element2.style.display = 'none';
        }
        if (element3.style.display == 'none') {
            element3.style.display = 'none';
        } else {
            element3.style.display = 'none';
        }
        if (element4.style.display == 'none') {
            element4.style.display = 'none';
        } else {
            element4.style.display = 'none';
        }
        if (element5.style.display == 'none') {
            element5.style.display = 'none';
        } else {
            element5.style.display = 'none';
        }
        if (element6.style.display == 'none') {
            element6.style.display = 'none';
        } else {
            element6.style.display = 'none';
        }
    }

    function onDisplay3() {
        let element1 = document.getElementById('game1');
        let element2 = document.getElementById('game2');
        let element3 = document.getElementById('game3');
        let element4 = document.getElementById('game4');
        let element5 = document.getElementById('game5');
        let element6 = document.getElementById('game6');
        if (element1.style.display == 'none') {
            element1.style.display = 'none';
        } else {
            element1.style.display = 'none';
        }
        if (element2.style.display == 'none') {
            element2.style.display = 'none';
        } else {
            element2.style.display = 'none';
        }
        if (element3.style.display == 'none') {
            element3.style.display = 'block';
        } else {
            element3.style.display = 'none';
        }
        if (element4.style.display == 'none') {
            element4.style.display = 'none';
        } else {
            element4.style.display = 'none';
        }
        if (element5.style.display == 'none') {
            element5.style.display = 'none';
        } else {
            element5.style.display = 'none';
        }
        if (element6.style.display == 'none') {
            element6.style.display = 'none';
        } else {
            element6.style.display = 'none';
        }
    }

    function onDisplay4() {
        let element1 = document.getElementById('game1');
        let element2 = document.getElementById('game2');
        let element3 = document.getElementById('game3');
        let element4 = document.getElementById('game4');
        let element5 = document.getElementById('game5');
        let element6 = document.getElementById('game6');
        if (element1.style.display == 'none') {
            element1.style.display = 'none';
        } else {
            element1.style.display = 'none';
        }
        if (element2.style.display == 'none') {
            element2.style.display = 'none';
        } else {
            element2.style.display = 'none';
        }
        if (element3.style.display == 'none') {
            element3.style.display = 'none';
        } else {
            element3.style.display = 'none';
        }
        if (element4.style.display == 'none') {
            element4.style.display = 'block';
        } else {
            element4.style.display = 'none';
        }
        if (element5.style.display == 'none') {
            element5.style.display = 'none';
        } else {
            element5.style.display = 'none';
        }
        if (element6.style.display == 'none') {
            element6.style.display = 'none';
        } else {
            element6.style.display = 'none';
        }
    }

    function onDisplay5() {
        let element1 = document.getElementById('game1');
        let element2 = document.getElementById('game2');
        let element3 = document.getElementById('game3');
        let element4 = document.getElementById('game4');
        let element5 = document.getElementById('game5');
        let element6 = document.getElementById('game6');
        if (element1.style.display == 'none') {
            element1.style.display = 'none';
        } else {
            element1.style.display = 'none';
        }
        if (element2.style.display == 'none') {
            element2.style.display = 'none';
        } else {
            element2.style.display = 'none';
        }
        if (element3.style.display == 'none') {
            element3.style.display = 'none';
        } else {
            element3.style.display = 'none';
        }
        if (element4.style.display == 'none') {
            element4.style.display = 'none';
        } else {
            element4.style.display = 'none';
        }
        if (element5.style.display == 'none') {
            element5.style.display = 'block';
        } else {
            element5.style.display = 'none';
        }
        if (element6.style.display == 'none') {
            element6.style.display = 'none';
        } else {
            element6.style.display = 'none';
        }
    }

    function onDisplay6() {
        let element1 = document.getElementById('game1');
        let element2 = document.getElementById('game2');
        let element3 = document.getElementById('game3');
        let element4 = document.getElementById('game4');
        let element5 = document.getElementById('game5');
        let element6 = document.getElementById('game6');
        if (element1.style.display == 'none') {
            element1.style.display = 'none';
        } else {
            element1.style.display = 'none';
        }
        if (element2.style.display == 'none') {
            element2.style.display = 'none';
        } else {
            element2.style.display = 'none';
        }
        if (element3.style.display == 'none') {
            element3.style.display = 'none';
        } else {
            element3.style.display = 'none';
        }
        if (element4.style.display == 'none') {
            element4.style.display = 'none';
        } else {
            element4.style.display = 'none';
        }
        if (element5.style.display == 'none') {
            element5.style.display = 'none';
        } else {
            element5.style.display = 'none';
        }
        if (element6.style.display == 'none') {
            element6.style.display = 'block';
        } else {
            element6.style.display = 'none';
        }
    }

    function onDisplay7() {
        let element1 = document.getElementById('game7');
        let element2 = document.getElementById('game8');
        let element3 = document.getElementById('game9');
        let element4 = document.getElementById('game10');
        let element5 = document.getElementById('game11');
        let element6 = document.getElementById('game12');
        if (element1.style.display == 'none') {
            element1.style.display = 'block';
        } else {
            element1.style.display = 'none';
        }
        if (element2.style.display == 'none') {
            element2.style.display = 'none';
        } else {
            element2.style.display = 'none';
        }
        if (element3.style.display == 'none') {
            element3.style.display = 'none';
        } else {
            element3.style.display = 'none';
        }
        if (element4.style.display == 'none') {
            element4.style.display = 'none';
        } else {
            element4.style.display = 'none';
        }
        if (element5.style.display == 'none') {
            element5.style.display = 'none';
        } else {
            element5.style.display = 'none';
        }
        if (element6.style.display == 'none') {
            element6.style.display = 'none';
        } else {
            element6.style.display = 'none';
        }
    }

    function onDisplay8() {
        let element1 = document.getElementById('game7');
        let element2 = document.getElementById('game8');
        let element3 = document.getElementById('game9');
        let element4 = document.getElementById('game10');
        let element5 = document.getElementById('game11');
        let element6 = document.getElementById('game12');
        if (element1.style.display == 'none') {
            element1.style.display = 'none';
        } else {
            element1.style.display = 'none';
        }
        if (element2.style.display == 'none') {
            element2.style.display = 'block';
        } else {
            element2.style.display = 'none';
        }
        if (element3.style.display == 'none') {
            element3.style.display = 'none';
        } else {
            element3.style.display = 'none';
        }
        if (element4.style.display == 'none') {
            element4.style.display = 'none';
        } else {
            element4.style.display = 'none';
        }
        if (element5.style.display == 'none') {
            element5.style.display = 'none';
        } else {
            element5.style.display = 'none';
        }
        if (element6.style.display == 'none') {
            element6.style.display = 'none';
        } else {
            element6.style.display = 'none';
        }
    }

    function onDisplay9() {
        let element1 = document.getElementById('game7');
        let element2 = document.getElementById('game8');
        let element3 = document.getElementById('game9');
        let element4 = document.getElementById('game10');
        let element5 = document.getElementById('game11');
        let element6 = document.getElementById('game12');
        if (element1.style.display == 'none') {
            element1.style.display = 'none';
        } else {
            element1.style.display = 'none';
        }
        if (element2.style.display == 'none') {
            element2.style.display = 'none';
        } else {
            element2.style.display = 'none';
        }
        if (element3.style.display == 'none') {
            element3.style.display = 'block';
        } else {
            element3.style.display = 'none';
        }
        if (element4.style.display == 'none') {
            element4.style.display = 'none';
        } else {
            element4.style.display = 'none';
        }
        if (element5.style.display == 'none') {
            element5.style.display = 'none';
        } else {
            element5.style.display = 'none';
        }
        if (element6.style.display == 'none') {
            element6.style.display = 'none';
        } else {
            element6.style.display = 'none';
        }
    }

    function onDisplay10() {
        let element1 = document.getElementById('game7');
        let element2 = document.getElementById('game8');
        let element3 = document.getElementById('game9');
        let element4 = document.getElementById('game10');
        let element5 = document.getElementById('game11');
        let element6 = document.getElementById('game12');
        if (element1.style.display == 'none') {
            element1.style.display = 'none';
        } else {
            element1.style.display = 'none';
        }
        if (element2.style.display == 'none') {
            element2.style.display = 'none';
        } else {
            element2.style.display = 'none';
        }
        if (element3.style.display == 'none') {
            element3.style.display = 'none';
        } else {
            element3.style.display = 'none';
        }
        if (element4.style.display == 'none') {
            element4.style.display = 'block';
        } else {
            element4.style.display = 'none';
        }
        if (element5.style.display == 'none') {
            element5.style.display = 'none';
        } else {
            element5.style.display = 'none';
        }
        if (element6.style.display == 'none') {
            element6.style.display = 'none';
        } else {
            element6.style.display = 'none';
        }
    }

    function onDisplay11() {
        let element1 = document.getElementById('game7');
        let element2 = document.getElementById('game8');
        let element3 = document.getElementById('game9');
        let element4 = document.getElementById('game10');
        let element5 = document.getElementById('game11');
        let element6 = document.getElementById('game12');
        if (element1.style.display == 'none') {
            element1.style.display = 'none';
        } else {
            element1.style.display = 'none';
        }
        if (element2.style.display == 'none') {
            element2.style.display = 'none';
        } else {
            element2.style.display = 'none';
        }
        if (element3.style.display == 'none') {
            element3.style.display = 'none';
        } else {
            element3.style.display = 'none';
        }
        if (element4.style.display == 'none') {
            element4.style.display = 'none';
        } else {
            element4.style.display = 'none';
        }
        if (element5.style.display == 'none') {
            element5.style.display = 'block';
        } else {
            element5.style.display = 'none';
        }
        if (element6.style.display == 'none') {
            element6.style.display = 'none';
        } else {
            element6.style.display = 'none';
        }
    }

    function onDisplay12() {
        let element1 = document.getElementById('game7');
        let element2 = document.getElementById('game8');
        let element3 = document.getElementById('game9');
        let element4 = document.getElementById('game10');
        let element5 = document.getElementById('game11');
        let element6 = document.getElementById('game12');
        if (element1.style.display == 'none') {
            element1.style.display = 'none';
        } else {
            element1.style.display = 'none';
        }
        if (element2.style.display == 'none') {
            element2.style.display = 'none';
        } else {
            element2.style.display = 'none';
        }
        if (element3.style.display == 'none') {
            element3.style.display = 'none';
        } else {
            element3.style.display = 'none';
        }
        if (element4.style.display == 'none') {
            element4.style.display = 'none';
        } else {
            element4.style.display = 'none';
        }
        if (element5.style.display == 'none') {
            element5.style.display = 'none';
        } else {
            element5.style.display = 'none';
        }
        if (element6.style.display == 'none') {
            element6.style.display = 'block';
        } else {
            element6.style.display = 'none';
        }
    }

</script>
<dialog class="review_dialog" id="review">
    <div class="flex_dialog">
        <h1 class="h1review_dialog">Отзывы</h1>
        <button class="button_review1" onclick="window.review.close()">
            <img src="{{asset('img/icons8-закрыть-окно-100.png')}}" class="close_img">
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


