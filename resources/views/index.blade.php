<x-main-layout>

    <section class="home-intro position-relative">
        <img src="{{ asset('storage/images/home/intro.jpg') }}" alt="intro img" class="img-fluid w-100">

        <div class="container position-absolute">
            <div class="home-intro__text">
                <h1>Мы - золотой ключик</h1>
                <p>Построим все что захотите</p>
                <p>с гарантией наилучшего обслуживания</p>
                <a href="/" class="btn btn-dark">Оставить заявку</a>
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
                <x-project-card />
                <x-project-card />
                <x-project-card />
                <x-project-card />
                <x-project-card />
                <x-project-card />
                <x-project-card />
                <x-project-card />
                <x-project-card />
            </div>
        </div>
    </section>

</x-main-layout>
