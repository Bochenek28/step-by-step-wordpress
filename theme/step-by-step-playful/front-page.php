<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<section class="hero" id="home">
    <div class="container hero-grid">
        <div>
            <h1>Step by Step Centrum Wczesnego Rozwoju</h1>
            <p class="hero-lead">Neurologopedia i fizjoterapia dziecięca w Babicach Nowych. Wspieramy niemowlęta, małe dzieci i ich rodziców od pierwszych dni życia.</p>
            <div class="hero-actions">
                <a class="button" href="<?php echo esc_url(step_by_step_booksy_url()); ?>" target="_blank" rel="noopener">Umów wizytę</a>
                <a class="button secondary" href="#oferta">Zobacz ofertę</a>
            </div>
            <div class="hero-details" aria-label="Najważniejsze informacje">
                <div class="detail">
                    <strong>Neurologopedia</strong>
                    <span>karmienie, funkcje oralne, rozwój mowy</span>
                </div>
                <div class="detail">
                    <strong>Fizjoterapia</strong>
                    <span>rozwój ruchowy, napięcie, asymetria</span>
                </div>
                <div class="detail">
                    <strong>Babice Nowe</strong>
                    <span>Warszawska 179</span>
                </div>
            </div>
        </div>
        <div class="hero-media" aria-label="Zdjęcia Step by Step">
            <div class="image-frame primary">
                <img src="<?php echo esc_url(step_by_step_image('hero')); ?>" alt="Wnętrze gabinetu Step by Step">
            </div>
        </div>
    </div>
</section>

<section class="section band" id="o-nas">
    <div class="container about-grid">
        <div class="section-heading">
            <h2>Miejsce stworzone z myślą o najmłodszych dzieciach i ich rodzicach</h2>
        </div>
        <div class="about-copy">
            <p>Wspieramy rozwój niemowląt i małych dzieci, łącząc aktualną wiedzę ze spokojnym, indywidualnym podejściem do każdej rodziny.</p>
            <p>Tworzymy zespół specjalistek z zakresu neurologopedii i fizjoterapii. Pracujemy z noworodkami, niemowlętami oraz dziećmi wymagającymi wsparcia rozwojowego.</p>
            <div class="quiet-panel">
                <h3>Jak pracujemy</h3>
                <ul>
                    <li>uważnie diagnozujemy potrzeby dziecka i rodziny,</li>
                    <li>dobieramy terapię do aktualnego etapu rozwoju,</li>
                    <li>pokazujemy rodzicom, jak bezpiecznie wspierać dziecko na co dzień.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section" id="specjalisci">
    <div class="container">
        <div class="section-heading">
            <h2>Nasi specjaliści</h2>
            <p>Dwie ścieżki wsparcia w jednym miejscu: neurologopedia dziecięca i fizjoterapia dziecięca.</p>
        </div>
        <div class="profiles">
            <article class="profile">
                <div class="profile-image">
                    <img src="<?php echo esc_url(step_by_step_image('specialist_two')); ?>" alt="mgr Magdalena Wojewódzka">
                </div>
                <div class="profile-content">
                    <h3>mgr Magdalena Wojewódzka</h3>
                    <p class="profile-role">Neurologopedka i surdologopedka</p>
                    <p>Specjalizuje się w pracy z noworodkami i niemowlętami, w tym wcześniakami. Wspiera dzieci z trudnościami w karmieniu, zaburzeniami neurorozwojowymi oraz problemami w obrębie funkcji oralnych.</p>
                </div>
            </article>
            <article class="profile">
                <div class="profile-image">
                    <img src="<?php echo esc_url(step_by_step_image('specialist_one')); ?>" alt="mgr Małgorzata Klucz-Dąbrowska">
                </div>
                <div class="profile-content">
                    <h3>mgr Małgorzata Klucz-Dąbrowska</h3>
                    <p class="profile-role">Fizjoterapeutka dziecięca</p>
                    <p>Magister fizjoterapii z doświadczeniem w pracy z niemowlętami i małymi dziećmi. Prowadzi terapię przy napięciach mięśniowych, asymetrii, opóźnieniach rozwoju i wadach stóp.</p>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="section band" id="oferta">
    <div class="container">
        <div class="section-heading">
            <h2>Oferta</h2>
            <p>Pomagamy wtedy, gdy rodzic potrzebuje konkretnej diagnozy, spokojnego wyjaśnienia i planu dalszego działania.</p>
        </div>
        <div class="offers">
            <article class="offer-card">
                <h3>Neurologopedia dziecięca</h3>
                <p>Wsparcie karmienia, funkcji oralnych i rozwoju komunikacji od pierwszych dni życia.</p>
                <ul>
                    <li>konsultacja neurologopedyczna,</li>
                    <li>terapia neurologopedyczna,</li>
                    <li>terapia karmienia,</li>
                    <li>kinezjotaping i elektrostymulacja w logopedii,</li>
                    <li>wizyty domowe.</li>
                </ul>
                <a class="button secondary" href="<?php echo esc_url(home_url('/neurologopedia-dziecieca/')); ?>">Czytaj więcej</a>
            </article>
            <article class="offer-card">
                <h3>Fizjoterapia dziecięca</h3>
                <p>Ocena i terapia rozwoju ruchowego niemowląt oraz małych dzieci.</p>
                <ul>
                    <li>konsultacja fizjoterapeutyczna,</li>
                    <li>terapia neurorozwojowa,</li>
                    <li>terapia dla dzieci starszych,</li>
                    <li>wsparcie przy asymetrii i napięciach mięśniowych,</li>
                    <li>instruktaż dla rodziców.</li>
                </ul>
                <a class="button secondary" href="<?php echo esc_url(home_url('/fizjoterapia-dziecieca/')); ?>">Czytaj więcej</a>
            </article>
        </div>
        <!--<div class="hero-actions">
            <a class="button" href="<?php echo esc_url(step_by_step_booksy_url()); ?>" target="_blank" rel="noopener">Umów wizytę</a>
        </div>-->
    </div>
</section>

<section class="section" id="dokumenty">
    <div class="container documents">
        <div class="section-heading">
            <h2>Dokumenty do pobrania</h2>
            <p>W tym miejscu można podpiąć pliki PDF potrzebne przed pierwszą wizytą.</p>
        </div>
        <div class="document-links">
            <a class="document-link" href="#kontakt">
                <strong>Karta informacji dla rodzica</strong>
                <span>PDF do dodania</span>
            </a>
            <a class="document-link" href="#kontakt">
                <strong>Zgody i dokumenty organizacyjne</strong>
                <span>PDF do dodania</span>
            </a>
        </div>
    </div>
</section>

<section class="section band" id="kontakt">
    <div class="container contact-grid">
        <div class="contact-card">
            <h3>Kontakt</h3>
            <div class="contact-list">
                <div class="contact-item">
                    <strong>Neurologopeda</strong>
                    <a href="tel:+48728952708">+48 728 952 708</a>
                </div>
                <div class="contact-item">
                    <strong>Fizjoterapeuta</strong>
                    <a href="tel:+48510599136">+48 510 599 136</a>
                </div>
                <div class="contact-item">
                    <strong>E-mail</strong>
                    <a href="mailto:gabinet@stepbystep.pl">gabinet@stepbystep.pl</a>
                </div>
                <div class="contact-item">
                    <strong>Adres</strong>
                    <span>Warszawska 179<br>05-082 Babice Nowe</span>
                </div>
            </div>
            <div class="hero-actions">
                <a class="button" href="<?php echo esc_url(step_by_step_booksy_url()); ?>" target="_blank" rel="noopener">Umów wizytę</a>
            </div>
        </div>
        <div class="map-frame" aria-label="Mapa dojazdu">
            <iframe title="Mapa Step by Step Babice Nowe" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=Warszawska%20179%2C%2005-082%20Babice%20Nowe&output=embed"></iframe>
        </div>
    </div>
</section>

<?php
get_footer();
