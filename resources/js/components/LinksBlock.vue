<template>
    <div class="container left-blocks">
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
                <p class="link-block-title">Наши авторы</p>
                <li class="link-block-list">&#9658; Знакомьтесь: нашего полку прибыло!</li>
                <li class="link-block-list">&#9658; Первые шаги на портале</li>
                <li class="link-block-list">&#9658; Правила портала</li>
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
            <div class="header__block right-block">
                <p class="header__block-title">Невеста почтенного возраста</p>
                <!-- <img class="rk" src="../../public/img/nevesta.jpg"/> -->
                <li class="header-list">Невеста почтенного возраста</li>
            </div>

            <div class="link-block right-block">
                <!-- <img class="rk" src="../../public/img/new.gif"/> -->
                <li class="link-block-list">&#9658; Устав, Положения, документы для приема</li>
                <li class="link-block-list">&#9658; Билеты МСП</li>
                <li class="link-block-list">&#9658; Форум для членов МСП</li>
            </div>

            <div class="link-block right-block">
                <p class="link-block-title">Состав МСП <br>"Новый Современник"</p>
                <li class="link-block-list">&#9658; Список Действительных членов МСП</li>
                <li class="link-block-list">&#9658; Список членов МСП</li>
                <li class="link-block-list">&#9658; Планета Рать</li>
            </div>

            <div class="link-block right-block">
                <p class="link-block-title">Региональные отделения МСП "Новый Современник"</p>
            </div>
            <div class="link-block right-block">
                <p class="link-block-title">Литературные объединения "Новый Современник"</p>
            </div>
            <div class="link-block right-block">
                <p class="link-block-title">Льготы для членов "Новый Современник"</p>
            </div>
            <div class="link-block right-block">
                <p class="link-block-title">Реквизиты и способы оплаты по МСП, издательству и порталу</p>
            </div>
            <div class="link-block right-block">
                <p class="link-block-title">Организация конкурсов и рейтинги</p>
            </div>
            <div class="link-block right-block">
                <p class="link-block-title">Литературные объединения</p>
                <li class="link-block-list">&#9658; Союз писателей ДНР</li>
                <li class="link-block-list">&#9658; "Серебряная ладья"</li>
                <li class="link-block-list">&#9658; "Остров вдохновения"</li>
                <li class="link-block-list">&#9658; Союз литераторов <br> "Перо и слово"</li>
                <p class="link-block-title">Литературные организации и проекты по регионам России</p>
                <li class="link-block-list">&#9658; Воронежская область</li>
                <li class="link-block-list">&#9658; Рязанская область</li>
                <li class="link-block-list">&#9658; Рязанская область</li>
            </div>
            <div class="link-block right-block">
                <p class="link-block-title">Наградные билеты МСП "Новый Современник"</p>
                <p class="link-block-title">Николай Вуколов</p>
                <p class="link-block-title">Валентина Тимонина</p>
                <p class="link-block-title">Сергей Малашко</p>
                <p class="link-block-title">Ол Томский</p>
                <p class="link-block-title">Дмитрий Долгов</p>
                <p class="link-block-title">Сергей Ворошилов</p>
            </div>
            <div class="link-block right-block">
                <p class="link-block-title">Как стать автором книги всего за 100 слов</p>
                <!-- <img class="rk" src="../../public/img/100slov.jpg"/> -->
                <p class="link-block-title">Положение о проекте</p>
                <p class="link-block-title">Общий форум проекта</p>
            </div>
        </div>
</template>

<script>
export default {
    name: "LinksBlock"
}
</script>

<style scoped>


.left-blocks{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    justify-items: center
}
@media (max-width: 760px) {
    .left-blocks{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        justify-items: center
}

@media (max-width: 600px){
    .left-blocks{
        display: grid;
        grid-template-columns: 1fr 1fr;
        justify-items: center
}
@media (max-width: 400px){
    .left-blocks{
        display: grid;
        grid-template-columns: 1fr;
        justify-items: center
}
}
}}





</style>
