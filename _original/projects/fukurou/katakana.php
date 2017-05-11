<?php
	$pageTitle="Katakana";
	include('includes/header.php');
?>

	<h3>Katakana (カタカナ)</h3>

		<p class="instructions">
			(Hover over each character to view prounciation, click for stroke order)
		</p>

	<h4>Base Sounds</h4>

		<!-- Used a placeholder div to contain the image that has stroke order in it on click -->
		<img id="placeholder2" src="images/placeholder.gif" alt="" onclick="hide2('placeholder2')" class="strokes" onerror="this.style.display='none'">

		<div id="katakana">

			<!-- This stuff's in a table so its not only easier to layout and that it is a chart, but it makes more sense -->
			<table id="base">

				<!-- Row 1	-->
				<tr>

					<td>

						<!-- All this is to help with the hover, flip click stuff that looks awesome, on click just makes my life easier -->
						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/a_box.gif" onclick="return showPic2(this);">
								
								<div class="block">

										<div class="front">
											<strong>ア</strong>
										</div>
										<div class="back">
											<p>a</p>
										</div>

								</div>
							</a>
											
						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ka_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>カ</strong>
									</div>
									<div class="back">
										<p>ka</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/sa_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>サ</strong>
									</div>
									<div class="back">
										<p>sa</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ta_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>タ</strong>
									</div>
									<div class="back">
										<p>ta</p>
									</div>

								</div>

							</a>

						</div>

					</td>		

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/na_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ナ</strong>
									</div>
									<div class="back">
										<p>na</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ha_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ハ</strong>
									</div>
									<div class="back">
										<p>ha</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ma_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>マ</strong>
									</div>
									<div class="back">
										<p>ma</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ya_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ヤ</strong>
									</div>
									<div class="back">
										<p>ya</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ra_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ラ</strong>
									</div>
									<div class="back">
										<p>ra</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/wa_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ワ</strong>
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

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/i_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>イ</strong>
									</div>
									<div class="back">
										<p>i</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ki_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>キ</strong>
									</div>
									<div class="back">
										<p>ki</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/shi_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>シ</strong>
									</div>
									<div class="back">
										<p>shi</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/chi_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>チ</strong>
									</div>
									<div class="back">
										<p>chi</p>
									</div>

								</div>

							</a>

						</div>

					</td>		

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ni_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ニ</strong>
									</div>
									<div class="back">
										<p>ni</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/hi_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ヒ</strong>
									</div>
									<div class="back">
										<p>hi</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/mi_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ミ</strong>
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

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ri_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>リ</strong>
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

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/u_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ウ</strong>
									</div>
									<div class="back">
										<p>u</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ku_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ク</strong>
									</div>
									<div class="back">
										<p>ku</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/su_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ス</strong>
									</div>
									<div class="back">
										<p>su</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/tsu_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ツ</strong>
									</div>
									<div class="back">
										<p>tsu</p>
									</div>

								</div>

							</a>

						</div>

					</td>		

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/nu_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ヌ</strong>
									</div>
									<div class="back">
										<p>nu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/fu_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>フ</strong>
									</div>
									<div class="back">
										<p>fu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/mu_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ム</strong>
									</div>
									<div class="back">
										<p>mu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/yu_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ユ</strong>
									</div>
									<div class="back">
										<p>yu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ru_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ル</strong>
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

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/e_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>エ</strong>
									</div>
									<div class="back">
										<p>e</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ke_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ケ</strong>
									</div>
									<div class="back">
										<p>ke</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/se_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>セ</strong>
									</div>
									<div class="back">
										<p>se</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/te_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>テ</strong>
									</div>
									<div class="back">
										<p>te</p>
									</div>

								</div>

							</a>

						</div>

					</td>		

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ne_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ネ</strong>
									</div>
									<div class="back">
										<p>ne</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/he_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ヘ</strong>
									</div>
									<div class="back">
										<p>he</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/me_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>メ</strong>
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

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/re_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>レ</strong>
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

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/o_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>オ</strong>
									</div>
									<div class="back">
										<p>o</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ko_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>コ</strong>
									</div>
									<div class="back">
										<p>ko</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/so_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ソ</strong>
									</div>
									<div class="back">
										<p>so</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/to_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ト</strong>
									</div>
									<div class="back">
										<p>to</p>
									</div>

								</div>

							</a>

						</div>

					</td>		

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/no_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ノ</strong>
									</div>
									<div class="back">
										<p>no</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ho_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ホ</strong>
									</div>
									<div class="back">
										<p>ho</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/mo_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>モ</strong>
									</div>
									<div class="back">
										<p>mo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/yo_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ヨ</strong>
									</div>
									<div class="back">
										<p>yo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ro_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ロ</strong>
									</div>
									<div class="back">
										<p>ro</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/wo_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ヲ</strong>
									</div>
									<div class="back">
										<p>wo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/n_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ン</strong>
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

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ga_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ガ</strong>
									</div>
									<div class="back">
										<p>ga</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/za_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ザ</strong>
									</div>
									<div class="back">
										<p>za</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/da_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ダ</strong>
									</div>
									<div class="back">
										<p>da</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ba_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>バ</strong>
									</div>
									<div class="back">
										<p>ba</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/pa_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>パ</strong>
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

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/gi_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ギ</strong>
									</div>
									<div class="back">
										<p>gi</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ji1_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ジ</strong>
									</div>
									<div class="back">
										<p>ji</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ji2_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ヂ</strong>
									</div>
									<div class="back">
										<p>ji</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>
					
						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/bi_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ビ</strong>
									</div>
									<div class="back">
										<p>bi</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/pi_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ピ</strong>
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

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/gu_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>グ</strong>
									</div>
									<div class="back">
										<p>gu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/zu1_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ズ</strong>
									</div>
									<div class="back">
										<p>zu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/zu2_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ヅ</strong>
									</div>
									<div class="back">
										<p>zu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/bu_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ブ</strong>
									</div>
									<div class="back">
										<p>bu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/pu_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>プ</strong>
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

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ge_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ゲ</strong>
									</div>
									<div class="back">
										<p>ge</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ze_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ゼ</strong>
									</div>
									<div class="back">
										<p>ze</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/de_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>デ</strong>
									</div>
									<div class="back">
										<p>de</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/be_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ベ</strong>
									</div>
									<div class="back">
										<p>be</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/pe_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ペ</strong>
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

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/go_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ゴ</strong>
									</div>
									<div class="back">
										<p>go</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/zo_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ゾ</strong>
									</div>
									<div class="back">
										<p>zo</p>
									</div>

								</div>

							</a>
								
						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/do_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ド</strong>
									</div>
									<div class="back">
										<p>do</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/bo_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ボ</strong>
									</div>
									<div class="back">
										<p>bo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/po_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ポ</strong>
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

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/kya_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>キャ</strong>
									</div>
									<div class="back">
										<p>kya</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/sha_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>シャ</strong>
									</div>
									<div class="back">
										<p>sha</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/cha_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>チャ</strong>
									</div>
									<div class="back">
										<p>cha</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/nya_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ニャ</strong>
									</div>
									<div class="back">
										<p>nya</p>
									</div>

								</div>

							</a>

						</div>

					</td>		

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/hya_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ヒャ</strong>
									</div>
									<div class="back">
										<p>hya</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/mya_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ミャ</strong>
									</div>
									<div class="back">
										<p>mya</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/rya_box.gif" onclick="return showPic2(this);">

									<div class="block">

										<div class="front">
											<strong>リャ</strong>
										</div>
										<div class="back">
											<p>rya</p>
										</div>

									</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/gya_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ギャ</strong>
									</div>
									<div class="back">
										<p>gya</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ja_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ジャ</strong>
									</div>
									<div class="back">
										<p>ja</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/bya_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ビャ</strong>
									</div>
									<div class="back">
										<p>bya</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/pya_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ピャ</strong>
									</div>
									<div class="back">
										<p>pya</p>
									</div>

								</div>

							</a>

						</div>

					</td>

				</tr>

				<!-- Row 11 -->

				<tr>
					
					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/kyu_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>キュ</strong>
									</div>
									<div class="back">
										<p>kyu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/shu_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>シュ</strong>
									</div>
									<div class="back">
										<p>shu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/chu_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>チュ</strong>
									</div>
									<div class="back">
										<p>chu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/nyu_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ニュ</strong>
									</div>
									<div class="back">
										<p>nyu</p>
									</div>

								</div>

							</a>

						</div>

					</td>		

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/hyu_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ヒュ</strong>
									</div>
									<div class="back">
										<p>hyu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/myu_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ミュ</strong>
									</div>
									<div class="back">
										<p>myu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ryu_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>リュ</strong>
									</div>
									<div class="back">
										<p>ryu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/gyu_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ギュ</strong>
									</div>
									<div class="back">
										<p>gyu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ju_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ジュ</strong>
									</div>
									<div class="back">
										<p>ju</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/byu_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ビュ</strong>
									</div>
									<div class="back">
										<p>byu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/pyu_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ピュ</strong>
									</div>
									<div class="back">
										<p>pyu</p>
									</div>

								</div>

							</a>

						</div>

					</td>

				</tr>

				<!-- Row 12 -->

				<tr>
					
					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/kyo_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>キョ</strong>
									</div>
									<div class="back">
										<p>kyo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/sho_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ショ</strong>
									</div>
									<div class="back">
										<p>sho</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/cho_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>チョ</strong>
									</div>
									<div class="back">
										<p>cho</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/nyo_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ニョ</strong>
									</div>
									<div class="back">
										<p>nyo</p>
									</div>
								</div>

							</a>

						</div>

					</td>		

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/hyo_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ヒョ</strong>
									</div>
									<div class="back">
										<p>hyo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/myo_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ミョ</strong>
									</div>
									<div class="back">
										<p>myo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/ryo_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>リョ</strong>
									</div>
									<div class="back">
										<p>ryo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/gyo_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ギョ</strong>
									</div>
									<div class="back">
										<p>gyo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/jo_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ジョ</strong>
									</div>
									<div class="back">
										<p>jo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/byo_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ビョ</strong>
									</div>
									<div class="back">
										<p>byo</p>
									</div>

								</div>

							</a>

						</div>

					</td>

					<td>

						<div class="card" onclick="fadeOut2();">

							<a href = "images/katakana/pyo_box.gif" onclick="return showPic2(this);">

								<div class="block">

									<div class="front">
										<strong>ピョ</strong>
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
