<article class="container whous-article">
    <section class="container whous-banner">
        <figure>
            <img class="whous-img" src="<?php echo BASE_URL; ?>assets/images/woman-smiling.png" alt="Pessoas trabalhando">
        </figure>
    </section>
    <section class="container whous-content">
        <div class="whous-title">
            <h3 style="">Quem somos</h3>
            <div class="whous-line"></div>
        </div>
        <div class="subtitle">
            <h4>Lorem ipsum dolor sit amet.</h4>
        </div>
        <div class="who-text">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas facilisis libero nec felis sagittis sagittis. Pellentesque ut enim nisl. Nullam lobortis suscipit dolor, sit amet tincidunt velit iaculis tempor.
            </p>
        </div>
        <div class="whous-btn">
            <button class="btn btn-default custom-btn">Saiba mais</button>
        </div>
    </section>
</article>

<article class="container ourteam-article">
    <section class="container ourteam-content">
        <div class="ourteam-title">
            <h3>Nossa equipe</h3>
            <div class="ourteam-line"></div>
        </div>
        <div class="subtitle">
            <h4>Lorem ipsum dolor sit amet.</h4>
        </div>
        <div class="ourteam-text">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas facilisis libero nec felis sagittis sagittis. Pellentesque ut enim nisl. Nullam lobortis suscipit dolor, sit amet tincidunt velit iaculis tempor.
            </p>
        </div>
    </section>

    <section class="container ourteam-banner">
        <figure>
            <img class="ourteam-img" src="<?php echo BASE_URL; ?>assets/images/people_together.png" alt="Mulher sorrindo">
        </figure>
    </section>
</article>

<article class="ourspace-article">
    <div class="backbrand"></div>
    <div class="container-fluid ourteam-article ourspace-section">
        <section class="container ourteam-content">
            <div class="whous-title">
                <h3>Nosso espaço</h3>
                <div class="whous-line"></div>
            </div>
            <div class="subtitle">
                <h4>Lorem ipsum dolor sit amet.</h4>
            </div>
            <div class="ourteam-text">
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas facilisis libero nec felis sagittis sagittis. Pellentesque ut enim nisl. Nullam lobortis suscipit dolor, sit amet tincidunt velit iaculis tempor.
                </p>
            </div>
        </section>

        <section class="container ourteam-banner ourspace-banner">
            <div class="w3-content w3-display-container">
                <div class="w3-left w3-hover-text-khaki slid-arrow-left" onclick="plusDivs2(-1)">
                    <img class="arrow-slid-icon" src="<?php echo BASE_URL; ?>assets/images/arrow-left-solid.svg">
                </div>
                <div class="w3-right w3-hover-text-khaki slid-arrow-right" onclick="plusDivs2(1)">
                    <img class="arrow-slid-icon" src="<?php echo BASE_URL; ?>assets/images/arrow-right-solid.svg">
                </div>
                <img class="secundary-slider ourteam-img ourspace-img" style="height:100%" src="<?php echo BASE_URL; ?>assets/images/people-working.png">
                <img class="secundary-slider ourteam-img ourspace-img" style="height:100%" src="<?php echo BASE_URL; ?>assets/images/img_snow_wide.jpg">
                <img class="secundary-slider ourteam-img ourspace-img" style="height:100%" src="<?php echo BASE_URL; ?>assets/images/img_mountains_wide.jpg">
            </div>
        </section>
    <div>
</article>

<article class="">
    <section class="container contact">
        <div class="contact-title-box">
            <h2 class="contact-title">Fale conosco</h2>
        </div>
        <div class="contact-text">
            <div class="contact-text-box">
                <p class="contact-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas facilisis libero nec felis sagittis sagittis.
                </p>
            </div>
        </div>
        <div class="contact-icons-box">
            <div class="phone-icon">
                <a class="icon-link" href="#">
                    <div class="icon-group">
                        <img src="<?php echo BASE_URL; ?>assets/images/icon-awesome-phone.svg" alt="Ícone do telefone de contato" class="icon-item">
                        <div class="icon-name">Telefone</div>
                    </div>
                </a>
            </div>
            <div class="whatsapp-icon">
                <a class="icon-link" href="#">
                    <div class="icon-group">
                        <img src="<?php echo BASE_URL; ?>assets/images/icon-ionic-logo-whatsapp.svg" alt="Ícone do WhatsApp de contato" class="icon-item">
                        <div class="icon-name">WhatsApp</div>
                    </div>
                </a>
            </div>
            <div class="wechat-icon">
                <a class="icon-link" href="#">
                    <div class="icon-group">
                        <img src="<?php echo BASE_URL; ?>assets/images/icon-simple-wechat.svg" alt="Ícone do telefone do WeChar" class="icon-item">
                        <div class="icon-name">WeChat</div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    
    <section class="container contact-form">
        <form class="footer-form" id="contact-form">
            <div class="contact-inner">
                <div class="contact-box">
                    <div class="form-group">
                        <input type="text" class="form-control contact-field" id="name" name="name" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control contact-field" id="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="subject" name="subject">
                            <option value="Assunto" selected>Assunto</option>
                            <option value="RH">RH</option>
                            <option value="Administração">Administração</option>
                            <option value="Financeiro">Financeiro</option>
                            <option value="Suporte">Suporte</option>
                        </select>
                    </div>
                </div>

                <div class="contact-area">
                    <div class="form-group">
                        <textarea class="form-control contact-message"></textarea>
                    </div>
                </div>
            </div>
            <div class="contact-submitbtn">
                <button type="submit" class="btn btn-primary contact-btn custom-btn" id="form-submit">Enviar</button>
            </div>
        </form>    
    </section>
</article>
