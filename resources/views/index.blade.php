<x-main-layout>

    <section class="home-intro position-relative">
        <img src="{{ asset('storage/images/home/intro.jpg') }}" alt="intro img" class="img-fluid w-100">

        <div class="container position-absolute">
            <div class="home-intro__text">
                <h1><strong>Мы - золотой ключик</strong></h1>
                <p>
                    Построим все что захотите<br/>
                    с гарантией наилучшего обслуживания
                </p>
                <a href="/" class="btn btn-warning"><strong>Оставить заявку</strong></a>
            </div>
        </div>
    </section>

    <section class="service-slider section">
        <div class="container">
            <h2 class="text-center mb-4">Наши услуги</h2>
            <div class="swiper serviceSwiper">
                <div class="swiper-wrapper">
                    <x-swiper-slide-img-overlay title="Строительство" description="Завлекающее сообщение" img-uri="1_46.jpg" />
                    <x-swiper-slide-img-overlay title="Недвижимость" description="Завлекающее сообщение" img-uri="7861338t1hc389.jpg" />
                    <x-swiper-slide-img-overlay title="Электрика" description="Завлекающее сообщение" img-uri="5157113284.jpg" />
                    <x-swiper-slide-img-overlay title="Кадастровый инженер" description="Завлекающее сообщение" img-uri="kadastrovyy-inzhener-kak-vybrat-podhodyashhego-specialista-foto-1.jpeg" />
                    <x-swiper-slide-img-overlay title="Гедозит" description="Завлекающее сообщение" img-uri="5233553708.jpg" />
                    <x-swiper-slide-img-overlay title="Ремонт" description="Завлекающее сообщение" img-uri="1_46.jpg" />
                    <x-swiper-slide-img-overlay title="Юридическое сопровождение" description="Завлекающее сообщение" img-uri="1_46.jpg" />
                    <x-swiper-slide-img-overlay title="Страхование жилья и зоровья" description="Завлекающее сообщение" img-uri="1_46.jpg" />
                    <x-swiper-slide-img-overlay title="Статьи" description="Завлекающее сообщение" img-uri="1_46.jpg" />
                </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="projects-demo section">
        <div class="container">
            <h2 class="text-center mb-4">Готовые проекты</h2>
            <div class="row justify-content-md-evenly justify-content-center gap-4">
                @foreach($real_estates as $real_estate)
                    <div class="card col-lg-3 col-md-5 col-12">
                        <img src="/storage/images/real-estates/{{ $real_estate->image_uri }}" class="card-img-top" alt="home" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $real_estate->name }}</h5>
                            <div class="row justify-content-between mb-3">
                                <div class="col-5 text-nowrap">Размеры: <strong>{{ $real_estate->dimensions }}</strong></div>
                                <div class="col-5 text-nowrap">Комнат: <strong>{{ $real_estate->rooms }}</strong></div>
                                <div class="col-5 text-nowrap">Площадь: <strong>{{ $real_estate->square }}м<sup>2</sup></strong></div>
                                <div class="col-5 text-nowrap">Спален: <strong>3</strong></div>
                            </div>
                            <div class="mb-3">
                                <div>Тип дома: <strong>Газонобетон</strong></div>
                                <div>Срок строительства: <strong>3 месяца</strong></div>
                            </div>
                            <div>
                                <p class="card-text">Стоимость строительства: <strong>{{ $real_estate->cost }} руб</strong></p>
                            </div>

                            <a href="{{ route('real-estate.show', $real_estate->id) }}" class="btn btn-warning mt-3"><strong>Посмотреть</strong></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-main-layout>
