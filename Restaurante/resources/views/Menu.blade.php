<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Saboroso</title>
    <link  href="{{ asset('css/Menu.css') }}" rel="stylesheet">
</head>
<body>
    <header class="navbar">
        <nav>
            <ul>
                <li><a href="#about">Sobre Nós</a></li>
                <li><a href="#menu-highlights">Cardápio</a></li>
                <li><a href="#hours">Horário</a></li>
                <li><a href="#contact">Contato</a></li>
                <li><a href="/Cadatrar_Produtos">Cadastrar Produtos</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <header>
            <img src="/img/logo.png" alt="Logo do Restaurante" class="logo">
            <h1>Restaurante Saboroso</h1>
        </header>
        
        <main>
 
            <section id="about">
                <br>
                <br>
                <h2>Sobre Nós</h2>
                <p>No Restaurante Saboroso, trazemos até você pratos únicos preparados com os melhores ingredientes. Nossa missão é proporcionar uma experiência gastronômica inesquecível, combinando sabores tradicionais com um toque de modernidade.</p>
            </section>

            <section id="menu-highlights">
                <h2>Destaques do Cardápio</h2>
                <div class="menu-items">
                    <div class="menu-item">
                        <img src="/img/prato1.jpg" alt="Prato 1" class="menu-img">
                        <h3>Prato 1</h3>
                        <p>Descrição deliciosa do prato 1.</p>
                        <span>R$ 50,00</span>
                    </div>
                    <div class="menu-item">
                        <img src="/img/prato2.jpg" alt="Prato 2" class="menu-img">
                        <h3>Prato 2</h3>
                        <p>Descrição deliciosa do prato 2.</p>
                        <span>R$ 60,00</span>
                    </div>
                    <div class="menu-item">
                        <img src="/img/prato3.jpg" alt="Prato 3" class="menu-img">
                        <h3>Prato 3</h3>
                        <p>Descrição deliciosa do prato 3.</p>
                        <span>R$ 70,00</span>
                    </div>
                </div>
                <br>
                <br>
                <a href="/Cardapio" class="btn">Ver Cardápio Completo</a>
            </section>

            <section id="hours">
                <h2>Horário de Funcionamento</h2>
                <ul>
                    <li>Segunda a Sexta: 12h - 22h</li>
                    <li>Sábado: 12h - 23h</li>
                    <li>Domingo: 12h - 20h</li>
                </ul>
            </section>

            <section id="contact">
                <h2>Contato</h2>
                <p>Endereço: Rua Saborosa, 123 - Centro</p>
                <p>Telefone: (11) 1234-5678</p>
                <p>Email: contato@restaurantesaboroso.com</p>
                <a href="#reservations" class="btn-outline">Faça sua Reserva</a>
            </section>

            <!-- Nova seção de reservas -->
            <section id="reservation">
                <h2>Faça sua Reserva</h2>
                <div class="reservation-container">
                    <form>
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" id="name" name="name" placeholder="Seu nome" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com" required>
                        </div>
            
                        <div class="form-group">
                            <label for="phone">Telefone:</label>
                            <input type="tel" id="phone" name="phone" placeholder="(11) 99999-9999" required>
                        </div>
            
                        <div class="form-group">
                            <label for="date">Data:</label>
                            <input type="date" id="date" name="date" required>
                        </div>
            
                        <div class="form-group">
                            <label for="time">Hora:</label>
                            <input type="time" id="time" name="time" required>
                        </div>
            
                        <button type="submit" class="btn">Reservar Agora</button>
                    </form>
                </div>
            </section>
            
            <section id="testimonials">
                <h2>O que nossos clientes dizem</h2>
                <div class="testimonial">
                    <img src="/Img/mulher1.jpg" alt="Maria S." class="testimonial-img">
                    <blockquote>
                        <p>"A melhor comida que já provei! A equipe é super atenciosa e o ambiente é acolhedor."</p>
                        <cite>- Maria S. <span class="stars">★★★★★</span></cite>
                    </blockquote>
                </div>
                <div class="testimonial">
                    <img src="/img/homem1.jpg" alt="João P." class="testimonial-img">
                    <blockquote>
                        <p>"O atendimento é excepcional, e os pratos são deliciosos, Sempre volto!"</p>
                        <cite>- João P. <span class="stars">★★★★☆</span></cite>
                    </blockquote>
                </div>
                <div class="testimonial">
                    <img src="/img/homem2.jpg" alt="Ana T." class="testimonial-img">
                    <blockquote>
                        <p>"Um dos melhores restaurantes da cidade! Recomendo o prato do dia!"</p>
                        <cite>- Ana T. <span class="stars">★★★★★</span></cite>
                    </blockquote>
                </div>
            </section>
            
            

            <!-- Nova seção de mapa -->
            <section id="map">
                <h2>Nos Encontre</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.4210573163474!2d-122.0842496843407!3d37.42199997982186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb5bbfd78bbcd%3A0xf6bce2a12b1ab0aa!2sGoogleplex!5e0!3m2!1sen!2sus!4v1633025167000!5m2!1sen!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </section>
        </main>

        <footer>
            <p>&copy; 2024 Restaurante Saboroso. Todos os direitos reservados.</p>
            <br>
            <div class="social-media">
                <a href="#"><img src="/img/facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="/img/instagram-icon.png" alt="Instagram"></a>
                <a href="#"><img src="/img/twitter-icon.png" alt="Twitter"></a>
            </div>
        </footer>
    </div>
</body>
</html>
