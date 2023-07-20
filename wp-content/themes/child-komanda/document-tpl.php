<?php 

/* Template Name: Example Template */

get_header(); ?>
   <div id="root">
         <div class="app-container">
            <div class="cards-container">
			
			
				<br>

				<button class="convertToPDF">Convert to PDF</button>


				<br><br><br>

			
				<div class="card-container">
                  <div class="centered-col">
                     <div class="avatar-circular"><img alt="avatar" src="data:image/jpeg;base64,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" class="MuiAvatar-img muirtl-1hy9t21"></div>
                  </div>
				  
				  
					<form id="regForm" action="">

	
					<!-- One "tab" for each step in the form: -->
						<div class="tab card-1">
						
							<h2>אני אלווה אותך בבניית החוזה.<br/>
							מה כתובת הנכס המושכר?</h2>
								
					
							  
							  
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
							
							
							
							
							
							
						</div>
					

						<div class="tab card-2">
						
							<h2>אחלה מיקום,<br/>
							ומה תקופת השכירות?</h2>
						
						
							<p class="inner">תאריך כניסה <input id="m6" type="date" class="inputDate first-date" value=""></p>
							<p class="inner">תאריך יציאה <input id="m7" type="date" class="inputDate second-date" value=""></p>
						
							<br/>
							
							<div class="flex-row"> 
								<p class="q-switch">הארכת חוזה?</p> <span>לא</span><span class="switch-btn item3"></span><span>כן</span>
								<input class="private-switch hidden" id="card2Input3" type="checkbox">
							</div>
							
						</div>

						<div class="tab card-3">
						
							<h2>נשמע טוב, אז כמה עולה התענוג?</h2>
						
							<div class="flex-row"> 
								<div class="cool-input">
									<input id="m9" type="text" class="cool-input__input"/>
									<span class="cool-input__placeholder">הכנס סכום שכירות כולל</span><span>₪</span>
								</div>
							</div>
							
							
							<div class="flex-row limited"> 
								<div class="cool-input">

									<select name="" id="m10" class="cool-input__input" >
									  <!--option class="empty" value="0"></option-->
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									</select>
									<svg class="select-triangle" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon"><path d="M7 10l5 5 5-5z"></path></svg>							
									<span class="cool-input__placeholder">מספר שוכרים</span>
								</div>
								
								<div class="cool-input">
								
									<select name="" id="m11" class="cool-input__input">
									  <!--option class="empty" value="0"></option-->
									  <option value="2">2 לחודש</option>
									  <option value="10">10 לחודש</option>
									  <option value="15">15 לחודש</option>
									</select>
									<svg class="select-triangle" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon"><path d="M7 10l5 5 5-5z"></path></svg>							
									<span class="cool-input__placeholder">תאריך לחיוב</span>

								</div>
									
							</div>

							<div class="includeContainer">
							</div>
							
							<br/>
							
							<div class="flex-row toggler has-includes"> 
								<p class="q-switch">תשלומים נוספים כלולים בשכ"ד?</p> <span>לא</span><span class="switch-btn item43"></span><span>כן</span>
								<input class="private-switch hidden" id="card3Input4" type="checkbox">
							</div>
							
							
							<div class="flex-row includes invisible"> 
					
								
								<div class="checkboxes">
															
									<input type="checkbox" class="custom-checkbox" id="ארנונה" name="ארנונה" value="yes">
									<label for="ארנונה">ארנונה</label>
									
									<input type="checkbox" class="custom-checkbox" id="גז" name="גז" value="yes">
									<label for="גז">גז</label>
									
									<input type="checkbox" class="custom-checkbox" id="חשמלv" name="חשמלv" value="yes">
									<label for="חשמלv">חשמלv</label>
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
						
							<h2>ביטחונות מעבר לתשלום שכ"ד</h2>

							<div class="flex-row toggler v2"> 
								<p class="q-switch">צ'ק ביטחון</p> <span>לא</span><span class="switch-btn item92"></span><span>כן</span>
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
								<p class="q-switch">ערבות בנקאית</p> <span>לא</span><span class="switch-btn item9"></span><span>כן</span>
								<input class="private-switch hidden" id="card4Input2" type="checkbox">
							</div>
							
							<div class="flex-row include"> 
								<div class="cool-input">
									<input id="m12" type="text" class="cool-input__input"/>
									<span class="cool-input__placeholder">על סך</span><span>₪</span>
								</div>
							</div>
							
							<div class="flex-row toggler v2"> 
								<p class="q-switch">פיקדון</p> <span>לא</span><span class="switch-btn item10"></span><span>כן</span>
								<input class="private-switch hidden" id="card4Input3" type="checkbox">
							</div>
							
							<div class="flex-row include"> 
								<div class="cool-input">
									<input id="m13" type="text" class="cool-input__input"/>
									<span class="cool-input__placeholder">על סך</span><span>₪</span>
								</div>
							</div>
							
							
							<div class="flex-row toggler v2"> 
								<p class="q-switch">שטר חוב</p> <span>לא</span><span class="switch-btn item11"></span><span>כן</span>
								<input class="private-switch hidden" id="card4Input4" type="checkbox">
							</div>
							
							<div class="flex-row include"> 
								<div class="cool-input">
									<input id="m14" type="text" class="cool-input__input"/>
									<span class="cool-input__placeholder">על סך</span><span>₪</span>
								</div>
							</div>
							
							
							<div class="flex-row toggler v2"> 
								<p class="q-switch">צ'ק בנקאי</p> <span>לא</span><span class="switch-btn item12"></span><span>כן</span>
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
						
							<h2>הסוד הוא בפרטים הקטנים.<br/>
							איזו תכולה נשארת בדירה שלך ואיזו ליקויים קיימים בה?</h2>
								
							
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
						
							<h2>אוטוטו מסיימים, אבל לא לפני שנדבר על כמה<br/>
							כללי אצבע להתנהלות בנכס שלך</h2>

							
							<br/>
							
							<div class="flex-row toggler v2 full-width"> 
								<p class="q-switch">ניתן להחזיק חיות מחמד בדירה?</p> <span>לא</span><span class="switch-btn item64"></span><span>כן</span>
								<input class="private-switch hidden" id="card4Input2" type="checkbox">
							</div>
							
							
							<div class="flex-row toggler v2 full-width"> 
								<p class="q-switch">צביעת הדירה בסיום החוזה?</p> <span>לא</span><span class="switch-btn item65"></span><span>כן</span>
								<input class="private-switch hidden" id="card4Input3" type="checkbox">
							</div>
							
							
							<div class="flex-row toggler v2 full-width"> 
								<p class="q-switch">החרגת חניה מהחוזה?</p> <span>לא</span><span class="switch-btn item66"></span><span>כן</span>
								<input class="private-switch hidden" id="card4Input4" type="checkbox">
							</div>
							
							
							<div class="flex-row toggler v2 full-width"> 
								<p class="q-switch">החרגת מחסן מהחוזה?</p> <span>לא</span><span class="switch-btn item67"></span><span>כן</span>
								<input class="private-switch hidden" id="card4Input5" type="checkbox">
							</div>
							

						</div>
					
						<div class="tab card-7">
						
							<h2>יופי, רוצה להתייחס לאחת מהאפשרויות הבאות?</h2>

							
							<br/>
							
							<div class="flex-row toggler v2 full-width has-includes"> 
								<p class="q-switch">הבניין מיועד לתמ"א 38?</p> <span>לא</span><span class="switch-btn item9"></span><span>כן</span>
								<input class="private-switch hidden" id="card4Input2" type="checkbox">
							</div>
							
							<div class="flex-row toggler v2 full-width include invisible"> 
								<p class="q-switch">שכ"ד מופחת בזמן העבודות?</p> <span>לא</span><span class="switch-btn item9"></span><span>כן</span>
								<input class="private-switch hidden" id="card4Input2" type="checkbox">
							</div>
							
							
							<div class="flex-row toggler v2 full-width"> 
								<p class="q-switch">התחייבות בחוזה לעריכת ביטוחים</p> <span>לא</span><span class="switch-btn item10"></span><span>כן</span>
								<input class="private-switch hidden" id="card4Input3" type="checkbox">
							</div>
							
							
							<div class="flex-row toggler v2 full-width"> 
								<p class="q-switch">רוצה להוסיף משהו בטקסט חופשי?</p> <span>לא</span><span class="switch-btn item11"></span><span>כן</span>
								<input class="private-switch hidden" id="card4Input4" type="checkbox">
							</div>
							

						</div>
					
						<div class="tab card-8">
						
							<h2>שלב ראשון - הזנת פרטים</h2>
							
							<div class="flex-row full-width tight"> 
								<div class="cool-input">
									<input id="m19" type="text" class="cool-input__input"/>
									<span class="cool-input__placeholder">דברים שנשארים בדירה</span>
								</div>	
							</div>
							
							<div class="flex-row full-width tight"> 
								<div class="cool-input">
									<input id="m20" type="text" class="cool-input__input"/>
									<span class="cool-input__placeholder">ליקויים לתיקון תוך 14 יום</span>
								</div>	
							</div>
							
							<div class="flex-row full-width tight"> 
								<div class="cool-input">
									<input id="m21" type="number" class="cool-input__input"/>
									<span class="cool-input__placeholder">ליקויים קבועים בדירה</span>
								</div>	
							</div>
							
							<div class="flex-row full-width tight"> 
								<div class="cool-input">
									<input id="m22" type="number" class="cool-input__input"/>
									<span class="cool-input__placeholder">ליקויים קבועים בדירה</span>
								</div>	
							</div>
							
							
						</div>
					
						<div class="tab card-9">
						
							<h2>פרטי הדיירים הנכנסים</h2>
							
							<div class="flex-row full-width tight"> 
								<div class="cool-input">
									<input id="m23" type="text" class="cool-input__input"/>
									<span class="cool-input__placeholder">שם השוכר.ת</span>
								</div>	
							</div>
							
							<div class="flex-row full-width tight"> 
								<div class="cool-input">
									<input id="m24" type="text" class="cool-input__input"/>
									<span class="cool-input__placeholder">מייל השוכר.ת</span>
								</div>	
							</div>
							
							<div class="flex-row full-width tight"> 
								<div class="cool-input">
									<input id="m25" type="number" class="cool-input__input"/>
									<span class="cool-input__placeholder">תעודת זהות השוכר.ת</span>
								</div>	
							</div>
							
							<div class="flex-row full-width tight"> 
								<div class="cool-input">
									<input id="m26" type="number" class="cool-input__input"/>
									<span class="cool-input__placeholder">טלפון השוכר.ת</span>
								</div>	
							</div>
							
							
						</div>
					
						<div class="tab card-10">
						
							<h2>מסך אחרון - צריך להחליף טקסט</h2>
							
							
						</div>
					
					

						<div style="overflow:auto;">
						  <div class="flex-center">
							<button type="button" id="prevBtn">חזור</button>
							<button type="button" id="nextBtn">הבא</button>
						  </div>
						</div>



						<!-- Circles which indicates the steps of the form: -->
						<div style="display:none;">
						  <span class="step"></span>
						  <span class="step"></span>
						  <span class="step"></span>
						  <span class="step"></span>
						  <span class="step"></span>
						  <span class="step"></span>
						  <span class="step"></span>
						  <span class="step"></span>
						  <span class="step"></span>
						  <span class="step"></span>
						</div>


				</form>				  
				  
				  


				  
               </div>


            </div>
            
			<?= get_field('document_text'); ?>

         </div>
      </div>
	  
	
	
<!----------------------------------------->
<script>
var uri = '<?php echo get_stylesheet_directory_uri(); ?>';
</script>

<?php get_footer(); ?>

