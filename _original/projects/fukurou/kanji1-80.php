<?php
	$pageTitle="1st grade Kanji";
	include('includes/header.php');
?>

	<h3>1st Grade Kanji (1-80)</h3>

		<p class="instructions">
			(Hover over each character to view its number, click for stroke order)
		</p>

		<!-- Used a placeholder div to contain the image that has stroke order in it on click -->
		<img id="placeholder3" src="images/placeholder.gif" alt="" onclick="hide3('placeholder3')" class="strokes" onerror="this.style.display='none'">

		<div id="kanji_main">

		<!-- This stuff's in a table so its not only easier to layout and that it is a chart, but it makes more sense -->

		<table id="kanji">
		
			<!-- Row 1	-->

			<tr>

				<td>

					<!-- All this is to help with the hover, flip click stuff that looks awesome, on click just makes my life easier...the kanji doesn't have hover just click, maybe will add when it works nicely-->

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji1.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>一</strong>
								</div>
								<div class="kanjiback">
									<strong>1</strong>
								</div>
							</div>
					
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji2.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>二</strong>
								</div>
								<div class="kanjiback">								
									<strong>2</strong>
								</div>
							
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji3.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>三</strong>
								</div>
								<div class="kanjiback">
									<strong>3</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji4.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>四</strong>
								</div>
								<div class="kanjiback">
									<strong>4</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji5.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>五</strong>
								</div>
								<div class="kanjiback">
									<strong>5</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji6.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>六</strong>
								</div>
								<div class="kanjiback">
									<strong>6</strong>
								</div>
						</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji7.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>七</strong>
								</div>
								<div class="kanjiback">
									<strong>7</strong>
								</div>
						</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji8.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>八</strong>
								</div>
								<div class="kanjiback">
									<strong>8</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji9.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>九</strong>
								</div>
								<div class="kanjiback">
									<strong>9</strong>
								</div>
						</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji10.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>十</strong>
								</div>
								<div class="kanjiback">
									<strong>10</strong>
								</div>
						</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji11.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>百</strong>
								</div>
								<div class="kanjiback">
									<strong>11</strong>
								</div>
						</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji12.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>千</strong>
								</div>
								<div class="kanjiback">
									<strong>12</strong>
								</div>
						</div>
						
						</a>

					</div>

				</td>

			</tr>

			<!-- Row 2 -->

			<tr>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji13.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>上</strong>
								</div>
								<div class="kanjiback">
									<strong>13</strong>
								</div>
						</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji14.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>下</strong>
								</div>
								<div class="kanjiback">
									<strong>14</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji15.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>左</strong>
								</div>
								<div class="kanjiback">
									<strong>15</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji16.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>右</strong>
								</div>
								<div class="kanjiback">
									<strong>16</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji17.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>中</strong>
								</div>
								<div class="kanjiback">
									<strong>17</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji18.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>大</strong>
								</div>
								<div class="kanjiback">
									<strong>18</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji19.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>小</strong>
								</div>
								<div class="kanjiback">
									<strong>19</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji20.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>月</strong>
								</div>
								<div class="kanjiback">
									<strong>20</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji21.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>日</strong>
								</div>
								<div class="kanjiback">
									<strong>21</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji22.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>年</strong>
								</div>
								<div class="kanjiback">
									<strong>22</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji23.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>早</strong>
								</div>
								<div class="kanjiback">
									<strong>23</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji24.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>木</strong>
								</div>
								<div class="kanjiback">
									<strong>24</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

			</tr>

			<!-- Row 3 -->

			<tr>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji25.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>林</strong>
								</div>
								<div class="kanjiback">
									<strong>25</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji26.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>山</strong>
								</div>
								<div class="kanjiback">
									<strong>26</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji27.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>川</strong>
								</div>
								<div class="kanjiback">
									<strong>27</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji28.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>土</strong>
								</div>
								<div class="kanjiback">
									<strong>28</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji29.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>空</strong>
								</div>
								<div class="kanjiback">
									<strong>29</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji30.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>田</strong>
								</div>
								<div class="kanjiback">
									<strong>30</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji31.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>天</strong>
								</div>
								<div class="kanjiback">
									<strong>31</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji32.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>生</strong>
								</div>
								<div class="kanjiback">
									<strong>32</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji33.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>花</strong>
								</div>
								<div class="kanjiback">
									<strong>33</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji34.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>草</strong>
								</div>
								<div class="kanjiback">
									<strong>34</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji35.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>虫</strong>
								</div>
								<div class="kanjiback">
									<strong>35</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji36.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>犬</strong>
								</div>
								<div class="kanjiback">
									<strong>36</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

			</tr>

			<!-- Row 4 -->

			<tr>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji37.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>人</strong>
								</div>
								<div class="kanjiback">
									<strong>37</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji38.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>名</strong>
								</div>
								<div class="kanjiback">
									<strong>38</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji39.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>女</strong>
								</div>
								<div class="kanjiback">
									<strong>39</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji40.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>男</strong>
								</div>
								<div class="kanjiback">
									<strong>40</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji41.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>子</strong>
								</div>
								<div class="kanjiback">
									<strong>41</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji42.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>目</strong>
								</div>
								<div class="kanjiback">
									<strong>42</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji43.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>耳</strong>
								</div>
								<div class="kanjiback">
									<strong>43</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji44.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>口</strong>
								</div>
								<div class="kanjiback">
									<strong>44</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji45.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>手</strong>
								</div>
								<div class="kanjiback">
									<strong>45</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji46.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>足</strong>
								</div>
								<div class="kanjiback">
									<strong>46</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji47.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>見</strong>
								</div>
								<div class="kanjiback">
									<strong>47</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

							<a href = "images/kanji1_80/kanji48.gif" onclick="return showPic3(this);">

								<div class="kanjiblock">

									<div class="kanjifront">
										<strong>音</strong>
									</div>
									<div class="kanjiback">
									<strong>48</strong>
								</div>
								</div>
							
							</a>

					</div>

				</td>

			</tr>

			<!-- Row 5 -->

			<tr>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji49.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>力</strong>
								</div>
								<div class="kanjiback">
									<strong>49</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji50.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>気</strong>
								</div>
								<div class="kanjiback">
									<strong>50</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

							<a href = "images/kanji1_80/kanji51.gif" onclick="return showPic3(this);">

								<div class="kanjiblock">

									<div class="kanjifront">
										<strong>円</strong>
									</div>
									<div class="kanjiback">
									<strong>51</strong>
								</div>
								</div>
							
							</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji52.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>入</strong>
								</div>
								<div class="kanjiback">
									<strong>52</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji53.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>出</strong>
								</div>
								<div class="kanjiback">
									<strong>53</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji54.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>立</strong>
								</div>
								<div class="kanjiback">
									<strong>54</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji55.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>休</strong>
								</div>
								<div class="kanjiback">
									<strong>55</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji56.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>先</strong>
								</div>
								<div class="kanjiback">
									<strong>56</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji57.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>夕</strong>
								</div>
								<div class="kanjiback">
									<strong>57</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji58.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>本</strong>
								</div>
								<div class="kanjiback">
									<strong>58</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji59.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>文</strong>
								</div>
								<div class="kanjiback">
									<strong>59</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji60.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>字</strong>
								</div>
								<div class="kanjiback">
									<strong>60</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

			</tr>

			<!-- Row 6 -->

			<tr>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji61.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>学</strong>
								</div>
								<div class="kanjiback">
									<strong>61</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji62.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>校</strong>
								</div>
								<div class="kanjiback">
									<strong>62</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji63.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>村</strong>
								</div>
								<div class="kanjiback">
									<strong>63</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji64.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>町</strong>
								</div>
								<div class="kanjiback">
									<strong>64</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji65.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>森</strong>
								</div>
								<div class="kanjiback">
									<strong>65</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji66.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>正</strong>
								</div>
								<div class="kanjiback">
									<strong>66</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji67.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>水</strong>
								</div>
								<div class="kanjiback">
									<strong>67</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji68.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>火</strong>
								</div>
								<div class="kanjiback">
									<strong>68</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji69.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>玉</strong>
								</div>
								<div class="kanjiback">
									<strong>69</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji70.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>王</strong>
								</div>
								<div class="kanjiback">
									<strong>70</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji71.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>石</strong>
								</div>
								<div class="kanjiback">
									<strong>71</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji72.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>竹</strong>
								</div>
								<div class="kanjiback">
									<strong>72</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

			</tr>

			<!-- Row 7 -->

			<tr>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji73.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>糸</strong>
								</div>
								<div class="kanjiback">
									<strong>73</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji74.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>貝</strong>
								</div>
								<div class="kanjiback">
									<strong>74</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji75.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>車</strong>
								</div>
								<div class="kanjiback">
									<strong>75</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji76.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>金</strong>
								</div>
								<div class="kanjiback">
									<strong>76</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji77.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>雨</strong>
								</div>
								<div class="kanjiback">
									<strong>77</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji78.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>赤</strong>
								</div>
								<div class="kanjiback">
									<strong>78</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji79.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">

								<div class="kanjifront">
									<strong>青</strong>
								</div>
								<div class="kanjiback">
									<strong>79</strong>
								</div>
							</div>
					
					</a>

					</div>

				</td>

				<td>

					<div class="kanjicard" onclick="fadeOut3();">

						<a href = "images/kanji1_80/kanji80.gif" onclick="return showPic3(this);">

							<div class="kanjiblock">
								
								<div class="kanjifront">
									<strong>白</strong>
								</div>
								<div class="kanjiback">
									<strong>80</strong>
								</div>
							</div>
						
						</a>

					</div>

				</td>

				<td></td><td></td><td></td><td></td>
				
			</tr>

		</table>

	</div>

<?php

	include('includes/footer.php');
?>
