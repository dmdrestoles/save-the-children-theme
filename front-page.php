<?php 
wp_enqueue_style("h2h-style-homepage", get_template_directory_uri() . "/assets/css/homepage.css", $version, "all");
get_header(); 
?>
		
<!--Homepage-->
<div class="homepage">
	<div class="header">
		<div id="slider">
			<div id="mask">  
				<ul>
					<li id="first" class="first">
					</li>
					<li id="second" class="second">
					</li>
					<li id="third" class="third">
					</li>
					<li id="fourth" class="fourth">
					</li>
					</ul>
			</div>  
			<div class="slider-dots">
				<span class="dot1"></span> 
				<span class="dot2"></span> 
				<span class="dot3"></span> 
				<span class="dot4"></span> 
			</div>
		</div>
		
		<div class="header-caption">
			<div class="title-container">
				<h1 class="title1">FACILITATOR'S MANUAL</h1>
				</br>
				<h1 class="title2">NG Heart to HEART</h1>
			</div>
			
			<div class="subtitle-container">					
				<h3 class="subtitle">
					Ang E-Learning Course na ito ay magsisilbing gabay para sa Heart to HEART Facilitators sa kanilang 
					pagpapadaloy ng parenting group sessions at para suportahan ang mga nanay, tatay, guardian, at iba pang tagapangalaga na 
					magkaroon ng mas malalim na komunikasyon sa kanilang mga anak na adolescent 10-14 taong gulang.
				</h3>
			</div>
		</div>
		<a href='#'>
			<div class="startBtn">UMPISAHAN NA NATIN</div>
		</a>
		<div class="arc">
			<div class="scroll-down">
				<img src="images/arrow.png">
			</div>
			<div class="title">Ano ang Heart to HEART?</div>
			<div class="text">
				Ang <b>Heart to HEART</b> (Healthy, Empowered, and Responsible Teens) ay para sa mga nanay, tatay, guardian, at 
				iba pang tagapangalaga ng mga kabataang nasa edad 10-14. Ito ay may anim na session ng praktikal na pamamaraan 
				sa paghubog ng abilidad ng mga tagapangalaga na nakatuon sa kakayahang makipag-usap sa kanilang mga anak tungkol 
				sa pagdadalaga’t pagbibinata, gender norms, pag-iwas sa maagang pagbubuntis, at mga sexually transmitted infection (STI), 
				kasama ang HIV at AIDS
			</div>
		</div>
	</div>
	<div class="content-container">
		<div class="objective">
			<div class="img-content left">
				<img src="images/placeholder.png">
			</div>
			<div class="text-content">
				<div class="title">Layunin ng Heart to HEART</div>
				<div class="text">
					<li>Mapabuti ang komunikasyon ng mga magulang at guardian at kanilang mga anak na edad 10-14;
					</br></br>
					<li>Paunlarin ang kaalaman ng mga magulang, guardian, at kabataan kung paano iwasan ang maagang pagbubuntis, sexually transmitted infections (STI), kasama na ang HIV at AIDS, at child marriage;
					</br></br>
					<li>Mapabuti ang kaalaman ng mga magulang, guardian, at kabataan tungkol sa puberty, at para malaman nila kung saan at paano makakakuha ng impormasyon tungkol sa sexual at reproductive health at mga serbisyong akma para sa mga adolescent; at
					</br></br>
					<li>Palawakin ang pagtanggap ng mas pantay na pagpapahalaga sa lahat ng gender.
				</div>
			</div>
			<div class="img-content right">
				<img src="images/placeholder.png">
			</div>
		</div>
		<div class="video-instructions">
			<!-- Video content code: 
			<video class="video" oncontextmenu="return false;" width="1100" height="550" controls controlsList="nodownload"> 
				<source src="#" type="video/mp4"> 
			</video>
			-->
			<img class="video" src="images/video-placeholder.png" style="width: 1100px; height: 550px;">
			<div class="title">Paano gamitin ang manual o site na ito?</div>
			<div class="text">
				Ang Heart to HEART ay nakaayos sa anim (6) na sessions. Ang bawat session ay dinisenyo para maibigay sa apat (4) na oras. 
				Dapat ibigay ang mga session sa tamang pagkakasunod-sunod, mula Session 1 hanggang Session 6, isang session kada buwan 
				sa loob ng anim na buwan
				</br></br>
				Sa umpisa ng bawat session outline, may nakalistang agenda para makita mo ang gagawin sa araw na iyon. 
				Bago dumating ang araw ng session, simulan ang mga preparasyon na nakalista bago sa unang activity ng bawat session.
				</br></br>
				Maglagay ng break sa gitna ng session kapag nakakaramdam ng pagod o antok ang mga participant. 
				Maaaring basahin nang malakas ang mga salitang nakasulat sa italics.
				</br></br>
				Sa dulo ng bawat session, may makikitang assignment ng mga magulang na kailangan nilang gawin sa bahay kasama ang 
				kanilang mga anak. Kailangan nilang mai-report ang mga assignment na ito sa simula ng susunod na session.
			</div>
				
			<a href='#'>
				<div class="bottomStartBtn">UMPISAHAN ANG COURSE</div>
			</a>
		</div>
	</div>
</div>
<?php
	get_footer();
?>