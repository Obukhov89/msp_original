<template>
    <div class="left-blocks">
            <div class="header__block left-block">
                <p class="header__block-title">Буфет. Истории за нашим столом</p>
                <!-- <img class="rk" src="../../public/img/bufet.jpg"/> -->
                <li class="header-list">ОКТЯБРЬСКИЕ ПОСИДЕЛКИ</li>
                <li class="header-list">Лучшие рассказчикив нашем Буфете</li>
            </div>

            <div class="header__block left-block">
                <p class="header__block-title">Сергей Гамаюнов (Черкесский)</p>
                <!-- <img class="rk" src="../../public/img/Sergey.jpg"/> -->
                <li class="header-list">В Прощенное воскресенье</li>
            </div>

            <div class="header__block left-block">
                <p class="header__block-title">Конкурсы на призы Литературного фонда имени Сергея Есенина</p>
                <!-- <img class="rk" src="../../public/img/priz-lf1.jpg"/> -->
                <li class="header-list">Литературный конкурс "Рассвет"</li>
            </div>
            <div class="link-block left-block">
                <!-- <img class="rk" src="../../public/img/r-u.jpg"/> -->
            </div>
            <div class="link-block left-block">
                <p class="link-block-title">Английский клуб</p>
                <li class="link-block-list">&#9658; Положение о клубе</li>
                <li class="link-block-list">&#9658; Зал Прозы</li>
                <li class="link-block-list">&#9658; Зал Поэзии</li>
                <li class="link-block-list">&#9658; Английская дуэль</li>
                <li class="link-block-list">&#9658; Форум клуба</li>
                <li class="link-block-list">&#9658; Атрибутика клуба</li>
                <li class="link-block-list">&#9658; Архив клуба</li>
                <li class="link-block-list">&#9658; Бар "За углом"</li>
            </div>
            <div class="link-block left-block">
                <!-- <img class="rk" src="../../public/img/platon-grakov.jpg"/> -->
            </div>
            <div class="link-block left-block">
                <!-- <img class="rk" src="../../public/img/reg.jpg"/> -->
            </div>
            <div class="link-block left-block">
                <!-- <img class="rk" src="../../public/img/donat.jpg"/> -->
            </div>
            <div class="link-block left-block">
                <!-- <img class="rk" src="../../public/img/h-s1.jpg"/> -->
            </div>
            <div class="link-block left-block">
                <p class="link-block-title">Наши авторы</p>
                <li class="link-block-list">&#9658; Знакомьтесь: нашего полку прибыло!</li>
                <li class="link-block-list">&#9658; Первые шаги на портале</li>
                <li class="link-block-list">&#9658; Правила портала</li>
            </div>
            <div class="link-block left-block">
                <li class="link-block-list">&#9658; Размышления о литературном труде</li>
            </div>
            <div class="link-block left-block">
                <li class="link-block-list">&#9658; Новости и объявления</li>
                <li class="link-block-list">&#9658; Блиц-конкурсы</li>
                <li class="link-block-list">&#9658; Тема недели</li>
                <li class="link-block-list">&#9658; Диалоги, дискуссии, обсуждения</li>
                <li class="link-block-list">&#9658; С днем рождения!</li>
                <li class="link-block-list">&#9658; Клуб мудрецов</li>
                <li class="link-block-list">&#9658; Наши Бенефисы</li>
            </div>
            <div class="link-block left-block">
                <li class="link-block-list">&#9658; Книга предложений</li>
            </div>
            <div class="link-block left-block">
                <CitySelect class="link-block-title "/>
            </div>
        </div>
</template>

<script>
export default {
    name: "LBlock"
}
</script>

<style scoped>
body {
    margin: 0 auto;
    background-color: #c6dcf2;
    font-family: Montserrat, sans-serif;

}

.container {
    margin: 0 auto;
    width: 1400px;
    /*border: 1px solid red;*/
    padding: 20px 10px;
    /* background-color: rgb(5, 134, 163); */

}

li {
    list-style: none;
}

.header__block {
    width: 180px;
    border: 2px solid white;
    background-color: #3b5e97;
    outline: solid 3px #3b5e97;

}

.header__block-title {
    border-bottom: 2px solid white;
    margin: 1px 1px 10px 1px;
    text-align: center;
    color: white;
    font-size: 12px;
    padding: 5px;
    /* letter-spacing: 1px; */
    font-weight: 600;
    /* font-family: monospace; */
    /*font-family: monospace;*/
}

.header-list {
    margin: 1px;
    text-align: center;
    color: white;
    font-size: 12px;
    padding: 5px 0;
    /*font-family: monospace;*/
    cursor: pointer;
}

.header-list:not(:last-child) {
    border-bottom: 2px solid white;
}

.header__title {
    border: 1px solid #3b5e97;
    background-color: #3b5e97;
    /* text-align: center; */
    text-transform: none;
    align-items: center;
    margin: 0 auto;
}

.header__title h1 {
    /* width: 500px; */
    text-align: center;
    /* font-family: 'Comfortaa', cursive; */
    font-family: 'Montserrat', cursive;

}

.header__group {
    display: flex;
    justify-content: space-between;

    align-items: center;
    margin: 0 auto;
}

.header__subtitle {

    text-align: center;
    letter-spacing: 1px;
}

.logo {
    /* margin-left: 100px; */
    /* margin-top: 10px; */
    width: 550px;
    /* height: 80px; */
}

.autorisation {
    padding-top: 5px;
    width: 300px;
    font-size: 12px;
}

.autorisation__title {
    margin: 0;
    background-color: #3b5e97;
}

.autorisation__form > div {
    display: flex;
    justify-content: space-between;
    width: 250px;
    margin: 10px auto;
    align-items: center;
}


.autorisation__subtitle {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-left: 40px;

}

.autorisation__subtitle button {
    background-color: #3b5e97;
    color: white;
    border: 1px solid;
    padding: 5px 10px;
    border-radius: 2px;
    /* font-family: cursive; */
    /*font-family: cursive;*/
}


.account_group {
    float: right;
    margin: 40px 100px 0 0;
}

.account_group p {
    font-family: Montserrat, sans-serif;
    font-size: 16px;
    line-height: 26px;
    font-weight: 300;
    color: white;
}



.adminBtn button{
    width: 200px;
    height: 30px;
    background: #ffffff;
    border: none;
    float: right;
    color: #3b5e97;
    margin-right: 3.5rem;
    margin-top: 8px;
}


h1,
h2,
h3,
h4 {
    /* text-transform: uppercase; */
    /* font-family: 'Comfortaa', cursive; */
    font-family: 'Montserrat', cursive;
    font-size: 16px;
    line-height: 26px;
    font-weight: 300;
    color: white;
    margin-bottom: 1em;
    text-align: center;
}

.content {
    position: relative;
    top: -287px;
    left: 320px;
    width: 1400px;
}

.form_text {
    font-family: 'Montserrat', sans-serif;
    font-size: 20px;
    line-height: 26px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: gray;
}
#navbar {
    background-color: #C6DCF2;
    margin: 0 auto;
}

#navbar ul {
    padding: 0 1px;
    list-style: none;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    margin: 10px 0 0 0;
}

#navbar ul li {
    /* border-top: solid 1px #e3e3e3; */
    padding: 3px;
    font-size: 13px;
}

#navbar ul li a {
    font-family: Montserrat, sans-serif;
    font-size: 16px;
    line-height: 26px;
    font-weight: 300;
    color: white;
    text-decoration: none;
}

.blocks{
    position:relative;
    display: flex;
}

.right-blocks{
    position: absolute;
    right: 0;
    top: 0;
    margin: 20px 10px;
}
.right-block, .left-block{

    margin-bottom: 20px;

}

.link-block {
    width: 180px;
    border: 2px solid white;
    background-color: #C6DCF2;
    outline: solid 3px #3b5e97;
    color: #3b5e97;

}
.link-block-title {
    background-color: #3b5e97;
    margin: 1px 1px 1px 1px;
    text-align: center;
    color: white;
    font-size: 14px;
    padding: 2px;
    line-height: 1.5em;
    font-weight: 400;
}
.link-block-title--left{
    text-align: start;
    letter-spacing: -0.2px;
    font-size: 12px;
}
.link-block-title p{
    /* height: 30px; */
    padding: 10px 2px;
}

.link-block-subtitle {
    background-color: #C6DCF2;
    /* border-bottom: 1px solid white; */
    margin: 1px 1px 1px 1px;
    text-align: left;
    color: #3b5e97;
    font-size: 12px;
    padding: 2px;
    line-height: 1.5em;
    /* font-weight: 400; */
}

.link-block-list {
    margin: 1px;
    text-align: start;
    color: #3b5e97;
    font-size: 12px;
    padding: 5px 2px;
    /*font-family: monospace;*/
    cursor: pointer;
}

.link-block-title:not(:last-child) {
    border-bottom: 2px solid white;
}





</style>
