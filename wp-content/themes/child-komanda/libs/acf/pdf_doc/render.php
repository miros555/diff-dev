<?php
/**
 * Product section Block Template.
 */
?>
      <div id="root">
         <div class="app-container">
            <div class="cards-container">
				<br>
               <div class="card-container">
                  <div class="centered-col">
                     <div class="avatar-circular"><img alt="avatar" src="<?= get_field("avatar") ?>"></div>
                  </div>
				  
					<?php
						$cards = get_field("cards");
						array_unshift($cards, "titles");
					?>	
					
					<form id="regForm" class="form-cards" action="">
						<div class="tab card-1">
						
							<h2><?php echo $cards[1]["title"]; ?></h2>
								
							<div class="flex-row"> 
								<div class="cool-input">
									<input id="m1" class="cool-input__input"/>
									<span class="cool-input__placeholder">עיר</span>
								</div>
								<div class="cool-input">
									<input id="m2" class="cool-input__input"/>
									<span class="cool-input__placeholder">רחוב</span>
								</div>
							</div>
							
							<div class="flex-row"> 
								<div class="cool-input">
									<input id="m3" class="cool-input__input"/>
									<span class="cool-input__placeholder">בית</span>
								</div>
								<div class="cool-input">
									<input id="m4" type="number" class="cool-input__input"/>
									<span class="cool-input__placeholder">דירה</span>
								</div>
								
							</div>
							
							<div class="flex-row"> 
								<div class="cool-input  prev">
									<input id="m5" type="number" class="cool-input__input"/>
									<span class="cool-input__placeholder">חדרים</span>
								</div>
							</div>
							
							<br/>
							
							<div class="swith-row"> 
								<p class="q-switch">למלא את פרטי המשכירים והשוכרים עכשיו או בסוף?</p> 
								<div>
									<span>עכשיו</span><span class="switch-btn item139"></span><span>בסוף</span>
									<input class="private-switch hidden" id="card1Input3" type="checkbox">
								</div>
							</div>
							
						</div>

						<div class="now_var">
						
						</div>					

						<div class="tab card-2">
						
							<h2><?php echo $cards[2]["title"]; ?></h2>
						
							<input hidden class="count_months" value="<?php echo get_field("count_months"); ?>" >

							<p class="inner">תאריך כניסה 	
								<span class="input-group-text datepicker-toggle"><i class="fas fa-calendar-alt"></i></span>
								<input id="m6" type="text" class="inputDate first-date v2" placeholder="dd/mm/yyyy" >  
							</p>
							<p class="inner">תאריך יציאה 	
								<span class="input-group-text datepicker-toggle"><i class="fas fa-calendar-alt"></i></span>
								<input id="m7" type="text" class="inputDate second-date v2" placeholder="dd/mm/yyyy" >  
							</p>
						
							<br/>
							<div class="flex-row"> 
								<p class="q-switch">הארכת חוזה?</p> <span>כן</span><span class="switch-btn item3"></span><span>לא</span>
								<input class="private-switch hidden" id="card2Input3" type="checkbox">
							</div>
							
						</div>

						<div class="tab card-3">
						
							<h2><?php echo $cards[3]["title"]; ?></h2>
						
							<div class="flex-row"> 
								<div class="cool-input">
									<input id="m9" type="text" class="cool-input__input"/>
									<span class="cool-input__placeholder">הכנס סכום שכירות כולל</span><span>₪</span>
								</div>
							</div>
								
							<div class="flex-row limited"> 
								<div class="cool-input">

									<select name="" id="m10" class="cool-input__input" >
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									</select>
									<svg class="select-triangle" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon"><path d="M7 10l5 5 5-5z"></path></svg>							
									<span class="cool-input__placeholder">מספר שוכרים</span>
								</div>
								
								<div class="cool-input">
								
									<select name="" id="m11" class="cool-input__input">
									  <?php for ($i = 1; $i <= 30; $i++) { ?>
											<option value="<?= $i ?>"> לחודש  <?= $i ?></option> 
										<?php } ?>
										
									</select>
									<svg class="select-triangle" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon"><path d="M7 10l5 5 5-5z"></path></svg>							
									<span class="cool-input__placeholder">תאריך לחיוב</span>

								</div>
									
							</div>

							<div class="includeContainer">
							</div>
							
							<br/>
							<div class="flex-row toggler has-includes"> 
								<p class="q-switch">תשלומים נוספים כלולים בשכ"ד?</p> <span>כן</span><span class="switch-btn item43"></span><span>לא</span>
								<input class="private-switch hidden" id="card3Input4" type="checkbox">
							</div>
							
							<div class="flex-row includes invisible"> 
					
								<div class="checkboxes">
															
									<input type="checkbox" class="custom-checkbox" id="ארנונה" name="ארנונה" value="yes">
									<label for="ארנונה">ארנונה</label>
									
									<input type="checkbox" class="custom-checkbox" id="גז" name="גז" value="yes">
									<label for="גז">גז</label>
									
									<input type="checkbox" class="custom-checkbox" id="חשמלv" name="חשמלv" value="yes">
									<label for="חשמלv">חשמל</label>
									<br/>
									<input type="checkbox" class="custom-checkbox" id="אינטרנט" name="אינטרנט" value="yes">
									<label for="אינטרנט">אינטרנט</label>
									
									<input type="checkbox" class="custom-checkbox" id="מים" name="מים" value="yes">
									<label for="מים">מים</label>
									
									<input type="checkbox" class="custom-checkbox" id="חימום" name="חימום" value="yes">
									<label for="חימום">חימום</label>
									<br/>
									<input type="checkbox" class="custom-checkbox" id="checkbox2" name="checkbox2" value="yes">
									<label for="checkbox2">ועד בית ודמי ניהול</label>
									<br/>
									<input type="checkbox" class="custom-checkbox" id="checkbox3" name="checkbox3" value="yes">
									<label for="checkbox3">טלויזיה בלווין / כבלים</label>	

								</div>
								
							</div>

						</div>

						<div class="tab card-4">
						
							<h2><?php echo $cards[4]["title"]; ?></h2>

							<div class="flex-row toggler v2"> 
								<p class="q-switch">צ'ק ביטחון</p> <span>כן</span><span class="switch-btn item92"></span><span>לא</span>
								<input class="private-switch hidden" id="card4Input1" type="checkbox">
							</div>
							
							<div class="flex-row include"> 
								<div class="cool-input">
									<input id="m90" type="text" class="cool-input__input"/>
									<span class="cool-input__placeholder">על סך</span><span>₪</span>
								</div>
							</div>

							<div class="container flex-row toggler radio-btns">
								<span class="prev-label">חתום ע"י</span>
							  <div class="radio">
								<input id="radio-1" class="card4-radio" name="radio" type="radio" checked>
								<label for="radio-1" class="radio-label">שוכר</label>
							  </div>

							  <div class="radio">
								<input id="radio-2" class="card4-radio" name="radio" type="radio">
								<label  for="radio-2" class="radio-label">ערב</label>
							  </div>

							</div>
		  
							<br/>
							<div class="flex-row toggler v2"> 
								<p class="q-switch">ערבות בנקאית</p> <span>כן</span><span class="switch-btn item9"></span><span>לא</span>
								<input class="private-switch hidden" id="card4Input2" type="checkbox">
							</div>
							
							<div class="flex-row include"> 
								<div class="cool-input">
									<input id="m12" type="text" class="cool-input__input"/>
									<span class="cool-input__placeholder">על סך</span><span>₪</span>
								</div>
							</div>
							
							<div class="flex-row toggler v2"> 
								<p class="q-switch">פיקדון</p> <span>כן</span><span class="switch-btn item10"></span><span>לא</span>
								<input class="private-switch hidden" id="card4Input3" type="checkbox">
							</div>
							
							<div class="flex-row include"> 
								<div class="cool-input">
									<input id="m13" type="text" class="cool-input__input"/>
									<span class="cool-input__placeholder">על סך</span><span>₪</span>
								</div>
							</div>
							
							<div class="flex-row toggler v2"> 
								<p class="q-switch">שטר חוב</p> <span>כן</span><span class="switch-btn item11"></span><span>לא</span>
								<input class="private-switch hidden" id="card4Input4" type="checkbox">
							</div>
							
							<div class="flex-row include"> 
								<div class="cool-input">
									<input id="m14" type="text" class="cool-input__input"/>
									<span class="cool-input__placeholder">על סך</span><span>₪</span>
								</div>
							</div>
							
							<div class="flex-row toggler v2"> 
								<p class="q-switch">צ'ק בנקאי</p> <span>כן</span><span class="switch-btn item12"></span><span>לא</span>
								<input class="private-switch hidden" id="card4Input5" type="checkbox">
							</div>
							
							<div class="flex-row include"> 
								<div class="cool-input">
									<input id="m15" type="text" class="cool-input__input"/>
									<span class="cool-input__placeholder">על סך</span><span>₪</span>
								</div>
							</div>

						</div>

						<div class="tab card-5">
						
							<h2><?php echo $cards[5]["title"]; ?></h2>
								
							<div class="flex-row full-width"> 
								<div class="cool-input">
									<input id="m16" type="text" class="cool-input__input"/>
									<span class="cool-input__placeholder">דברים שנשארים בדירה</span>
								</div>
								
							</div>
							<div class="flex-row full-width"> 
								<div class="cool-input">
									<input id="m17" type="text" class="cool-input__input"/>
									<span class="cool-input__placeholder">ליקויים לתיקון תוך 14 יום</span>
								</div>
								
							</div>
							<div class="flex-row full-width"> 
								<div class="cool-input">
									<input id="m18" type="text" class="cool-input__input"/>
									<span class="cool-input__placeholder">ליקויים קבועים בדירה</span>
								</div>
								
							</div>
							
						</div>

						<div class="tab card-6">
						
							<h2><?php echo $cards[6]["title"]; ?></h2>

							<br/>
							<div class="flex-row toggler v2 full-width"> 
								<p class="q-switch">ניתן להחזיק חיות מחמד בדירה?</p> <span>כן</span><span class="switch-btn item64"></span><span>לא</span>
								<input class="private-switch hidden" id="card4Input2" type="checkbox">
							</div>
							
							<div class="flex-row toggler v2 full-width"> 
								<p class="q-switch">צביעת הדירה בסיום החוזה?</p> <span>כן</span><span class="switch-btn item65"></span><span>לא</span>
								<input class="private-switch hidden" id="card4Input3" type="checkbox">
							</div>
							
							<div class="flex-row toggler v2 full-width"> 
								<p class="q-switch">החרגת חניה מהחוזה?</p> <span>כן</span><span class="switch-btn item66"></span><span>לא</span>
								<input class="private-switch hidden" id="card4Input4" type="checkbox">
							</div>
							
							<div class="flex-row toggler v2 full-width"> 
								<p class="q-switch">החרגת מחסן מהחוזה?</p> <span>כן</span><span class="switch-btn item67"></span><span>לא</span>
								<input class="private-switch hidden" id="card4Input5" type="checkbox">
							</div>
							
						</div>
					
						<div class="tab card-7">
						
							<h2><?php echo $cards[7]["title"]; ?></h2>

							<br/>
							<div class="flex-row toggler v2 full-width has-includes"> 
								<p class="q-switch">הבניין מיועד לתמ"א 38?</p> <span>כן</span><span class="switch-btn item71"></span><span>לא</span>
								<input class="private-switch hidden" id="card4Input2" type="checkbox">
							</div>
							
							<div class="flex-row toggler v2 full-width include invisible"> 
								<p class="q-switch">שכ"ד מופחת בזמן העבודות?</p> <span>כן</span><span class="switch-btn item72"></span><span>לא</span>
								<input class="private-switch hidden" id="card4Input2" type="checkbox">
							</div>
							
							<div class="flex-row include"> 
								<div class="cool-input" style="width:100%;max-width: 320px;">
									<input id="m72" type="text" class="cool-input__input"/ style="max-width:95%;">
									<span class="cool-input__placeholder">הכנס סכום שכר דירה מופחת</span><span>₪</span>
								</div>
							</div>
							
							<div class="flex-row toggler v2 full-width"> 
								<p class="q-switch">התחייבות בחוזה לעריכת ביטוחים</p> <span>כן</span><span class="switch-btn item102"></span><span>לא</span>
								<input class="private-switch hidden" id="card4Input3" type="checkbox">
							</div>
							
							<div class="flex-row toggler v2 full-width"> 
								<p class="q-switch">רוצה להוסיף משהו בטקסט חופשי?</p> <span>כן</span><span class="switch-btn item113"></span><span>לא</span>
								<input class="private-switch hidden" id="card4Input4" type="checkbox">
							</div>
							<div class="flex-row include"> 
								<div class="cool-input" style="width:100%;max-width: 320px;">
									<input id="m113" type="text" class="cool-input__input"/ style="max-width:100%;">
									<span class="cool-input__placeholder">לדוגמא: אסור לשוכרים לקדוח בקרמיקה</span>
								</div>
							</div>
							
						</div>

						<div class="end_var">

							<div class="tab card-8">
							
								<h2><?php echo $cards[8]["title"]; ?></h2>
								
								<div class="flex-row full-width tight"> 
									<div class="cool-input">
										<input id="m19" type="text" maxlength="25" class="cool-input__input"/>
										<span class="cool-input__placeholder">שם בעל הנכס</span>
									</div>	
								</div>
								
								<div class="flex-row full-width tight"> 
									<div class="cool-input">
										<input id="m20" type="text" maxlength="25" class="cool-input__input"/>
										<span class="cool-input__placeholder">מייל בעל הנכס</span>
									</div>	
								</div>
								
								<div class="flex-row full-width tight"> 
									<div class="cool-input">
										<input id="m21" type="number" max="999999999" class="cool-input__input id_number"/>
										<span class="cool-input__placeholder">תעודת זהות בעל הנכס</span>
									</div>	
								</div>
								
								<div class="flex-row full-width tight"> 
									<div class="cool-input">
										<input id="m22" type="number" max="999999999" class="cool-input__input"/>
										<span class="cool-input__placeholder">טלפון בעל הנכס</span>
									</div>	
								</div>
									
							</div>
						
							<div class="tab card-9">
							
								<h2><?php echo $cards[9]["title"]; ?></h2>
								
								<div class="flex-row full-width tight"> 
									<div class="cool-input">
										<input id="m23" type="text" maxlength="20" class="cool-input__input"/>
										<span class="cool-input__placeholder">שם השוכר.ת</span>
									</div>	
								</div>
								
								<div class="flex-row full-width tight"> 
									<div class="cool-input">
										<input id="m24" type="text" maxlength="20" class="cool-input__input"/>
										<span class="cool-input__placeholder">מייל השוכר.ת</span>
									</div>	
								</div>
								
								<div class="flex-row full-width tight"> 
									<div class="cool-input">
										<input id="m25" type="number" max="999999999" class="cool-input__input id_number"/>
										<span class="cool-input__placeholder">תעודת זהות השוכר.ת</span>
									</div>	
								</div>
								
								<div class="flex-row full-width tight"> 
									<div class="cool-input">
										<input id="m26" type="number" max="999999999" class="cool-input__input"/>
										<span class="cool-input__placeholder">טלפון השוכר.ת</span>
									</div>	
								</div>
									
							</div>
													
						</div>
					
						<div class="tab card-9-1">
														
							<h2 dir="rtl"><?php echo $cards[11]["title"] ?? "?כמה חודשים להאריך את החוזה"; ?></h2>
							
							<div class="flex-row full-width tight"> 
								<div class="cool-input">
									<input id="m36" data-default="<?= date("Y-m-d") ?>" type="number" max="999999999" class="cool-input__input"/>
									<span class="cool-input__placeholder"></span>
								</div>	
							</div>
								
						</div>
					
						<div class="tab card-10">
						
							<h2><?php echo $cards[10]["title"]; ?></h2>
							
							<button type="button" id="exportDoc" class="exportDoc">>להורדת DOC</button>
							<button type="button" id="exportPdf" class="convertToPDF">להורדת PDF</button>
							
						</div>
					
						<div style="overflow:auto;">
						  <div class="flex-center">
							<button type="button" id="prevBtn">חזור</button>
							<button type="button" id="nextBtn">הבא</button>
						  </div>
						</div>


						<div id="Modal" class="modal">
							<div class="modal-content">
							  <span class="close">&times;</span>
							  <h2>נא להזין מספר תעודת זהות תקין!</h2>
							</div>
						</div>
												
				</form>				  
				 
               </div>
            </div>

			<?= get_field("document_text") ?>

         </div>
      </div>
	  
<?php echo do_shortcode('[contact-form-7 id="90" title="Contact form 1_Main"]'); ?>	
<script>
	var uri = '<?php echo get_stylesheet_directory_uri(); ?>';
</script>

