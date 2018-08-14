@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="{{url('/help/admin')}}">Кабинет администратора</a>
                <a class="link-bread" href="{{url('/help/user')}}">Кабинет пользователя</a>
                <a class="link-bread" href="{{url('/help/newobject')}}">Создание нового объекта</a>
                <a class="link-bread" href="{{url('/help/regobject')}}">Меню объекта</a>
                <a class="link-bread" href="{{url('/help/order')}}">Просчет спецификации</a>
            </div>
        </div>
    </div>
@endsection
@section('stylesheets')
    <link href="https://vjs.zencdn.net/7.1.0/video-js.css" rel="stylesheet">

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 m-t-20">

                <div id="video-wrap">

                    <?php             //get played ids from cookie if set , add this code to the top of php page
                    $played_videos=isset($_COOKIE[ 'welu_autoplay']) ? $_COOKIE[ 'welu_autoplay'] : array();
                    //unserialize the array if its serialized
                    $played_videos=( @unserialize($played_videos) )  ? @unserialize($played_videos) : $played_videos;
                    //vedio id
                    $video_id='S360iO_u14Y' ;
                    //now check if its played before
                    $played=( isset($played_videos[$video_id]) ) ? 1 : 0;
                    ?>
                    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/pGs01UVaTMs?autoplay=
                <?php echo !$played; ?>&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>

                    <?php
                    //now we set video is played add the code below to the bottom of the php page
                    $played_videos[$video_id]=1 ;
                    //now we rebulid the cookie or set it
                    setcookie( 'welu_autoplay' , serialize($played_videos) , time()+90000 , '/' );
                    ?>
                </div>


                <p>Переходим к просмотру конкретного Объекта, для которого нужно сделать просчет. Открываем меню «Заказ».</p>
                <p><img src="/img/help/order/1.jpg" width="100%"/></p>
                <p><img src="/img/help/order/2.jpg" width="100%"/></p>
                <p class="text-primary">Просчет Т-профиля</p>
                <p><img src="/img/help/order/3.jpg" width="100%"/></p>
                <p>Заполняем или выбираем необходимые параметры из предложенного списка. Конфигурация помещения влияет на процент профиля для подрезки. При необходимости можно сразу же просчитать освещение KRAFT Led – поставьте соответствующую галочку. Расчет освещения производится на основании средних данных, поэтому если требуется точный расчет освещения, то предоставьте Региональному менеджеру необходимые параметры и наши инженеры просчитают освещение в программе Dialux.</p>
                <p><img src="/img/help/order/4.jpg" width="100%"/></p>
                <p>После заполнения всех полей нажимаем кнопку «Сделать расчет».</p>

                <p><img src="/img/help/order/5.jpg" width="100%"/></p>
                <p>И получаем таблицу с расчетом количества комплектующих. В колонке «Цена» указаны базовые цены продукции с НДС. Т.е. эта цена не учитывает различные индивидуальные скидки и т.п. Индивидуальные скидки применяются к выписке счета.
                    Данный расчет еще нигде не сохранен. Вы можете изменить данные и сделать расчет еще раз.
                    Также вы можете добавить другие продукты (или просчет для другого помещения) в эту же спецификацию. Для этого нажмите кнопку «Добавить продукт» вверху калькулятора и выберите нужный продукт.
                </p>
                <p><img src="/img/help/order/6.jpg" width="100%"/></p>
                <p>Для того, чтобы сохранить текущий просчет нажимаем кнопку «Добавить в спецификацию».</p>
                <p><img src="/img/help/order/7.jpg" width="100%"/></p>
                <p>Появляется окно проверки и сохранения заказа. В этом окне можно еще раз сверить данные и при необходимости вручную отредактировать количество комплектующих.
                    Также на этом этапе в текущую спецификацию можно добавить еще один продукт или просчет для другого помещения – нажмите кнопку «Добавить продукт».
                    После проверки спецификации и необходимых исправлений, нажимаем кнопку «Сохранить заказ» для того, чтобы сохранить эту спецификацию.
                    После этого спецификация будет доступна в меню «Мои заказы».
                </p>
                <p><img src="/img/help/order/8.jpg" width="100%"/></p>
                <p>В рамках Объекта вы можете создавать нужное количество спецификаций (просчетов) и сохранять их для использования в дальнейшем.</p>


                <p class="text-primary">Просмотр заказа и выписка счета</p>
                <p>Для выписки счета перейдите в меню «Мои заказы» и выберите «Просмотреть» нужную спецификацию.</p>
                <p><img src="/img/help/order/9.jpg" width="100%"/></p>
                <p>Перед выпиской счета вы можете еще раз отредактировать количество комплектующих, а также при необходимости удалить ненужные позиции совсем. <span class="text-danger">Учтите, что вернуть удаленные позиции нельзя (только создать новый заказ), поэтому будьте внимательны.</span>
                    Для выписки счета нажмите кнопку «Выписать счет».
                    ВНИМАНИЕ! Счет по конкретной спецификации выписывается ОДИН раз. После выписки счета вы не сможете вносить исправления в спецификацию и выписать новый счет. Новый счет можно выписать только оформив новый заказ.
                    После нажатия кнопки, счет будет сформирован и в левом нижнем углу появится кнопка «Скачать счет».
                </p>

                <p><img src="/img/help/order/10.jpg" width="100%"/></p>
                <p>Нажатие на эту кнопку позволяет загрузить счет на компьютер в формате PDF. Цены в счете указаны актуальные с учетом индивидуальных скидок Дистрибьюторов.</p>
                <p><img src="/img/help/order/11.jpg" width="100%"/></p>
                <p>Технология просчета заказа, сохранения спецификации и выписки счета одинаковая для всех продуктов.
                    Ниже рассмотрим особенности калькуляторов для остальной продукции.
                </p>

                <p class="text-primary">Калькулятор грильято </p>
                <p><img src="/img/help/order/12.jpg" width="100%"/></p>
                <p>Все поля понятны, заполняем и просчитываем по той же технологии, что и Т-профиль. Никаких особенностей нет.</p>

                <p class="text-primary">Калькулятор рейка KRAFT Куб</p>
                <p><img src="/img/help/order/13.jpg" width="100%"/></p>
                <p>Чуть позже – на доработке</p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://vjs.zencdn.net/7.1.0/video.js"></script>
@endsection