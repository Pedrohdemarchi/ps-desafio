@extends('layouts.site.site')

@section('titulo')
    Contato - ML Faria Engenharia de Estruturas
@endsection

@section('conteudo')

<section class="sobre-banner">
    <h1>
        <span>ENTRE EM</span>
        <strong>CONTATO</strong>
    </h1>
</section>

<section class="contato-section">

    <div class="contato-container">

        <!-- PAINEL ESQUERDO -->
        <div class="contato-info">

            <div class="contato-titulo">
                <h2>Informações de contato</h2>
                <p>Solicite seu orçamento aqui!</p>
            </div>

            <div class="contato-dados">

                <a href="tel:+5527995736003" class="contato-item">
                    <span class="contato-icone">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1C10.61 21 3 13.39 3 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.25 1.02l-2.2 2.2z"/>
                        </svg>
                    </span>
                    <span>+55 (27) 99573-6003</span>
                </a>

                <a href="mailto:contato@mlfaria.com.br" class="contato-item">
                    <span class="contato-icone">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 4l-8 5-8-5V6l8 5 8-5z"/>
                        </svg>
                    </span>
                    <span>contato@mlfaria.com.br</span>
                </a>

            </div>

            <!-- REDES SOCIAIS -->
            <div class="contato-redes">

                <a href="#" target="_blank" aria-label="WhatsApp" class="rede-social">
                    <span>◉</span>
                </a>

                <a href="#" target="_blank" aria-label="LinkedIn" class="rede-social">
                    <span>in</span>
                </a>

                <a href="#" target="_blank" aria-label="Instagram" class="rede-social">
                    <span>◎</span>
                </a>

                <a href="#" target="_blank" aria-label="Facebook" class="rede-social">
                    <span>f</span>
                </a>

            </div>

        </div>

        <!-- PAINEL DIREITO / FORMULÁRIO -->
        <div class="contato-formulario">

            <form id="contato-form" action="https://formsubmit.co/ajax/douglas.nfaria@gmail.com" method="POST">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_subject" value="Novo contato pelo site ML Faria">
                <input type="hidden" name="_template" value="table">

                <div class="form-grid">

                    <div class="campo">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder=" " required>
                    </div>

                    <div class="campo">
                        <label for="empresa">Empresa</label>
                        <input type="text" id="empresa" name="empresa"
                               value="ML Faria Engenharia de Estruturas">
                    </div>

                    <div class="campo">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder=" " required>
                    </div>

                    <div class="campo">
                        <label for="telefone">Telefone</label>
                        <input type="tel" id="telefone" name="telefone"
                               value="+55 (27) 99573-6003" required>
                    </div>

                </div>

                <!-- SERVIÇOS -->
                <div class="servicos-form">

                    <h3>Serviço desejado</h3>

                    <div class="servicos-opcoes">

                        <label class="servico-opcao">
                            <input type="checkbox" name="servicos[]" value="Projeto Estrutural" checked>
                            <span>Projeto<br>Estrutural</span>
                        </label>

                        <label class="servico-opcao">
                            <input type="checkbox" name="servicos[]" value="Avaliação Técnica de Projeto (ATP)">
                            <span>Avaliação Técnica<br>de Projeto (ATP)</span>
                        </label>

                        <label class="servico-opcao">
                            <input type="checkbox" name="servicos[]" value="Consultoria">
                            <span>Consultoria</span>
                        </label>

                        <label class="servico-opcao">
                            <input type="checkbox" name="servicos[]" value="Estudos de Viabilidade">
                            <span>Estudos de<br>Viabilidade</span>
                        </label>

                    </div>

                </div>

                <!-- MENSAGEM -->
                <div class="campo campo-mensagem">
                    <label for="mensagem">Mensagem</label>
                    <textarea id="mensagem" name="mensagem"
                              placeholder="Escreva sua mensagem..." required></textarea>
                </div>

                <div class="form-botao">
                    <button type="submit">Enviar</button>
                </div>

                <p id="contato-status" class="contato-status" role="status" aria-live="polite" hidden></p>
            </form>

        </div>

    </div>

</section>

<script>
    document.getElementById('contato-form').addEventListener('submit', async function (event) {
        event.preventDefault();

        const form = event.currentTarget;
        const status = document.getElementById('contato-status');
        const submitButton = form.querySelector('button[type="submit"]');
        const contactName = new FormData(form).get('nome');

        form.querySelector('[name="_subject"]').value = contactName
            ? `Novo contato pelo site ML Faria - ${contactName}`
            : 'Novo contato pelo site ML Faria';

        status.hidden = true;
        submitButton.disabled = true;
        submitButton.textContent = 'Enviando...';

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
                },
                body: new URLSearchParams(new FormData(form)).toString()
            });

            const result = await response.json();

            if (!response.ok || result.success === false || result.success === 'false') {
                throw new Error(result.message || 'Não foi possível enviar sua mensagem.');
            }

            form.reset();
            status.textContent = 'Mensagem enviada com sucesso! Em breve entraremos em contato.';
            status.dataset.type = 'success';
        } catch (error) {
            status.textContent = 'Não foi possível enviar sua mensagem. Verifique sua conexão e tente novamente.';
            status.dataset.type = 'error';
        } finally {
            status.hidden = false;
            submitButton.disabled = false;
            submitButton.textContent = 'Enviar';
        }
    });
</script>

@endsection