jQuery(document).ready(function($) {

	var fill_now = false;
	var end_var = $('.end_var').html();

	$('select').each(function() {
		var $this = $(this),
			numberOfOptions = $(this).children('option').length;

		$this.addClass('select-hidden');
		$this.wrap('<div class="select"></div>');
		$this.after('<div class="select-styled"></div>');

		var $styledSelect = $this.next('div.select-styled');
		//$styledSelect.text($this.children('option').eq(0).text());

		var $list = $('<ul />', {
			'class': 'select-options'
		}).insertAfter($styledSelect);

		for (var i = 0; i < numberOfOptions; i++) {
			$('<li />', {
				text: $this.children('option').eq(i).text(),
				rel: $this.children('option').eq(i).val()
			}).appendTo($list);
		}

		var $listItems = $list.children('li');

		$styledSelect.click(function(e) {
			e.stopPropagation();
			$('div.select-styled.active').not(this).each(function() {
				$(this).removeClass('active').next('ul.select-options').hide();
			});
			$(this).toggleClass('active').next('ul.select-options').toggle();
			$(this).parent().addClass('active');

			$(this).parent().parent().toggleClass('active');

		});

		$listItems.click(function(e) {
			e.stopPropagation();
			$styledSelect.text($(this).text()).removeClass('active');
			$this.val($(this).attr('rel'));
			$list.hide();
		});

		$(document).click(function() {
			$styledSelect.removeClass('active');
			$list.hide();
		});

	});

	$('.select-options li').click(function() {
		var _val = $(this).text().slice(0, 2).toLowerCase();
		console.log(_val);
		let _select = $(this).parents('.select');
		_select.find("select option").removeAttr('selected');
		_select.find("select option[value=" + _val + "]").attr('selected', 'true');
		let _id = _select.find("select").attr('id');
		console.log(_id);
		$('mark.' + _id).text(_val);
		if (_id == 'm10') {
			scroll_to('#item2');
			if (_val == '1') {
				$('.card3select10.v1').removeClass('invisible');
				$('.card3select10.v2').addClass('invisible');
				$('.card3select10.v3').addClass('invisible');
			}
			if (_val == '2') {
				$('.card3select10.v2').removeClass('invisible');
				$('.card3select10.v1').addClass('invisible');
				$('.card3select10.v3').addClass('invisible');
			}
			if (_val == '3') {
				$('.card3select10.v3').removeClass('invisible');
				$('.card3select10.v1').addClass('invisible');
				$('.card3select10.v2').addClass('invisible');
			}
		}
		if (_id == 'm11') {
			scroll_to('#item2');

		}


	});

	function validateIsraeliPassportNumber(passportNumber) {
		passportNumber = passportNumber.replace(/[\s-]/g, '');
		if (passportNumber.length < 5 || passportNumber.length > 9) {
			return false;
		}
		var sum = 0;
		var shouldDouble = false;
		for (var i = passportNumber.length - 1; i >= 0; i--) {
			var digit = parseInt(passportNumber.charAt(i), 10);
			if (shouldDouble) {
				digit *= 2;
				if (digit > 9) {
					digit -= 9;
				}
			}
			sum += digit;
			shouldDouble = !shouldDouble;
		}
		return sum % 10 === 0;
	}


	function updateSecondDate(firstDateValue, c) {




		var firstDateValArr = firstDateValue.split('/');
		console.log(firstDateValArr);
		var firstDateVal = firstDateValArr[2] + ',' + firstDateValArr[0] + ',' + firstDateValArr[1];
		console.log(firstDateVal);


		var firstDate = new Date(firstDateVal);
		var secondDate = new Date(firstDate.getFullYear(), firstDate.getMonth() + c, firstDate.getDate()); //+1
		return formattedSecondDate = secondDate.toISOString().slice(0, 10);
	}

	function scroll_to(selector) {
		document.querySelector(selector).scrollIntoView({
			behavior: 'smooth'
		});
	}


	$('.has-includes').click(function() {
		$(this).next().toggleClass('invisible');
	});


	$('.switch-btn.item3').click(function() {
		scroll_to('#item3');
		$('p.item3').toggleClass('invisible');
	});

	$('.switch-btn.item43').click(function() {
		scroll_to('#item43');
	});

	$('.switch-btn.item92').click(function() {
		scroll_to('#point_card4');
		$('p.item92').toggleClass('invisible');
	});


	$('.switch-btn.item139').click(function() {
		if (!fill_now) {
			$('.now_var').html(end_var);
			$('.end_var').html('');
			scroll_to('#finish');
		} else {
			$('.end_var').html(end_var);
			$('.now_var').html('');
			scroll_to('#item0');
		}

		fill_now = !fill_now ? true : false;
		//$('mark.m19,mark.m20,mark.m21,mark.m22,mark.m23,mark.m24,mark.m25mark.m26').val('').trigger('change');;
		changeOnInput();
	});

	var start_str44 = $('.item44').text();

	$('.card-3 .checkboxes input[type="checkbox"]').change(function() {
		scroll_to('#item43');
		if ($('.checkboxes input[type="checkbox"]').is(':checked')) {
			$('.item44').removeClass('invisible');
		} else {
			$('.item44').addClass('invisible');
		}
		var arr = [];
		$('.checkboxes input[type="checkbox"]:checked').each(function() {
			arr.push($(this).next().text());
		});
		let arr2 = [...new Set(arr.flat(1))];
		var add_str = arr2.join(', ');
		add_str = "<mark class='new'>" + add_str + "</mark>";
		$('.item44').html(start_str44 + ' ' + add_str);

	});


	$('.card4-radio').change(function() {
		$('.m92').text($(this).next('label').text());
	});

	$('#m9').click(function() {
		scroll_to('#item2');
	});


	$('.switch-btn.item9').click(function() {
		scroll_to('#item9');
		$('p.item9').toggleClass('invisible');
	});

	$('.switch-btn.item10').click(function() {
		scroll_to('#item9');
		$('p.item10').toggleClass('invisible');
	});

	$('.switch-btn.item11').click(function() {
		scroll_to('#item9');
		$('p.item11').toggleClass('invisible');
	});

	$('.switch-btn.item12').click(function() {
		scroll_to('#item9');
		$('p.item12').toggleClass('invisible');
	});

	$('.switch-btn.item64').click(function() {
		$('p.item64.v1, p.item64.v2').toggleClass('invisible');
	});

	$('.switch-btn.item65').click(function() {
		scroll_to('#point_8');
		$('p.item65').toggleClass('invisible');
	});

	$('.switch-btn.item66').click(function() {
		scroll_to('#point_card6');
		$('p.item66').toggleClass('invisible');
	});

	$('.switch-btn.item67').click(function() {
		scroll_to('#point_card6');
		$('p.item67').toggleClass('invisible');
	});

	$('.switch-btn.item71').click(function() {
		scroll_to('#point_card6');
		$('p.item71').toggleClass('invisible');
	});
	$('.switch-btn.item72').click(function() {
		scroll_to('#point_card6');
		$('p.item72').toggleClass('invisible');
	});

	$('.switch-btn.item102').click(function() {
		scroll_to('#point_card4');
		$('p.item102').toggleClass('invisible');
	});
	$('.switch-btn.item113').click(function() {
		scroll_to('#point_11');
		//$('p.item102').toggleClass('invisible');
	});


	/**********************************************/

	function changeOnInput() {
		$('input').keyup(function() {
			let _that = $(this);
			let _val = $(this).val();
			if (_val && !$(this).hasClass('filled')) {
				$(this).addClass('filled');
			}
			if (!_val && $(this).hasClass('filled')) {
				$(this).removeClass('filled');
			}
			let _id = $(this).attr('id') ? $(this).attr('id') : $(this).data('marked');

			console.log(_id);
			if (_id == 'm9' || _id == 'm12' || _id == 'm13' || _id == 'm14' || _id == 'm15') {
				_val = groupNumbers(_val);
			}

			$('mark.' + _id).text(_val);
			$('.wpcf7-text.' + _id).val(_val);

			if (_id == 'm1' || _id == 'm2') {
				scroll_to('#exportContent');
			}

			if (_id == 'm9') {
				scroll_to('#item2');
			}

			if (_id == 'm16') {
				scroll_to('#item52');
				if (_val) {
					$('p.item55').removeClass('invisible');
				} else {
					$('p.item55').addClass('invisible');
				}
			}
			if (_id == 'm17') {
				scroll_to('#item52');
				if (_val) {
					$('p.item53').removeClass('invisible');
				} else {
					$('p.item53').addClass('invisible');
				}
			}

			if (_id == 'm18') {
				scroll_to('#item52');
				if (_val) {
					$('.item54').removeClass('invisible')
				} else {
					$('.item54').addClass('invisible');
				}
			}

			if (_id == 'm113') {
				scroll_to('#point_11');
				if (_val) {
					$('p.item113').removeClass('invisible');
				} else {
					$('p.item113').addClass('invisible');
				}
			}

			if (_id == 'm36') {
				scroll_to('#item1');
				if (_val) {

					if ($('.first-date').val()) {
						var first_val = $('.first-date').val();
					} else {
						var first_val = $('#m36').data('default');
						$('.first-date').val(first_val).trigger('change');
					}
					var count_months = Number(_val);
					var second_date = updateSecondDate(first_val, count_months);

					let arr_second_date = second_date.split('-');
					second_date = arr_second_date[1] + '/' + arr_second_date[2] + '/' + arr_second_date[0];

					$('.second-date').val(second_date).trigger('change');
					let arr_third_date = updateSecondDate(second_date, count_months).split('-');
					let third_date = arr_third_date[2] + '/' + arr_third_date[1] + '/' + arr_third_date[0];
					$('mark.third-date').text(third_date);
				}

			}

		});
	}

	changeOnInput();

	$('.inputDate').datepicker({
		dateFormat: 'dd/mm/yy',
		format: 'dd/mm/yyyy',
		autoclose: true

	});


	$('.datepicker-toggle').click(function() {
		$(this).next().datepicker('show');
	});


	function formatDate(dateString) {
		var date = new Date(dateString);
		var day = date.getDate();
		var month = date.getMonth() + 1;
		var year = date.getFullYear();
		if (day < 10) {
			day = "0" + day;
		}
		if (month < 10) {
			month = "0" + month;
		}
		return day + "/" + month + "/" + year;
	}


	$('.inputDate').change(function() {
		scroll_to('#item1');
		let _id = $(this).attr('id');

		let arr_date = $(this).val().split('-');
		let _date = $(this).val();

		$(this).next().text(_date);


		$('mark.' + _id).text(_date);

		if ($(this).hasClass('first-date')) {
			var first_val = $(this).val();
			console.log(first_val);
			var count_months = Number($('.count_months').val());

			first_val = $(this).datepicker('getDate');
			var second_date = new Date(first_val.getFullYear(), first_val.getMonth() + count_months, first_val.getDate() - 1);
			$('.second-date').datepicker('setDate', second_date).trigger('change');

			let third_date = new Date(second_date.getFullYear(), second_date.getMonth() + count_months, second_date.getDate() - 1);


			$('mark.third-date').text(formatDate(third_date));
		}
	});


	$('.toggler.v2 .switch-btn').click(function() {
		$(this).parent().next().toggleClass('active');
	});

	$('.switch-btn').click(function() {
		$(this).toggleClass('switch-on');
		var private_switch = $(this).parent().find('.private-switch');
		console.log(private_switch.val());
		if ($(this).hasClass('switch-on')) {
			private_switch.attr("checked", true);
		} else {
			private_switch.attr("checked", false);
		}
		console.log(private_switch.val());
	});




	$('#prevBtn').click(function() {
		nextPrev(-1);
	});
	$('#nextBtn').click(function() {
		if (!$(this).hasClass('convertToPDF')) {

			/**********ID validation**********/
			if ($('.tab.active .id_number').val()) {

				var passportNumber = $('.tab.active .id_number').val();
				var isValid = validateIsraeliPassportNumber(passportNumber);
				var txt = isValid ? 'Валидный номер паспорта' : 'נא להזין מספר תעודת זהות תקין!';
				console.log(txt);
				if (!isValid) {
					$("#Modal").addClass("active");
					return;
				}
			}
			/********************/

			nextPrev(1);
		} else {
			convertToPDF();
		}

	});


	var currentTab = 0; // Current tab is set to be the first tab (0)
	showTab(currentTab); // Display the current tab

	function showTab(n) {
		//var fill_now = $('#regForm').hasClass('fill_now')?true:false;	


		console.log(n);
		// This function will display the specified tab of the form ...
		var x = document.getElementsByClassName("tab");
		x[n].style.display = "block";

		//x.classList.remove("active");
		x[n].classList.add("active");

		// ... and fix the Previous/Next buttons:

		if (n == 0) {
			scroll_to('#exportContent')
		}

		if (n == 1) {
			!fill_now ? scroll_to('#item0') : scroll_to('#finish');
		}

		if (n == 2) {
			if (fill_now) {
				scroll_to('#finish');
			} else {
				scroll_to('#item2');
			}
		}

		if (n == 3) {
			!fill_now ? scroll_to('#point_card4') : scroll_to('#item1');
		}

		if (n == 4) {
			!fill_now ? scroll_to('#point_card5') : scroll_to('#item2');
		}

		if (n == 5) {
			if (!fill_now) {
				scroll_to('#point_card6');
			}
		}

		if (n == 6) {
			if (fill_now) {
				scroll_to('#point_card5');
			}
		}

		if (n == 7 || n == 8) {
			if (!fill_now) {
				scroll_to('#finish');
			} else {
				scroll_to('#point_card6');
			}
		}

		if (n == 0) {
			document.getElementById("prevBtn").classList.remove("active");
		} else {
			document.getElementById("prevBtn").classList.add("active");
		}
		if (n == (x.length - 1)) {
			document.getElementById("nextBtn").innerHTML = "להורדת PDF";
			$('#nextBtn').hide();
			$('#prevBtn').addClass('finish');
		} else {
			document.getElementById("nextBtn").innerHTML = "הבא"; //Next
			$('#nextBtn').show();
			$('#prevBtn').removeClass('finish');
		}

	}

	function nextPrev(n) {
		// This function will figure out which tab to display
		var x = document.getElementsByClassName("tab");
		// Exit the function if any field in the current tab is invalid:
		if (n == 1 && !validateForm()) return false;
		// Hide the current tab:
		x[currentTab].style.display = "none";

		x[currentTab].classList.remove("active");
		// Increase or decrease the current tab by 1:
		currentTab = currentTab + n;
		// if you have reached the end of the form... :
		if (currentTab >= x.length) {
			//...the form gets submitted:
			document.getElementById("regForm").submit();
			return false;
		}
		// Otherwise, display the correct tab:
		showTab(currentTab);
	}

	function validateForm() {
		// This function deals with validation of the form fields
		var x, y, i, valid = true;
		x = document.getElementsByClassName("tab");
		y = x[currentTab].getElementsByTagName("input");
		// A loop that checks every input field in the current tab:
		for (i = 0; i < y.length; i++) {
			// If a field is empty...
			if (y[i].value == "") {
				valid = true;
			}
		}
		// If the valid status is true, mark the step as finished and valid:
		return valid; // return the valid status
	}

	/*************************************************************************/

	function groupNumbers(number) {
		if (Number.isInteger(Number(number))) {
			var str = number.toString();
			var result = '';

			while (str.length > 3) {
				result = ',' + str.slice(-3) + result;
				str = str.slice(0, -3);
			}

			result = str + result;
			return result;
		} else {
			return number;
		}
	}

	function swapBrackets(str) {
		const replaced = str.replace(/[()]/g, match => {
			if (match === '(') {
				return ')';
			} else if (match === ')') {
				return '(';
			}
		});

		return replaced;
	}


	function reverse_text() {
		$('.display-container .invisible').remove();
		$('.display-container p').each(function() {
			$(this).text($(this).text().split(" ").reverse().join(" "));
		});
	}


	$('.convertToPDF').click(function() {
		$('.wpcf7-submit').trigger('click');
		convertToPDF();
	});



	function convertToPDF() {
		var exportContent = $('#exportContent').html();

		$('mark').replaceWith(function() {
			return $("<span />", {
				html: $(this).html()
			});
		});
		$('p, span').css({
			fontSize: 17
		});

		var element = document.querySelector('.display-container').innerHTML; //document.body;  

		element = swapBrackets(element);

		// Set the options for the PDF conversion
		const options = {
			margin: [10, 5, 12, 5],
			filename: 'הסכם-שכירות.pdf',
		};

		// Call the html2pdf library to generate the PDF
		html2pdf().set(options).from(element).save();

		$('p, span').css({
			fontSize: 14
		});
		//$('.pdf-wrapper').css({padding: 0});
		setTimeout(function() {
			//location.reload(true);
			$('#exportContent').html(exportContent);
		}, 3000);


	}


	/********************************************/

	const input = $('.inputDate');
	input.oninput = e => {
		e.target.value = '';
	}

	$('.exportDoc').click(function() {
		exportHtmltoDoc();
	});

	function exportHtmltoDoc() {
		var exportContent = $('#exportContent').html();
		$('.wpcf7-submit').trigger('click');
		$('#exportContent .invisible').remove();

		$('#exportContent p').not('.center').each(function() {
			$(this).attr('dir', 'rtl');
			$(this).css('text-align', 'right');
			$(this).css('margin-right', '20px');
			$(this).css('margin-left', '20px');
		});
		var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' " +
			"xmlns:w='urn:schemas-microsoft-com:office:word' " +
			"xmlns='http://www.w3.org/TR/REC-html40'>" +
			"<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
		var footer = "</body></html>";

		var sourceHTML = header + document.getElementById("exportContent").innerHTML + footer;

		var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
		var fileDownload = document.createElement("a");
		document.body.appendChild(fileDownload);
		fileDownload.href = source;
		fileDownload.download = 'הסכם-שכירות.doc';
		fileDownload.click();
		document.body.removeChild(fileDownload);

		setTimeout(function() {
			$('#exportContent').html(exportContent);
		}, 3000);

	}


	$('#m1').autocomplete({
		source: cities,
		minLength: 0
	});

	$('#m1').on('focus', function() {
		$(this).val('');
		$('#m2').val('');
		add_mark('m1', '');
		add_mark('m2', '');
		if ($(this).val().length === 0) {
			$(this).autocomplete('search');
		}
	});

	$(".close").click(function() {
		$("#Modal").toggleClass("active");
	});

	$(window).click(function(event) {
		if (event.target == $("#Modal")[0]) {
			$("#Modal").toggleClass("active");
		}
	});


	function add_mark(id, val) {
		$('mark.' + id).text(val);
	}

	$('#m1').on('autocompleteselect', function(event, ui) {

		var selectedValue = ui.item.value;

		$(this).addClass('filled');
		let _id = $(this).attr('id');
		add_mark(_id, selectedValue);

		var city = ui.item.value;

		var data = {
			resource_id: '9ad3862c-8391-4b2f-84a4-2d4c68625f4b',
			q: city,
		};
		$.ajax({
			url: 'https://data.gov.il/api/3/action/datastore_search',
			data: data,
			type: 'GET',
			success: function(data) {
				console.log(data.result);

				const uniqueValues = [...new Set(data.result.records.map(item => item.שם_רחוב))];

				$('#m2').autocomplete({
					source: uniqueValues,
					minLength: 0
				});


				$('#m2').on('focus', function() {

					if ($(this).val().length === 0) {
						$(this).autocomplete('search');
					}
				});

				$('#m2').on('click', function() {
					$(this).val('');
					add_mark('m2', '');
					if ($(this).val().length === 0) {
						$(this).autocomplete('search');
					}
				});


				$('#m2').on('autocompleteselect', function(event, ui) {

					var selectedValue = ui.item.value;

					$(this).addClass('filled');
					let _id = $(this).attr('id');
					add_mark(_id, selectedValue);
				});


			}
		});

	});



});