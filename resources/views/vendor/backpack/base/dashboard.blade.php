@extends(backpack_view('blank'))

@php

// For different background colors, you can use the following classes: 
// bg-success, bg-warning, bg-info, bg-danger bg-primary, bg-secondary, bg-light, bg-dark.
	$widgets['before_content'][] = [
	  'type' => 'card',
	  'wrapperClass' => 'col', // optional
	  'class' => 'alert alert-warning alert-dismissible fade show', // optional
	  'content' => [
	      // 'header' => 'Some card title', // optional
	      'body' => 'Прочтите внимательно текст в блоках ниже. <button type="button" class="close" data-dismiss="alert" aria-label="Close">    <span aria-hidden="true">&times;</span>  </button>',
	  ]
	];

    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => 'Рабочее место менеджера',
        'content'     => 'Система управления содержимым сайта: категории меню, продукция, статьи-новости, отзывы, контакты.<br>',
        'button_link' => '/docs/1',
        'button_text' => 'Обучение',
    ];

	$widgets['before_content'][] = [
	  'type' => 'div',
	  'class' => 'row',
	  'content' => [ // widgets 
[
    'type'        => 'progress_white',
    'class'       => 'card text-black mb-2',
    'value'       => '2701',
    'description' => '<a href="#">Продукты - Опубликованные</a>',
    'progress'    => 57, // integer
    'progressClass' => 'progress-bar  bg-success',
    'hint'        => 'Соотношение опубликованных и нет продуктов.',
],
[
    'type'        => 'progress_white',
    'class'       => 'card text-black mb-2',
    'value'       => '123',
    'description' => '<a href="#">Категории - Опубликованные</a>',
    'progress'    => 87, // integer
    'progressClass' => 'progress-bar bg-primary',
    'hint'        => 'Соотношение опубликованных и нет Категорий.',
],
[
    'type'        => 'progress_white',
    'class'       => 'card text-black mb-2',
    'value'       => '233',
    'description' => 'Продуктов без изображений.',
    'progress'    => 87, // integer
    'progressClass' => 'progress-bar bg-info',
    'hint'        => 'Соотношение продукции с изображением и нет.',
],
[
    'type'        => 'progress',
    'class'       => 'card text-white bg-danger mb-2',
    'value'       => '3',
    'description' => 'Активных заказов.',
    'progress'    => 87, // integer
    'progressClass' => 'progress-bar bg-primary',
    'hint'        => 'Соотношение выполненых и нет заказов.',
]


	  ]
	];

$card1 = <<<TXT1
<b>Как работает модуль:</b>
<ul>
	<li>Используется один розничный-основной тип цен.</li>
	<li>Система обновляет справочники продукции каждый день в 15:00.</li>
	<li>При необходимости Менеджер может запустить импорт-загрузку вручную.</li>
	<li>У категорий и продукции есть привязка к своему уникальному номеру ident.</li>
	<li>Система обновит названия категорий и продукции, цены по номеру ident.</li>
</ul>
TXT1;

$card2 = <<<TXT1
<b>Обработка информации:</b>
<ul>
	<li>По умолчанию все категории и продукты скрыты для отображения.</li>
	<li>Вам необходимо включить отображение для Категорий и Продукции.</li>
	<li>Можно добавить подробное описание продукта, выбрать и загрузить главное и дополнительные изображение.</li>
	<li>Для ускорения и упрощения работы с изображениями, система уже загрузила около 100 изображений для главной картинки товара. Вам надо будет только выбрать из имеющихся. Если изображение Вам не подходит, выберите своё сообственное. Важно соблюдать пропорции изображения 1.5</li>
</ul>
TXT1;

$card3 = <<<TXT1
<b>Общая бизнес-логика работы:</b>
<ul>
	<li>Посититель просматривает меню.</li>
	<li>Добавляет понравившийся продукт (один или несколько) в корзину.</li>
	<li>Переходит к Оформлению заказа:</li>
	<li>Клиент указывает дополнительную информацию: доставка, скидки, другое.</li>
	<li>После подтверждения клиентом, Заказ появляется на рабочем столе Кассира, который уже оформляет реализацию в программе RKeeper7</li>
</ul>
TXT1;


	$widgets['before_content'][] = [
	  'type' => 'div',
	  'class' => 'row',
	  'content' => [ // widgets 
						[
							  'type' => 'card',
							  // 'wrapperClass' => 'col', // optional
							  'class' => 'card bg-dark text-white', // optional
							  'content' => [
							      'header' => 'Импорт из RKeeper7', // optional
							      'body' => $card1,
							  ]
						],
						[
							  'type' => 'card',
							  // 'wrapperClass' => 'col-sm-4 col-md-4', // optional
							  'class' => 'card bg-primary text-white', // optional
							  'content' => [
							      'header' => 'Публикация и отображение', // optional
							      'body' => $card2,
							  ]
						],
						[
							  'type' => 'card',
							  // 'wrapperClass' => 'col-sm-4 col-md-4', // optional
							  'class' => 'card bg-light text-black', // optional
							  'content' => [
							      'header' => 'Выбор-Заказ-Оплата', // optional
							      'body' => $card3,
							  ]
						]						
	      // [ 'type' => 'card', 'content' => ['body' => 'One'] ],
	  ]
	];


@endphp

@section('content')
{{-- <h1>Рабочее место Менеджера</h1> --}}
{{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item">
      <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16d833439f6%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16d833439f6%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.921875%22%20y%3D%22217.7%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16d833439f6%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16d833439f6%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3203125%22%20y%3D%22217.7%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
    </div>
    <div class="carousel-item active">
      <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide" alt="Third slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16d833439f7%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16d833439f7%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277%22%20y%3D%22217.7%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> --}}

@endsection