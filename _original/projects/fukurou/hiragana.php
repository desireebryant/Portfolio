<?php
	$pageTitle="Hiragana";
	include('includes/header.php');
?>

	<h3>Hiragana (ひらがな)</h3>

		<p class="instructions">
			(Hover over each character to view prounciation, click for stroke order)
		</p>

	<h4>Base Sounds</h4>

		<!-- Used a placeholder div to contain the image that has stroke order in it on click -->
		<img id="placeholder" src="images/placeholder.gif" alt="" onclick="hide('placeholder')" class="strokes" onerror="this.style.display='none'">

		<div id="hiragana">

			<!-- This stuffs in a table so its not only easier to layout but because it is a tabular data, but it makes more sense -->
			<table id="base">

				<!-- Row 1	-->

				<tr>

					<td>

						<!-- All this is to help with the hover, flip click stuff that looks awesome, on click just makes my life easier -->

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/a_box.gif" onclick="return showPic(this);">
								
								<div class="block">

									<div class="front">
										<strong>あ</strong>
									</div>
									<div class="back">
										<p>a</p>
									</div>

								</div>

							</a>
											
						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ka_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>か</strong>
									</div>
									<div class="back">
										<p>ka</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/sa_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>さ</strong>
									</div>
									<div class="back">
										<p>sa</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ta_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>た</strong>
									</div>
									<div class="back">
										<p>ta</p>
									</div>

								</div>

							</a>

						</div>

					</td>		

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/na_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>な</strong>
									</div>
									<div class="back">
										<p>na</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ha_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>は</strong>
									</div>
									<div class="back">
										<p>ha</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ma_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ま</strong>
									</div>
									<div class="back">
										<p>ma</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ya_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>や</strong>
									</div>
									<div class="back">
										<p>ya</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ra_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ら</strong>
									</div>
									<div class="back">
										<p>ra</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/wa_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>わ</strong>
									</div>
									<div class="back">
										<p>wa</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td></td>

				</tr>

				<!-- Row 2 -->

				<tr>

					<td>



						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/i_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>い</strong>
									</div>
									<div class="back">
										<p>i</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>



						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ki_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>き</strong>
									</div>
									<div class="back">
										<p>ki</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/shi_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>し</strong>
									</div>
									<div class="back">
										<p>shi</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/chi_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ち</strong>
									</div>
									<div class="back">
										<p>chi</p>
									</div>

								</div>

							</a>

						</div>

					</td>		

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ni_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>に</strong>
									</div>
									<div class="back">
										<p>ni</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/hi_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ひ</strong>
									</div>
									<div class="back">
										<p>hi</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/mi_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>み</strong>
									</div>
									<div class="back">
										<p>mi</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td></td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ri_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>り</strong>
									</div>
									<div class="back">
										<p>ri</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td></td><td></td>

				</tr>

				<!-- Row 3 -->

				<tr>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/u_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>う</strong>
									</div>
									<div class="back">
										<p>u</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ku_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>く</strong>
									</div>
									<div class="back">
										<p>ku</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/su_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>す</strong>
									</div>
									<div class="back">
										<p>su</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/tsu_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>つ</strong>
									</div>
									<div class="back">
										<p>tsu</p>
									</div>

								</div>

							</a>

						</div>

					</td>		

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/nu_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぬ</strong>
									</div>
									<div class="back">
										<p>nu</p>
									</div>

								</div>

							</a>
								
						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/fu_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ふ</strong>
									</div>
									<div class="back">
										<p>fu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/mu_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>む</strong>
									</div>
									<div class="back">
										<p>mu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/yu_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ゆ</strong>
									</div>
									<div class="back">
										<p>yu</p>
									</div>

								</div>

							</a>
						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ru_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>る</strong>
									</div>
									<div class="back">
										<p>ru</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td></td><td></td>

				</tr>

				<!-- Row 4 -->

				<tr>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/e_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>え</strong>
									</div>
									<div class="back">
										<p>e</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ke_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>け</strong>
									</div>
									<div class="back">
										<p>ke</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/se_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>せ</strong>
									</div>
									<div class="back">
										<p>se</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/te_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>て</strong>
									</div>
									<div class="back">
										<p>te</p>
									</div>

								</div>

							</a>

						</div>

					</td>		

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ne_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ね</strong>
									</div>
									<div class="back">
										<p>ne</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/he_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>へ</strong>
									</div>
									<div class="back">
										<p>he</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/me_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>め</strong>
									</div>
									<div class="back">
										<p>me</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td></td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/re_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>れ</strong>
									</div>
									<div class="back">
										<p>re</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td></td><td></td>

				</tr>

				<!-- Row 5 -->

				<tr>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/o_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>お</strong>
									</div>
									<div class="back">
										<p>o</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ko_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>こ</strong>
									</div>
									<div class="back">
										<p>ko</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/so_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>そ</strong>
									</div>
									<div class="back">
										<p>so</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/to_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>と</strong>
									</div>
									<div class="back">
										<p>to</p>
									</div>

								</div>

							</a>

						</div>

					</td>		

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/no_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>の</strong>
									</div>
									<div class="back">
										<p>no</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ho_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ほ</strong>
									</div>
									<div class="back">
										<p>ho</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/mo_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>も</strong>
									</div>
									<div class="back">
										<p>mo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/yo_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>よ</strong>
									</div>
									<div class="back">
										<p>yo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ro_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ろ</strong>
									</div>
									<div class="back">
										<p>ro</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/wo_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>を</strong>
									</div>
									<div class="back">
										<p>wo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/n_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ん</strong>
									</div>
									<div class="back">
										<p>n</p>
									</div>

								</div>

							</a>

						</div>

					</td>

				</tr>

			</table>

		<h4>Voiced Sounds</h4>
		
			<table id="voiced">

				<!-- Row 6 -->

				<tr>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ga_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>が</strong>
									</div>
									<div class="back">
										<p>ga</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/za_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ざ</strong>
									</div>
									<div class="back">
										<p>za</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/da_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>だ</strong>
									</div>
									<div class="back">
										<p>da</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ba_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ば</strong>
									</div>
									<div class="back">
										<p>ba</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/pa_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぱ</strong>
									</div>
									<div class="back">
										<p>pa</p>
									</div>

								</div>

							</a>

						</div>

					</td>				

				</tr>

				<!-- Row 7 -->

				<tr>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/gi_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぎ</strong>
									</div>
									<div class="back">
										<p>gi</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ji1_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>じ</strong>
									</div>
									<div class="back">
										<p>ji</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ji2_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぢ</strong>
									</div>
									<div class="back">
										<p>ji</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>
					
						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/bi_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>び</strong>
									</div>
									<div class="back">
										<p>bi</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/pi_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぴ</strong>
									</div>
									<div class="back">
										<p>pi</p>
									</div>

								</div>

							</a>

						</div>

					</td>				

				</tr>

				<!-- Row 8 -->

				<tr>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/gu_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぐ</strong>
									</div>
									<div class="back">
										<p>gu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/zu1_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ず</strong>
									</div>
									<div class="back">
										<p>zu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/zu2_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>づ</strong>
									</div>
									<div class="back">
										<p>zu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/bu_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぶ</strong>
									</div>
									<div class="back">
										<p>bu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/pu_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぷ</strong>
									</div>
									<div class="back">
										<p>pu</p>
									</div>

								</div>

							</a>

						</div>

					</td>				

				</tr>

				<!-- Row 9 -->

				<tr>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ge_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>げ</strong>
									</div>
									<div class="back">
										<p>ge</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ze_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぜ</strong>
									</div>
									<div class="back">
										<p>ze</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/de_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>で</strong>
									</div>
									<div class="back">
										<p>de</p>
									</div>

								</div>

							</a>
								
						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/be_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>べ</strong>
									</div>
									<div class="back">
										<p>be</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/pe_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぺ</strong>
									</div>
									<div class="back">
										<p>pe</p>
									</div>

								</div>

							</a>

						</div>

					</td>				

				</tr>

				<!-- Row 10 -->

				<tr>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/go_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぐ</strong>
									</div>
									<div class="back">
										<p>go</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/zo_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ず</strong>
									</div>
									<div class="back">
										<p>zo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/do_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>づ</strong>
									</div>
									<div class="back">
										<p>do</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>


						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/bo_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぶ</strong>
									</div>
									<div class="back">
										<p>bo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/po_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぷ</strong>
									</div>
									<div class="back">
										<p>po</p>
									</div>

								</div>

							</a>

						</div>

					</td>				

				</tr>

			</table>

		<h4>Diphthongs</h4>

			<table id="diphthongs">

				<!-- Row 11 -->

				<tr>
					
					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/kya_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>きゃ</strong>
									</div>
									<div class="back">
										<p>kya</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/sha_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>しゃ</strong>
									</div>
									<div class="back">
										<p>sha</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/cha_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ちゃ</strong>
									</div>
									<div class="back">
										<p>cha</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/nya_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>にゃ</strong>
									</div>
									<div class="back">
										<p>nya</p>
									</div>

								</div>

							</a>

						</div>

					</td>		

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/hya_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ひゃ</strong>
									</div>
									<div class="back">
										<p>hya</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/mya_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>みゃ</strong>
									</div>
									<div class="back">
										<p>mya</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/rya_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>りゃ</strong>
									</div>
									<div class="back">
										<p>rya</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/gya_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぎゃ</strong>
									</div>
									<div class="back">
										<p>gya</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ja_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>じゃ</strong>
									</div>
									<div class="back">
										<p>ja</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/bya_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>びゃ</strong>
									</div>
									<div class="back">
										<p>bya</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/pya_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぴゃ</strong>
									</div>
									<div class="back">
										<p>pya</p>
									</div>

								</div>

							</a>

						</div>

					</td>

				</tr>

				<!-- Row 12 -->

				<tr>
					
					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/kyu_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>きゅ</strong>
									</div>
									<div class="back">
										<p>kyu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/shu_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>しゅ</strong>
									</div>
									<div class="back">
										<p>shu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/chu_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ちゅ</strong>
									</div>
									<div class="back">
										<p>chu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/nyu_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>にゅ</strong>
									</div>
									<div class="back">
										<p>nyu</p>
									</div>

								</div>

							</a>

						</div>

					</td>		

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/hyu_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ひゅ</strong>
									</div>
									<div class="back">
										<p>hyu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/myu_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>みゅ</strong>
									</div>
									<div class="back">
										<p>myu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ryu_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>りゅ</strong>
									</div>
									<div class="back">
										<p>ryu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/gyu_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぎゅ</strong>
									</div>
									<div class="back">
										<p>gyu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ju_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>じゅ</strong>
									</div>
									<div class="back">
										<p>ju</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/byu_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>びゅ</strong>
									</div>
									<div class="back">
										<p>byu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/pyu_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぴゅ</strong>
									</div>
									<div class="back">
										<p>pyu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

				</tr>

				<!-- Row 13 -->

				<tr>
					
					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/kyo_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>きょ</strong>
									</div>
									<div class="back">
										<p>kyo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/sho_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>しょ</strong>
									</div>
									<div class="back">
										<p>sho</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/cho_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ちょ</strong>
									</div>
									<div class="back">
										<p>cho</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/nyo_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>にょ</strong>
									</div>
									<div class="back">
										<p>nyo</p>
									</div>

								</div>

							</a>

						</div>

					</td>		

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/hyo_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ひょ</strong>
									</div>
									<div class="back">
										<p>hyo</p>
									</div>
								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/myo_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>みょ</strong>
									</div>
									<div class="back">
										<p>myo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/ryo_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>りょ</strong>
									</div>
									<div class="back">
										<p>ryo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/gyo_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぎょ</strong>
									</div>
									<div class="back">
										<p>gyo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/jo_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>じょ</strong>
									</div>
									<div class="back">
										<p>jo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/byo_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>びょ</strong>
									</div>
									<div class="back">
										<p>byo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut();">

							<a href = "images/hiragana/pyo_box.gif" onclick="return showPic(this);">

								<div class="block">

									<div class="front">
										<strong>ぴょ</strong>
									</div>
									<div class="back">
										<p>pyo</p>
									</div>

								</div>

							</a>
							
						</div>

					</td>

				</tr>

			</table>

		</div>

<?php
	include('includes/footer.php');
?>
