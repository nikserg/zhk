<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link rel="shortcut icon" href="/image/favicon.png" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<div class="wrap">
    <div class="wr_top">
        <div class="head">
            <div class="cent">
                <a href="#" class="logo"></a>
                <div class="h_adr">
                    <div class="ha_tit">Ваш город <a href="#">Краснодар</a></div>
                </div>
                <div class="h_dop">
                    <a href="#" class="h_lock"></a>
                    <a href="#" class="h_soc"><img src="image/soc_1.png" alt=""></a>
                    <a href="#" class="h_soc"><img src="image/soc_2.png" alt=""></a>
                    <a href="#" class="h_login gomod" modal="1">Вход</a>
                    <span class="h_raz">|</span>
                    <a href="#" class="h_login gomod" modal="2">Регистрация</a>

                    <div class="login_modal topmod" modal="1">
                        <div class="wm_tit">
                            Вход в личный кабинет
                        </div>
                        <div class="wm_cont">
                            <div class="wm_forwm">
                                <div class="wm_row">
                                    <div class="wm_label">Имя:</div>
                                    <input type="text">
                                </div>
                                <div class="wm_row">
                                    <div class="wm_label">E-mail:</div>
                                    <input type="text">
                                </div>
                                <div class="wm_row wm_row2">
                                    <div class="wm_row2wr">
                                        <div class="wm_label wml2">Пароль: </div>
                                        <input type="text">
                                        <div class="wml3">
                                            <div class="wr_chek">
                                                <input type="checkbox" class="checkbox" id="checkbox-91">
                                                <label for="checkbox-91"><span class="tfr_tit">Запомнить меня</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wm_row3">

                                    <div class="wmr3_col">
                                        <div class="wr3_hl">
                                            <div class="cap4a"><img src="image/cap4a.jpg"></div>
                                            <input type="text" class="kapin">
                                        </div>
                                        <a href="#" class="kapref">Обновить</a>
                                    </div>
                                    <div class="wmr3_col">
                                        <input type="submit" value="Отправить">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reg_modal topmod" modal="2">
                        <div class="wm_tit">
                            рЕГИСТРАЦИЯ
                        </div>
                        <div class="wm_cont">
                            <div class="wm_forwm">
                                <div class="wm_row">
                                    <div class="wm_label">Имя:</div>
                                    <input type="text">
                                </div>
                                <div class="wm_row">
                                    <div class="wm_label">Почта:</div>
                                    <input type="text">
                                </div>
                                <div class="wm_row">
                                    <div class="wm_label">Телефон:</div>
                                    <input type="text">
                                </div>
                                <div class="wm_row">
                                    <div class="wml3">
                                        <a href="#" class="wm_foto">Прикрепить фотографию</a>
                                    </div>
                                </div>
                                <div class="wm_row wm_row2 wm_row3">
                                    <div class="wm_row3wr">
                                        <div class="wm_label wml2">Пароль: </div>
                                        <input type="text">

                                    </div>
                                    <div class="wm_row3wr">
                                        <div class="wm_label wml2">Пароль: </div>
                                        <input type="text">

                                    </div>
                                </div>
                                <div class="wm_row">
                                    <div class="wml3">
                                        <div class="wr_chek">
                                            <input type="checkbox" class="checkbox" id="checkbox-92">
                                            <label for="checkbox-92"><span class="tfr_tit">Согласен с <a href="#">правилами сайта</a></span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="wm_row3">

                                    <div class="wmr3_col">
                                        <div class="wr3_hl">
                                            <div class="cap4a"><img src="image/cap4a.jpg"></div>
                                            <input type="text" class="kapin">
                                        </div>
                                        <a href="#" class="kapref">Обновить</a>
                                    </div>
                                    <div class="wmr3_col">
                                        <input type="submit" value="Зарегистрироваться">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu_btn"></div>
            </div>
        </div>
        <div class="top_fil">
            <div class="cent">

                <div class="tm_wr">

                    <div class="top_menu">
                        <ul>
                            <li class="active"><a href="#">Главная</a></li>
                            <li><a href="#">Новостройки</a></li>
                            <li><a href="#">Застройщики</a></li>
                            <li><a href="#">Спецпредложения</a></li>
                            <li><a href="#">Ипотека</a></li>
                            <li><a href="#">Акции</a></li>
                        </ul>
                        <div class="tm_info">
                            <div class="tm_likes">45</div>
                            <div class="tm_views">256</div>
                        </div>
                        <div class="close_menu"></div>
                    </div>
                </div>
                <div class="top_filt">
                    <div class="tf_tit">подберите подходящую новостройку</div>
                    <div class="tf_search">
                        <input type="text" placeholder="Поиск">
                        <button><img src="image/icon3.png" alt=""> 756 новостроек</button>
                        <a href="#" class="tf_clear"><img src="image/icon4.png" alt="">Очистить фильтры</a>
                    </div>
                    <div class="tf_cont active">

                        <div class="tf_row">
                            <span class="tfr_tit">Количество комнат</span>
                            <div class="kol_kom">
                                <div class="kk_it active">Студия</div>
                                <div class="kk_it">1</div>
                                <div class="kk_it">2</div>
                                <div class="kk_it">3</div>
                                <div class="kk_it">4</div>
                            </div>
                            <span class="tfr_tit">Цена, руб.</span>
                            <div class="fil_pr">
                                <div class="fpr_it active">
                                    За квартиру
                                </div>
                                <div class="fpr_it">
                                    м<sup><small>2</small></sup>
                                </div>
                            </div>

                            <input type="text" class="fl_ot" placeholder="От">
                            <input type="text" class="fl_do" placeholder="До">
                        </div>
                        <div class="tf_row">
                            <span class="tfr_tit">Срок сдачи</span>
                            <div class="kol_kom sr_sd">
                                <div class="kk_it active">Сдан</div>
                                <div class="kk_it">2016</div>
                                <div class="kk_it">2017</div>
                                <div class="kk_it">2017</div>
                                <div class="kk_it">2019+</div>
                            </div>
                            <span class="tfr_tit">Площадь, м2</span>
                            <input type="text" class="pl_ot" placeholder="От">
                            <input type="text" class="pl_do" placeholder="До">
                            <div class="wr_chek fl_rem">
                                <input type="checkbox" class="checkbox" id="checkbox-1">
                                <label for="checkbox-1"><span class="tfr_tit">Ремонт</span></label>
                            </div>
                            <div class="wr_chek">
                                <input type="checkbox" class="checkbox"  id="checkbox-2">
                                <label for="checkbox-2"><span class="tfr_tit">ФЗ-214</span></label>
                            </div>
                        </div>
                        <div class="tf_row">
                            <div class="fl_select">
                                <span class="g_sel">Округ</span>
                                <div class="hid_sel">
                                    <div class="hs_wr">
                                        <div class="wr_chek">
                                            <input type="checkbox" class="checkbox"  id="checkbox-3">
                                            <label for="checkbox-3"><span class="tfr_tit">Адыгея</span></label>
                                        </div>
                                        <div class="wr_chek">
                                            <input type="checkbox" class="checkbox"  id="checkbox-4">
                                            <label for="checkbox-4"><span class="tfr_tit">Архангельская обл.</span></label>
                                        </div>
                                        <div class="wr_chek">
                                            <input type="checkbox" class="checkbox"  id="checkbox-5">
                                            <label for="checkbox-5"><span class="tfr_tit">Астраханская обл.</span></label>
                                        </div>
                                        <div class="wr_chek">
                                            <input type="checkbox" class="checkbox"  id="checkbox-6">
                                            <label for="checkbox-6"><span class="tfr_tit">Башкортостан</span></label>
                                        </div>
                                        <div class="wr_chek">
                                            <input type="checkbox" class="checkbox"  id="checkbox-7">
                                            <label for="checkbox-7"><span class="tfr_tit">Брянская обл.</span></label>
                                        </div>
                                        <div class="wr_chek">
                                            <input type="checkbox" class="checkbox"  id="checkbox-8">
                                            <label for="checkbox-8"><span class="tfr_tit">Владимирская обл.</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="fl_select">
                                <span class="g_sel">Район</span>
                                <div class="hid_sel">
                                    <div class="hs_wr">
                                        <div class="wr_chek">
                                            <input type="checkbox" class="checkbox"  id="checkbox-9">
                                            <label for="checkbox-9"><span class="tfr_tit">Адыгея</span></label>
                                        </div>
                                        <div class="wr_chek">
                                            <input type="checkbox" class="checkbox"  id="checkbox-10">
                                            <label for="checkbox-10"><span class="tfr_tit">Архангельская обл.</span></label>
                                        </div>
                                        <div class="wr_chek">
                                            <input type="checkbox" class="checkbox"  id="checkbox-11">
                                            <label for="checkbox-11"><span class="tfr_tit">Астраханская обл.</span></label>
                                        </div>
                                        <div class="wr_chek">
                                            <input type="checkbox" class="checkbox"  id="checkbox-12">
                                            <label for="checkbox-12"><span class="tfr_tit">Башкортостан</span></label>
                                        </div>
                                        <div class="wr_chek">
                                            <input type="checkbox" class="checkbox"  id="checkbox-13">
                                            <label for="checkbox-13"><span class="tfr_tit">Брянская обл.</span></label>
                                        </div>
                                        <div class="wr_chek">
                                            <input type="checkbox" class="checkbox"  id="checkbox-14">
                                            <label for="checkbox-14"><span class="tfr_tit">Владимирская обл.</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wr_chek fl_ipot">
                                <input type="checkbox" class="checkbox" id="checkbox-15">
                                <label for="checkbox-15"><span class="tfr_tit">Ипотека</span></label>
                            </div>
                            <div class="wr_chek fl_vipot">
                                <input type="checkbox" class="checkbox" id="checkbox-16">
                                <label for="checkbox-16"><span class="tfr_tit">Военная ипотека</span></label>
                            </div>
                            <div class="wr_chek fl_act">
                                <input type="checkbox" class="checkbox" id="checkbox-17">
                                <label for="checkbox-17"><span class="tfr_tit">Акция</span></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="action_bar">
                    <img src="image/icon6.png" alt="">
                    <strong>Спецпредложение:</strong>  Квартиры в Подмосковье от 45 000 руб./м2. Успей купить!  <a href="#">Подробнее...</a>
                </div>

            </div>
        </div>
    </div>
    <div class="content">
        <div class="cent">
            <div class="page_content">
                <div class="cent_cont">
                    <div class="info_block">
                        <div class="gen_tit">
                            <div class="gt_img">
                                <img src="image/tit_icon1.png" alt="">
                            </div>
                            <span>популярные новостройки</span>
                        </div>
                        <div class="novostroiki">
                            <div class="nov_item">
                                <div class="ni_img">
                                    <img src="image/novostroika1.jpg" alt="">
                                    <div class="ni_btns">
                                        <a href="#" class="ni_fot"><span>22</span></a>
                                        <a href="#" class="ni_vid"><span>33</span></a>
                                        <a href="#" class="ni_com"><span>44</span></a>
                                    </div>
                                </div>
                                <div class="ni_cont">
                                    <div class="ni_tit">
                                        <a href="#">Новостройка “Пилигрим”</a>
                                        <span class="ni_date">Сдан - 1 кв. 2017 г.</span>
                                        <div class="like_btn"><span>Добавить в избранное</span></div>
                                    </div>
                                    <div class="ni_row">
                                        <strong>Застройщик:</strong> СНК “Девелопмент”
                                    </div>
                                    <div class="ni_row">
                                        <strong>Адрес:</strong> г. Краснодар, СНК “Девелопмент”
                                    </div>
                                    <div class="ni_row2">
                                        <div class="ni_ot">от <span>1 758 258</span> руб. </div>
                                        <div class="ni_do">от <span>45 850</span> руб. </div>
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>

                            <div class="nov_item">
                                <div class="ni_img">
                                    <img src="image/novostroika2.jpg" alt="">
                                    <div class="ni_btns">
                                        <a href="#" class="ni_fot"><span>22</span></a>
                                        <a href="#" class="ni_vid"><span>33</span></a>
                                        <a href="#" class="ni_com"><span>44</span></a>
                                    </div>
                                </div>
                                <div class="ni_cont">
                                    <div class="ni_tit">
                                        <a href="#">Новостройка “Пилигрим”</a>
                                        <span class="ni_date">Сдан - 1 кв. 2017 г.</span>
                                        <div class="like_btn"><span>Добавить в избранное</span></div>
                                    </div>
                                    <div class="ni_row">
                                        <strong>Застройщик:</strong> СНК “Девелопмент”
                                    </div>
                                    <div class="ni_row">
                                        <strong>Адрес:</strong> г. Краснодар, СНК “Девелопмент”
                                    </div>
                                    <div class="ni_row2">
                                        <div class="ni_ot">от <span>1 758 258</span> руб. </div>
                                        <div class="ni_do">от <span>45 850</span> руб. </div>
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>

                            <div class="nov_item di_akc">
                                <div class="ni_img">
                                    <img src="image/novostroika3.jpg" alt="">
                                    <div class="ni_btns">
                                        <a href="#" class="ni_fot"><span>22</span></a>
                                        <a href="#" class="ni_vid"><span>33</span></a>
                                        <a href="#" class="ni_com"><span>44</span></a>
                                    </div>
                                </div>
                                <div class="ni_cont">
                                    <div class="ni_tit">
                                        <a href="#">Новостройка “Пилигрим”</a>
                                        <span class="ni_date">Сдан - 1 кв. 2017 г.</span>
                                        <div class="like_btn"><span>Добавить в избранное</span></div>
                                    </div>
                                    <div class="ni_row">
                                        <strong>Застройщик:</strong> СНК “Девелопмент”
                                    </div>
                                    <div class="ni_row">
                                        <strong>Адрес:</strong> г. Краснодар, СНК “Девелопмент”
                                    </div>
                                    <div class="ni_row2">
                                        <div class="ni_ot">от <span>1 758 258</span> руб. </div>
                                        <div class="ni_do">от <span>45 850</span> руб. </div>
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>
                            <div class="nov_item">
                                <div class="ni_img">
                                    <img src="image/novostroika4.jpg" alt="">
                                    <div class="ni_btns">
                                        <a href="#" class="ni_fot"><span>22</span></a>
                                        <a href="#" class="ni_vid"><span>33</span></a>
                                        <a href="#" class="ni_com"><span>44</span></a>
                                    </div>
                                </div>
                                <div class="ni_cont">
                                    <div class="ni_tit">
                                        <a href="#">Новостройка “Пилигрим”</a>
                                        <span class="ni_date">Сдан - 1 кв. 2017 г.</span>
                                        <div class="like_btn"><span>Добавить в избранное</span></div>
                                    </div>
                                    <div class="ni_row">
                                        <strong>Застройщик:</strong> СНК “Девелопмент”
                                    </div>
                                    <div class="ni_row">
                                        <strong>Адрес:</strong> г. Краснодар, СНК “Девелопмент”
                                    </div>
                                    <div class="ni_row2">
                                        <div class="ni_ot">от <span>1 758 258</span> руб. </div>
                                        <div class="ni_do">от <span>45 850</span> руб. </div>
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>


                        </div>
                        <a href="#" class="all_items">Смотреть все новостройки Краснодара <span>(256)</span></a>
                    </div>
                    <div class="ab_block">
                        <div class="abb_wr">
                            <div class="gen_tit">
                                <div class="gt_img">
                                    <img src="image/tit_icon2.png" alt="">
                                </div>
                                <span>о проекте “сайт новостроек”</span>
                            </div>
                            <div class="abb_cont">
                                Комплекс создан для людей, которые ценят свое время, предпочитают эффективно планировать свои встречи и тратить меньше времени на дорогу. Владельцы автомобилей оценят наличие парковки в комплексе и удобство расположения, так как новостройка расположена рядом с главной артерией города – <a href="#">проспектом Победы</a>. А во время усложненного движения в городе Вы всегда сможете добраться до места назначения на метро, так как до станции метро «Политехнический институт» 7 минут пешей прогулки. Комплекс создан для людей, которые ценят свое время, предпочитают эффективно планировать свои встречи и тратить меньше времени на дорогу. Комплекс создан для людей, которые ценят свое время, предпочитают эффективно планировать свои встречи и тратить меньше времени на дорогу.
                                Комплекс создан для людей, которые ценят свое время, предпочитают эффективно планировать свои встречи и тратить меньше времени на дорогу. Владельцы автомобилей оценят наличие парковки в комплексе и удобство расположения, так как новостройка расположена рядом с главной артерией города – <a href="#">проспектом Победы</a>. А во время усложненного движения в городе Вы всегда сможете добраться до места назначения на метро, так как до станции метро «Политехнический институт» 7 минут пешей прогулки. Комплекс создан для людей, которые ценят свое время, предпочитают эффективно планировать свои встречи и тратить меньше времени на дорогу. Комплекс создан для людей, которые ценят свое время, предпочитают эффективно планировать свои встречи и тратить меньше времени на дорогу.

                            </div>
                        </div>
                    </div>
                    <div class="info_block pt30 lb">
                        <div class="gen_tit">
                            <div class="gt_img">
                                <img src="image/tit_icon3.png" alt="">
                            </div>
                            <span>акции в новостройках краснодара</span>
                        </div>
                        <div class="actions">
                            <div class="act_item di_skid">
                                <div class="ni_img">
                                    <img src="image/novostroika2.jpg" alt="">
                                </div>
                                <div class="ni_cont">
                                    <a href="#" class="act_tit">Квартиры в готовых домах со скидкой 20%</a>
                                    <div class="act_cont">
                                        Комплекс создан для людей, которые ценят свое время, предпочитают эффективно планировать свои встречи и тратить меньше времени на дорогу. Владельцы автомобилей
                                    </div>
                                    <div class="ras_now">
                                        <span>РАСпространяется на новостройки</span>
                                        <a href="#">ЖК “Симфония”, </a>
                                        <a href="#">ЖК “Амбасадор”</a>
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>
                            <div class="act_item di_skid">
                                <div class="ni_img">
                                    <img src="image/novostroika3.jpg" alt="">
                                </div>
                                <div class="ni_cont">
                                    <a href="#" class="act_tit">Квартиры в готовых домах со скидкой 20%</a>
                                    <div class="act_cont">
                                        Комплекс создан для людей, которые ценят свое время, предпочитают эффективно планировать свои встречи и тратить меньше времени на дорогу. Владельцы автомобилей
                                    </div>
                                    <div class="ras_now">
                                        <span>РАСпространяется на новостройки</span>
                                        <a href="#">ЖК “Симфония”, </a>
                                        <a href="#">ЖК “Амбасадор”</a>
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>
                            <div class="act_item di_skid">
                                <div class="ni_img">
                                    <img src="image/novostroika4.jpg" alt="">
                                </div>
                                <div class="ni_cont">
                                    <a href="#" class="act_tit">Квартиры в готовых домах со скидкой 20%</a>
                                    <div class="act_cont">
                                        Комплекс создан для людей, которые ценят свое время, предпочитают эффективно планировать свои встречи и тратить меньше времени на дорогу. Владельцы автомобилей
                                    </div>
                                    <div class="ras_now">
                                        <span>РАСпространяется на новостройки</span>
                                        <a href="#">ЖК “Симфония”, </a>
                                        <a href="#">ЖК “Амбасадор”</a>
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="all_items">Смотреть все акции <span>(256)</span></a>
                    </div>
                    <div class="info_block pt30 ">
                        <div class="gen_tit">
                            <div class="gt_img">
                                <img src="image/tit_icon4.png" alt="">
                            </div>
                            <span>скидки в новостройках краснодара</span>
                        </div>
                        <div class="skidki">
                            <div class="skid_item">
                                <div class="ni_img">
                                    <img src="image/novostroika1.jpg" alt="">
                                </div>
                                <div class="ni_cont">
                                    <div class="skit_tit">
                                        <a href="#">Новостройка “Пилигрим”</a>
                                        <span>Застройщик “Юдис”</span>
                                    </div>
                                    <div class="skit_cont">
                                        Комплекс создан для людей, которые ценят свое время, предпочитают эффективно планировать свои встречи и тратить меньше времени на дорогу. Владельцы автомобилей оценят наличие парковки в комплексе и удобство расположения, так как новостройка расположена рядом с главной артерией города – проспектом Победы.
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>

                            <div class="skid_item">
                                <div class="ni_img">
                                    <img src="image/novostroika2.jpg" alt="">
                                </div>
                                <div class="ni_cont">
                                    <div class="skit_tit">
                                        <a href="#">Новостройка “Пилигрим”</a>
                                        <span>Застройщик “Юдис”</span>
                                    </div>
                                    <div class="skit_cont">
                                        Комплекс создан для людей, которые ценят свое время, предпочитают эффективно планировать свои встречи и тратить меньше времени на дорогу. Владельцы автомобилей оценят наличие парковки в комплексе и удобство расположения, так как новостройка расположена рядом с главной артерией города – проспектом Победы.
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>

                            <div class="skid_item">
                                <div class="ni_img">
                                    <img src="image/novostroika3.jpg" alt="">
                                </div>
                                <div class="ni_cont">
                                    <div class="skit_tit">
                                        <a href="#">Новостройка “Пилигрим”</a>
                                        <span>Застройщик “Юдис”</span>
                                    </div>
                                    <div class="skit_cont">
                                        Комплекс создан для людей, которые ценят свое время, предпочитают эффективно планировать свои встречи и тратить меньше времени на дорогу. Владельцы автомобилей оценят наличие парковки в комплексе и удобство расположения, так как новостройка расположена рядом с главной артерией города – проспектом Победы.
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="all_items">Смотреть все скидки<span>(256)</span></a>
                    </div>
                    <div class="ab_block pb50">
                        <div class="abb_wr">
                            <div class="gen_tit gt2">

                                <div class="gt_img">
                                    <img src="image/tit_icon5.png" alt="">
                                </div>
                                <span>застройщики краснодара</span>

                                <a href="#" class="gt_all">Все Застройщики (256)</a>
                            </div>
                            <div class="zast_wr">
                                <div class="zast_sl">
                                    <div class="zs_item">
                                        <div class="zsi_img"><img src="image/zsk_img1.png" alt=""></div>
                                        <a href="#" class="zsi_tit">Застройщик “Юдис”</a>
                                    </div>

                                    <div class="zs_item">
                                        <div class="zsi_img"><img src="image/zsk_img2.png" alt=""></div>
                                        <a href="#" class="zsi_tit">Застройщик “MG Group”</a>
                                    </div>

                                    <div class="zs_item">
                                        <div class="zsi_img"><img src="image/zsk_img3.png" alt=""></div>
                                        <a href="#" class="zsi_tit">Застройщик “Юдис”</a>
                                    </div>
                                    <div class="zs_item">
                                        <div class="zsi_img"><img src="image/zsk_img3.png" alt=""></div>
                                        <a href="#" class="zsi_tit">Застройщик “Юдис”</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info_block pt15 lb">

                        <div class="gen_tit">
                            <div class="gt_img">
                                <img src="image/tit_icon6.png" alt="">
                            </div>
                            <span>новые предложения</span>
                        </div>
                        <div class="novostroiki">
                            <div class="nov_item">
                                <div class="ni_img">
                                    <img src="image/novostroika1.jpg" alt="">
                                    <div class="ni_btns">
                                        <a href="#" class="ni_fot"><span>22</span></a>
                                        <a href="#" class="ni_vid"><span>33</span></a>
                                        <a href="#" class="ni_com"><span>44</span></a>
                                    </div>
                                </div>
                                <div class="ni_cont">
                                    <div class="ni_tit">
                                        <a href="#">Новостройка “Пилигрим”</a>
                                        <span class="ni_date">Сдан - 1 кв. 2017 г.</span>
                                        <div class="like_btn"><span>Добавить в избранное</span></div>
                                    </div>
                                    <div class="ni_row">
                                        <strong>Застройщик:</strong> СНК “Девелопмент”
                                    </div>
                                    <div class="ni_row">
                                        <strong>Адрес:</strong> г. Краснодар, СНК “Девелопмент”
                                    </div>
                                    <div class="ni_row2">
                                        <div class="ni_ot">от <span>1 758 258</span> руб. </div>
                                        <div class="ni_do">от <span>45 850</span> руб. </div>
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>

                            <div class="nov_item di_akc">
                                <div class="ni_img">
                                    <img src="image/novostroika3.jpg" alt="">
                                    <div class="ni_btns">
                                        <a href="#" class="ni_fot"><span>22</span></a>
                                        <a href="#" class="ni_vid"><span>33</span></a>
                                        <a href="#" class="ni_com"><span>44</span></a>
                                    </div>
                                </div>
                                <div class="ni_cont">
                                    <div class="ni_tit">
                                        <a href="#">Новостройка “Пилигрим”</a>
                                        <span class="ni_date">Сдан - 1 кв. 2017 г.</span>
                                        <div class="like_btn"><span>Добавить в избранное</span></div>
                                    </div>
                                    <div class="ni_row">
                                        <strong>Застройщик:</strong> СНК “Девелопмент”
                                    </div>
                                    <div class="ni_row">
                                        <strong>Адрес:</strong> г. Краснодар, СНК “Девелопмент”
                                    </div>
                                    <div class="ni_row2">
                                        <div class="ni_ot">от <span>1 758 258</span> руб. </div>
                                        <div class="ni_do">от <span>45 850</span> руб. </div>
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>
                            <div class="nov_item">
                                <div class="ni_img">
                                    <img src="image/novostroika4.jpg" alt="">
                                    <div class="ni_btns">
                                        <a href="#" class="ni_fot"><span>22</span></a>
                                        <a href="#" class="ni_vid"><span>33</span></a>
                                        <a href="#" class="ni_com"><span>44</span></a>
                                    </div>
                                </div>
                                <div class="ni_cont">
                                    <div class="ni_tit">
                                        <a href="#">Новостройка “Пилигрим”</a>
                                        <span class="ni_date">Сдан - 1 кв. 2017 г.</span>
                                        <div class="like_btn"><span>Добавить в избранное</span></div>
                                    </div>
                                    <div class="ni_row">
                                        <strong>Застройщик:</strong> СНК “Девелопмент”
                                    </div>
                                    <div class="ni_row">
                                        <strong>Адрес:</strong> г. Краснодар, СНК “Девелопмент”
                                    </div>
                                    <div class="ni_row2">
                                        <div class="ni_ot">от <span>1 758 258</span> руб. </div>
                                        <div class="ni_do">от <span>45 850</span> руб. </div>
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>


                        </div>
                        <a href="#" class="all_items">Смотреть все новостройки Краснодара <span>(256)</span></a>

                    </div>
                    <div class="info_block2 pt30 lb">
                        <div class="ib_col">
                            <div class="gen_tit">
                                <div class="gt_img">
                                    <img src="image/tit_icon8.png" alt="">
                                </div>
                                <span>новости рынка недвижимости</span>
                            </div>
                            <div class="stat_items">
                                <div class="stit_big">
                                    <div class="stb_img">
                                        <img src="image/stit_big.png" alt="" align="left">
                                    </div>
                                    <div class="stb_tit1">
                                        <span class="stb_date">25.05.2016</span>
                                        <span class="stb_views">256</span>
                                    </div>
                                    <a href="#" class="stb_tit2">Банк «Возрождение» аккредитовал жилой комплекс «Румболомо Сити»</a>
                                    <p>
                                        Солидный опыт в сфере возведения. Качественно, быстро, дешево – так можно вкратце описать пожелания в сфере возведения. Качественно, быстро, дешево – так можно вкратце описать пожелания любого потребителя. И к этому идеалустремится компания...  <a href="#" class="stb_more">Подробнее</a>
                                    </p>
                                </div>
                                <div class="stit_sm">
                                    <div class="stm_img">
                                        <img src="image/stm_img.png" alt="">
                                    </div>
                                    <div class="stb_tit1">
                                        <span class="stb_date">25.05.2016</span>
                                        <span class="stb_views">256</span>
                                    </div>
                                    <a href="#" class="stm_tit">Банк «Возрождение» аккредитовал жилой комплекс «Румболомо Сити»</a>
                                </div>
                                <div class="stit_sm">
                                    <div class="stm_img">
                                        <img src="image/stm_img.png" alt="">
                                    </div>
                                    <div class="stb_tit1">
                                        <span class="stb_date">25.05.2016</span>
                                        <span class="stb_views">256</span>
                                    </div>
                                    <a href="#" class="stm_tit">Банк «Возрождение» аккредитовал жилой комплекс «Румболомо Сити»</a>
                                </div>
                                <div class="stit_sm">
                                    <div class="stm_img">
                                        <img src="image/stm_img.png" alt="">
                                    </div>
                                    <div class="stb_tit1">
                                        <span class="stb_date">25.05.2016</span>
                                        <span class="stb_views">256</span>
                                    </div>
                                    <a href="#" class="stm_tit">Банк «Возрождение» аккредитовал жилой комплекс «Румболомо Сити»</a>
                                </div>
                                <div class="stit_sm">
                                    <div class="stm_img">
                                        <img src="image/stm_img.png" alt="">
                                    </div>
                                    <div class="stb_tit1">
                                        <span class="stb_date">25.05.2016</span>
                                        <span class="stb_views">256</span>
                                    </div>
                                    <a href="#" class="stm_tit">Банк «Возрождение» аккредитовал жилой комплекс «Румболомо Сити»</a>
                                </div>
                            </div>
                            <a href="#" class="all_items">Читать все новости <span>(256)</span></a>
                        </div>
                        <div class="ib_col">

                            <div class="gen_tit">
                                <div class="gt_img">
                                    <img src="image/tit_icon9.png" alt="">
                                </div>
                                <span>полезные статьи</span>
                            </div>
                            <div class="stat_items">
                                <div class="stit_big">
                                    <div class="stb_img">
                                        <img src="image/stit_big.png" alt="" align="left">
                                    </div>
                                    <div class="stb_tit1">
                                        <span class="stb_date">25.05.2016</span>
                                        <span class="stb_views">256</span>
                                    </div>
                                    <a href="#" class="stb_tit2">Банк «Возрождение» аккредитовал жилой комплекс «Румболомо Сити»</a>
                                    <p>
                                        Солидный опыт в сфере возведения. Качественно, быстро, дешево – так можно вкратце описать пожелания в сфере возведения. Качественно, быстро, дешево – так можно вкратце описать пожелания любого потребителя. И к этому идеалустремится компания...  <a href="#" class="stb_more">Подробнее</a>
                                    </p>
                                </div>
                                <div class="stit_sm">
                                    <div class="stm_img">
                                        <img src="image/stm_img.png" alt="">
                                    </div>
                                    <div class="stb_tit1">
                                        <span class="stb_date">25.05.2016</span>
                                        <span class="stb_views">256</span>
                                    </div>
                                    <a href="#" class="stm_tit">Банк «Возрождение» аккредитовал жилой комплекс «Румболомо Сити»</a>
                                </div>
                                <div class="stit_sm">
                                    <div class="stm_img">
                                        <img src="image/stm_img.png" alt="">
                                    </div>
                                    <div class="stb_tit1">
                                        <span class="stb_date">25.05.2016</span>
                                        <span class="stb_views">256</span>
                                    </div>
                                    <a href="#" class="stm_tit">Банк «Возрождение» аккредитовал жилой комплекс «Румболомо Сити»</a>
                                </div>
                                <div class="stit_sm">
                                    <div class="stm_img">
                                        <img src="image/stm_img.png" alt="">
                                    </div>
                                    <div class="stb_tit1">
                                        <span class="stb_date">25.05.2016</span>
                                        <span class="stb_views">256</span>
                                    </div>
                                    <a href="#" class="stm_tit">Банк «Возрождение» аккредитовал жилой комплекс «Румболомо Сити»</a>
                                </div>
                                <div class="stit_sm">
                                    <div class="stm_img">
                                        <img src="image/stm_img.png" alt="">
                                    </div>
                                    <div class="stb_tit1">
                                        <span class="stb_date">25.05.2016</span>
                                        <span class="stb_views">256</span>
                                    </div>
                                    <a href="#" class="stm_tit">Банк «Возрождение» аккредитовал жилой комплекс «Румболомо Сити»</a>
                                </div>
                            </div>
                            <a href="#" class="all_items">Читать все новости <span>(256)</span></a>

                        </div>
                    </div>

                    <div class="info_block2 pt30 lb">
                        <div class="gen_tit">
                            <div class="gt_img">
                                <img src="image/tit_icon10.png" alt="">
                            </div>
                            <span>видеоролики</span>
                        </div>
                        <div class="gv_items">
                            <div class="ib_col stv_items">
                                <div class="stit_big">
                                    <div class="stb_img">
                                        <img src="image/stit_big.png" alt="" align="left">
                                    </div>
                                    <div class="stb_tit1">
                                        <span class="stb_date">25.05.2016</span>
                                        <span class="stb_views">256</span>
                                    </div>
                                    <a href="#" class="stb_tit2">Банк «Возрождение» аккредитовал жилой комплекс «Румболомо Сити»</a>
                                    <p>
                                        Солидный опыт в сфере возведения. Качественно, быстро, дешево – так можно вкратце..
                                    </p>
                                </div>

                                <div class="stit_big">
                                    <div class="stb_img">
                                        <img src="image/stit_big.png" alt="" align="left">
                                    </div>
                                    <div class="stb_tit1">
                                        <span class="stb_date">25.05.2016</span>
                                        <span class="stb_views">256</span>
                                    </div>
                                    <a href="#" class="stb_tit2">Банк «Возрождение» аккредитовал жилой комплекс «Румболомо Сити»</a>
                                    <p>
                                        Солидный опыт в сфере возведения. Качественно, быстро, дешево – так можно вкратце..
                                    </p>
                                </div>

                            </div>

                            <div class="ib_col stv_items">
                                <div class="stit_big">
                                    <div class="stb_img">
                                        <img src="image/stit_big.png" alt="" align="left">
                                    </div>
                                    <div class="stb_tit1">
                                        <span class="stb_date">25.05.2016</span>
                                        <span class="stb_views">256</span>
                                    </div>
                                    <a href="#" class="stb_tit2">Банк «Возрождение» аккредитовал жилой комплекс «Румболомо Сити»</a>
                                    <p>
                                        Солидный опыт в сфере возведения. Качественно, быстро, дешево – так можно вкратце..
                                    </p>
                                </div>
                                <div class="stit_big ">
                                    <div class="stb_img">
                                        <img src="image/stit_big.png" alt="" align="left">
                                    </div>
                                    <div class="stb_tit1">
                                        <span class="stb_date">25.05.2016</span>
                                        <span class="stb_views">256</span>
                                    </div>
                                    <a href="#" class="stb_tit2">Банк «Возрождение» аккредитовал жилой комплекс «Румболомо Сити»</a>
                                    <p>
                                        Солидный опыт в сфере возведения. Качественно, быстро, дешево – так можно вкратце..
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="all_items">Смотреть все видеоролики <span>(256)</span></a>
                    </div>
                    <div class="info_block pt20">
                        <div class="gen_tit pb20">
                            <div class="gt_img">
                                <img src="image/tit_icon11.png" alt="">
                            </div>
                            <span>панорамы</span>
                        </div>
                        <div class="pan_cont">
                            <div class="panorama">
                                <img src="image/panorama.png" alt="" style="display: block;">
                            </div>
                            <div class="pans">
                                <div class="pans_item">
                                    <img src="image/pans_item1.png" alt="">
                                    <a href="#" class="pansi_tit">ЖК “симфония”</a>
                                    <span>г. Краснодар, ул. Московская, 256</span>
                                </div>

                                <div class="pans_item">
                                    <img src="image/pans_item1.png" alt="">
                                    <a href="#" class="pansi_tit">ЖК “симфония”</a>
                                    <span>г. Краснодар, ул. Московская, 256</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="all_items">Смотреть все панорамы <span>(256)</span></a>
                    </div>
                </div>
                <div class="right_cont">
                    <div class="r_menu">
                        <div class="rm_bl">
                            <div class="rmb_tit list active">
                                быстрый поиск
                            </div>
                            <div class="rmb_wr active">
                                <div class="rmb_cont">
                                    <div class="rmb_it rmbit1">
                                        <span class="rmb_par list">Расположение</span>
                                        <div class="rmb_wr2 active">
                                            <div class="rmb_cont2">
                                                <div class="rmb_it2">
                                                    <span class="rmb2_par list active">Улица</span>
                                                    <div class="rmb_wr3 active">
                                                        <div class="rmb_cont3 scroll_cont default-skin">
                                                            <ul>
                                                                <li class="rmb3_item">ул. Ставропольская</li>
                                                                <li class="rmb3_item">ул. Ставропольская</li>
                                                                <li class="rmb3_item">ул. Ставропольская</li>
                                                                <li class="rmb3_item">ул. Ставропольская</li>
                                                                <li class="rmb3_item">ул. Ставропольская</li>
                                                                <li class="rmb3_item">ул. Ставропольская</li>
                                                                <li class="rmb3_item">ул. Ставропольская</li>
                                                                <li class="rmb3_item">ул. Ставропольская</li>
                                                                <li class="rmb3_item">ул. Ставропольская</li>
                                                                <li class="rmb3_item">ул. Ставропольская</li>
                                                                <li class="rmb3_item">ул. Ставропольская</li>
                                                                <li class="rmb3_item">ул. Ставропольская</li>
                                                                <li class="rmb3_item">ул. Ставропольская</li>
                                                                <li class="rmb3_item">ул. Ставропольская</li>
                                                                <li class="rmb3_item">ул. Ставропольская</li>
                                                                <li class="rmb3_item">ул. Ставропольская</li>
                                                            </ul>
                                                        </div>
                                                        <a href="#" class="rmb3_show"><img src="image/plus.png" alt="">Показать все улицы</a>
                                                    </div>
                                                </div>
                                                <div class="rmb_it2">
                                                    <span class="rmb2_par">Округ</span>
                                                </div>
                                                <div class="rmb_it2">
                                                    <span class="rmb2_par">Район</span>
                                                </div>
                                                <div class="rmb_it2">
                                                    <span class="rmb2_par">Метро</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rmb_it rmbit2">
                                        <span>Расположение</span>
                                    </div>
                                    <div class="rmb_it rmbit3">
                                        <span>Расположение</span>
                                    </div>
                                    <div class="rmb_it rmbit4">
                                        <span>Расположение</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rm_bl">
                            <div class="rmb_tit list">
                                ПОЛЕЗНОЕ
                            </div>
                        </div>
                        <div class="rm_bl active">
                            <div class="rmb_tit list active">
                                новости
                            </div>
                            <div class="rmb_wr active">
                                <div class="rmb_news scroll_cont">
                                    <div class="rmbn_items">
                                        <div class="rmbn_item">
                                            <div class="rmbn_date">25.05<span>2016</span></div>
                                            <div class="rmbn_text">
                                                <p>Качественно, быстро, дешево – так можно вкратце описать... </p>
                                                <a href="#">Подробнее</a>
                                            </div>
                                        </div>

                                        <div class="rmbn_item">
                                            <div class="rmbn_date">25.05<span>2016</span></div>
                                            <div class="rmbn_text">
                                                <p>Качественно, быстро, дешево – так можно вкратце описать... </p>
                                                <a href="#">Подробнее</a>
                                            </div>
                                        </div>

                                        <div class="rmbn_item">
                                            <div class="rmbn_date">25.05<span>2016</span></div>
                                            <div class="rmbn_text">
                                                <p>Качественно, быстро, дешево – так можно вкратце описать... </p>
                                                <a href="#">Подробнее</a>
                                            </div>
                                        </div>

                                        <div class="rmbn_item">
                                            <div class="rmbn_date">25.05<span>2016</span></div>
                                            <div class="rmbn_text">
                                                <p>Качественно, быстро, дешево – так можно вкратце описать... </p>
                                                <a href="#">Подробнее</a>
                                            </div>
                                        </div>

                                        <div class="rmbn_item">
                                            <div class="rmbn_date">25.05<span>2016</span></div>
                                            <div class="rmbn_text">
                                                <p>Качественно, быстро, дешево – так можно вкратце описать... </p>
                                                <a href="#">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="rmb3_show rmbn_show"><img src="image/plus.png" alt="">Показать все новости</a>
                                </div>
                            </div>
                        </div>
                        <div class="rm_bl">
                            <div class="rmb_tit ">
                                <a href="#">СКИДКИ</a>
                            </div>
                        </div>
                    </div>
                    <div class="spec_block">
                        <div class="sb_tit">спецпредложения</div>
                        <div class="sp_items">
                            <div class="sp_item">
                                <div class="sp_img"><a href="#"><img src="image/sp_img.jpg" alt=""></a></div>
                                <div class="sp_cont">
                                    <div class="spi_tit">Название новостройки</div>
                                    <div class="sp_info">
                                        Что немаловажно - очень удачное расположение. До исторического центра всего несколько минут ходьбы.
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>

                            <div class="sp_item">
                                <div class="sp_img"><a href="#"><img src="image/sp_img.jpg" alt=""></a></div>
                                <div class="sp_cont">
                                    <div class="spi_tit">Название новостройки</div>
                                    <div class="sp_info">
                                        Что немаловажно - очень удачное расположение. До исторического центра всего несколько минут ходьбы.
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>

                            <div class="sp_item">
                                <div class="sp_img"><a href="#"><img src="image/sp_img.jpg" alt=""></a></div>
                                <div class="sp_cont">
                                    <div class="spi_tit">Название новостройки</div>
                                    <div class="sp_info">
                                        Что немаловажно - очень удачное расположение. До исторического центра всего несколько минут ходьбы.
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>

                            <div class="sp_item">
                                <div class="sp_img"><a href="#"><img src="image/sp_img.jpg" alt=""></a></div>
                                <div class="sp_cont">
                                    <div class="spi_tit">Название новостройки</div>
                                    <div class="sp_info">
                                        Что немаловажно - очень удачное расположение. До исторического центра всего несколько минут ходьбы.
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>

                            <div class="sp_item">
                                <div class="sp_img"><a href="#"><img src="image/sp_img.jpg" alt=""></a></div>
                                <div class="sp_cont">
                                    <div class="spi_tit">Название новостройки</div>
                                    <div class="sp_info">
                                        Что немаловажно - очень удачное расположение. До исторического центра всего несколько минут ходьбы.
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>

                            <div class="sp_item">
                                <div class="sp_img"><a href="#"><img src="image/sp_img.jpg" alt=""></a></div>
                                <div class="sp_cont">
                                    <div class="spi_tit">Название новостройки</div>
                                    <div class="sp_info">
                                        Что немаловажно - очень удачное расположение. До исторического центра всего несколько минут ходьбы.
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>

                            <div class="sp_item">
                                <div class="sp_img"><a href="#"><img src="image/sp_img.jpg" alt=""></a></div>
                                <div class="sp_cont">
                                    <div class="spi_tit">Название новостройки</div>
                                    <div class="sp_info">
                                        Что немаловажно - очень удачное расположение. До исторического центра всего несколько минут ходьбы.
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>

                            <div class="sp_item">
                                <div class="sp_img"><a href="#"><img src="image/sp_img.jpg" alt=""></a></div>
                                <div class="sp_cont">
                                    <div class="spi_tit">Название новостройки</div>
                                    <div class="sp_info">
                                        Что немаловажно - очень удачное расположение. До исторического центра всего несколько минут ходьбы.
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>

                            <div class="sp_item">
                                <div class="sp_img"><a href="#"><img src="image/sp_img.jpg" alt=""></a></div>
                                <div class="sp_cont">
                                    <div class="spi_tit">Название новостройки</div>
                                    <div class="sp_info">
                                        Что немаловажно - очень удачное расположение. До исторического центра всего несколько минут ходьбы.
                                    </div>
                                    <a href="#" class="ni_more">Подробнее</a>
                                </div>
                            </div>
                            <a href="#" class="ni_more nim2">Все спецпредложения</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="cent">
            <div class="foot_menu">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Новостройки</a></li>
                    <li><a href="#">Застройщики</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Статьи</a></li>
                    <li><a href="#">Скидки</a></li>
                    <li><a href="#">Акции</a></li>
                    <li><a href="#">Архив новостроек Краснодара</a></li>
                    <li><a href="#">Панорама новостроек</a></li>
                </ul>
            </div>
            <div class="f_row">
                <a href="#" class="f_logo"></a>

                <div class="foot_menu2">
                    <ul>
                        <li><a href="#">Добавить Новостройку/Застройщика</a></li>
                        <li><a href="#">Добавить Банк</a></li>
                        <li><a href="#">Реклама на сайте</a></li>
                        <li><a href="#">Обратная связь</a></li>
                        <li><a href="#">Сообщить об ошибке</a></li>
                        <li><a href="#">Карта новостроек</a></li>
                    </ul>
                </div>
            </div>
            <div class="f_row2">
                <div class="f_copyr">© “Твой ЖК”,  2016, все права защищены</div>
                <div class="f_soc1">
                    <span>Мы в соцсетях:</span>
                    <a href="#" class="f_soc fs_1"></a>
                    <a href="#" class="f_soc fs_2"></a>
                    <a href="#" class="f_soc fs_4"></a>
                    <a href="#" class="f_soc fs_3"></a>
                </div>
                <div class="f_soc1 f_soc2">
                    <span>Поделиться:</span>
                    <a href="#" class="f_soc fs_1"></a>
                    <a href="#" class="f_soc fs_2"></a>
                    <a href="#" class="f_soc fs_4"></a>
                    <a href="#" class="f_soc fs_3"></a>
                </div>
                <div class="counters">
                    <img src="image/cont1.png" alt="">
                    <img src="image/cont2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="scroller"></div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
