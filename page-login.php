	<!DOCTYPE html>
	<html lang="en">
	  <head>
		<title>Page-Login - Presentation Page</title>
		<meta property="og:title" content="Page-Login - Presentation Page" http-equiv="Content-type" content="text/html; charset=utf-8" />
		<style data-tag="reset-style-sheet">
		  html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6 {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
		</style>
		<style data-tag="default-style-sheet">
		  html {
			font-family: Open Sans;
			font-size: 18px;
		  }

		  body {
			font-weight: 400;
			font-style:normal;
			text-decoration: none;
			text-transform: none;
			letter-spacing: normal;
			line-height: 1.55;
			color: var(--dl-color-gray-black);
			background-color: var(--dl-color-gray-white);

		  }
		</style>
		<link
		  rel="stylesheet"
		  href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&amp;display=swap"
		  data-tag="font"
		/>
		<link
		  rel="stylesheet"
		  href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
		  data-tag="font"
		/>
		<style>
		  html {
		  scroll-behavior: smooth;
		  }
		</style>
		<link rel="stylesheet" href="./style.css" />
	  </head>
	  <body>
		<div>
		  <link href="./page-login.css" rel="stylesheet" />

		  <div class="page-login-container">
			<div data-role="Header" class="page-login-navbar-container">
			  <div class="page-login-navbar">
				<div class="page-login-logo">
				  <img
					alt="image"
					src="public/playground_assets/recycling%20reuse%20logo-200h.png"
					class="page-login-image"
				  />
				</div>
				<div class="page-login-links-container">
				  <a href="index.html" class="page-login-link">Início</a>
				  <a href="#features" class="page-login-link1">Publicações</a>
				  <a href="#services" class="page-login-link2 anchor">Serviços</a>
				  <a href="#about-us" class="page-login-link3 anchor">
					Sobre a We recycle
				  </a>
				  <a href="#contact" class="page-login-link4 anchor">Contato</a>
				</div>
				<div class="page-login-cta-container">
				  <button class="page-login-cta-btn button anchor">Entrar</button>
				  <div data-type="BurgerMenu" class="page-login-burger-menu">
					<svg viewBox="0 0 1024 1024" class="page-login-icon">
					  <path
						d="M128 256h768v86h-768v-86zM128 554v-84h768v84h-768zM128 768v-86h768v86h-768z"
					  ></path>
					</svg>
				  </div>
				</div>
				<div data-type="MobileMenu" class="page-login-mobile-menu">
				  <div class="page-login-top">
					<img
					  alt="image"
					  src="public/playground_assets/default-img.svg"
					  class="page-login-image1"
					/>
					<div data-type="CloseMobileMenu" class="page-login-container1">
					  <svg viewBox="0 0 1024 1024" class="page-login-icon02">
						<path
						  d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
						></path>
					  </svg>
					</div>
				  </div>
				  <div class="page-login-mid">
					<div class="page-login-links-container1">
					  <a href="#features" class="page-login-link5 anchor">
						features
					  </a>
					  <a href="#services" class="page-login-link6 anchor">
						services
					  </a>
					  <a href="#about-us" class="page-login-link7 anchor">
						About Us
					  </a>
					  <a href="#contact" class="page-login-link8 anchor">contact</a>
					</div>
					<button class="page-login-cta-btn1 button anchor">
					</button>
				  </div>
				  <div class="page-login-bot">
					<div class="page-login-social-links-container">
					  <svg
						viewBox="0 0 950.8571428571428 1024"
						class="page-login-icon04"
					  >
						<path
						  d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
						></path></svg
					  ><svg
						viewBox="0 0 877.7142857142857 1024"
						class="page-login-icon06"
					  >
						<path
						  d="M713.143 73.143c90.857 0 164.571 73.714 164.571 164.571v548.571c0 90.857-73.714 164.571-164.571 164.571h-107.429v-340h113.714l17.143-132.571h-130.857v-84.571c0-38.286 10.286-64 65.714-64l69.714-0.571v-118.286c-12-1.714-53.714-5.143-101.714-5.143-101.143 0-170.857 61.714-170.857 174.857v97.714h-114.286v132.571h114.286v340h-304c-90.857 0-164.571-73.714-164.571-164.571v-548.571c0-90.857 73.714-164.571 164.571-164.571h548.571z"
						></path></svg
					  ><svg
						viewBox="0 0 877.7142857142857 1024"
						class="page-login-icon08"
					  >
						<path
						  d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
						></path>
					  </svg>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			<h1 class="page-login-text">Login</h1>
				<div data-role="Header" class="page-login-content-container">
				  <div class="page-login-form-container">
				  <form width=100%>
					<h1 class="page-login-text1">Usuário</h1>
					<input
					  type="text"
					  name="usuario"
					  placeholder="user@email.com"
					  class="page-login-usuario input"
					/>
					<h1 class="page-login-text2">Senha</h1>
					<input
					  type="text"
					  name="senha"
					  placeholder="*********"
					  class="page-login-email input"
					/>
					<h1 class="page-login-text3">Esqueci minha senha</h1>
					<input type="submit" value="Continuar" class="page-login-button button">
					<h1 class="page-login-text4">Não Possui Cadastro</h1>
				  </div>
				</div>
			</form>
			<img
			  alt="image"
			  src="public/playground_assets/recycling%20reuse%20logo-200h.png"
			  class="page-login-image2"
			/>
			<span class="page-login-text5">
			  © 2022 We Recycle, Todos os direitos reservados.
			</span>
		  </div>
		</div>
		<script src="https://unpkg.com/@teleporthq/teleport-custom-scripts"></script>
		<?php
			//$_GET[]
			//$_POST[]
			if(isset( $_GET["usuario"])){
				$nome = $_GET["usuario"];
			}
			if(isset( $_GET["senha"])){
				$senha = $_GET["senha"];
			}
		?>
	  </body>
	</html>
