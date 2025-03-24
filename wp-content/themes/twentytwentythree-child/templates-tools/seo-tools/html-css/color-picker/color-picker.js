jQuery(function($) {
	
	FXTools.colorPicker = {

		properties : {
			flat: true,
			showInput: false, 
			showButtons: false,
			move: function(color) {
				FXTools.colorPicker.onChangeHandler(color);
			}
		},

		instance: function() {

			return $("#color_picker");

		},

		init: function() {

			FXTools.colorPicker.instance().spectrum(this.properties);

			FXTools.colorPicker.setColorCodes(FXTools.getMainColor());
			
			FXTools.colorPicker.setHSVOnChangeHandler();
			
			FXTools.colorPicker.setRGBOnChangeHandler();
			
			FXTools.colorPicker.setMainColorOnChangeHandler();

			FXTools.colorPicker.setSaveButtonClickHandler();

			FXTools.colorPicker.setShareLinkClickHandler();

		},

		onChangeHandler : function(color) {
			FXTools.colorPicker.setColorCodes(color.toHexString());
		},

		getColorCodesList : function() {
			return $('.color_codes ul');
		},

		getMainColorWrapper: function() {
			return $('.color_codes .main_color');
		},
		
		setMainColor : function(HexString) {
			
			var mainColor = FXTools.colorPicker.getMainColorWrapper();
					
			FXTools.colorPicker.instance().spectrum("set", HexString);
			
			mainColor.css('cssText', 'background:' +HexString+' !important;');
			mainColor.find('input').val(HexString);
			FXTools.setMainColor(HexString);

			FXTools.colorsShowCase.showColorsScheme(FXTools.getMainColor(), FXTools.getColorScheme());
			
		},

		setColorCodes: function(HexString) {
			
			var color = tinycolor(HexString);

			FXTools.colorPicker.setHSVCodes(color);

			FXTools.colorPicker.setRGBCodes(color);
			
			FXTools.colorPicker.setMainColor(HexString);

		},
		
		setRGBCodes: function(tinyColorObj) {
			
			var colorListInstance = FXTools.colorPicker.getColorCodesList();
			var RGBObject = tinyColorObj.toRgb();
			var RGBProperties = Object.keys(RGBObject);
			
			for(var i = 0; i < RGBProperties.length; i++) {
				var item = RGBProperties[i];
				var itemValue = parseFloat(RGBObject[item]);
				if(isNaN(itemValue)) {
					itemValue = 0;
				}
				colorListInstance.find('#'+item+'code .value').val(itemValue);
			}
			
		},
		
		setHSVCodes: function(tinyColorObj) {
			
			var colorListInstance = FXTools.colorPicker.getColorCodesList();			
			var HSVObject = tinyColorObj.toHsv();
			var HSVProperties = Object.keys(HSVObject);
				
			for(var i = 0; i < HSVProperties.length; i++) {
				var item = HSVProperties[i];
				var itemValue = parseFloat(HSVObject[item]);
				if(item != "h") {
					itemValue = itemValue * 100;
				}
				itemValue = Math.round(itemValue * 100) / 100;
				if(isNaN(itemValue)) {
					itemValue = 0;
				}
				colorListInstance.find('#'+item+'code .value').val(itemValue);
			}

		},
		
		setHSVOnChangeHandler : function() {
			var HSVkeys = ['h', 's', 'v'];
			var colorListInstance = FXTools.colorPicker.getColorCodesList();
			for(var i = 0; i < HSVkeys.length; i++) {
				var item = HSVkeys[i];
				colorListInstance.find('#'+item+'code .value').keyup(function() {
					var currentHSVObject = tinycolor(FXTools.colorPicker.getCurrentHSVCodes());
					FXTools.colorPicker.setRGBCodes(currentHSVObject);
					FXTools.colorPicker.setMainColor(currentHSVObject.toHexString());
				});
				colorListInstance.find('#'+item+'code .value').mask('ZZZ.ZZ', {
																	translation: {
																	  'Z': {
																		pattern: /[0-9]/, optional: true
																	  }
																	}
																  });
			}
		},
		
		setRGBOnChangeHandler : function() {
			var RGBkeys = ['r', 'g', 'b'];
			var colorListInstance = FXTools.colorPicker.getColorCodesList();
			for(var i = 0; i < RGBkeys.length; i++) {
				var item = RGBkeys[i];		
				colorListInstance.find('#'+item+'code .value').keyup(function() {
					var currentRGBObject = tinycolor(FXTools.colorPicker.getCurrentRGBCodes());
					FXTools.colorPicker.setHSVCodes(currentRGBObject);
					FXTools.colorPicker.setMainColor(currentRGBObject.toHexString());
				});
				colorListInstance.find('#'+item+'code .value').mask('ZZZ.ZZ', {
																	translation: {
																	  'Z': {
																		pattern: /[0-9]/, optional: true
																	  }
																	}
																  });
			}		
		},
		
		setMainColorOnChangeHandler : function() {
			
			var mainColor = FXTools.colorPicker.getMainColorWrapper();
			mainColor.find('input').keyup(function() {
				
				var HexString = $(this).val();
				
				if(HexString.substring(0, 1) != "#") {
					HexString = "#" + HexString.substring(0, 6);
				}
				
				var color = tinycolor(HexString);

				FXTools.colorPicker.setHSVCodes(color);

				FXTools.colorPicker.setRGBCodes(color);
				
				FXTools.colorPicker.setMainColor(HexString);
				
			});
			mainColor.find('input').mask('ZZZZZZZ', {translation: {
										'Z': {
										pattern: /^[#]|[a-fA-F0-9]/
										}
										}
										});
			
		},
		
		getCurrentHSVCodes : function() {
			var colorListInstance = FXTools.colorPicker.getColorCodesList();			
			var currentHSV = {h : 0, s : 0, v : 0};
			currentHSV.h = colorListInstance.find('#hcode .value').val() || "0";
			currentHSV.s = colorListInstance.find('#scode .value').val() || "0";
			currentHSV.v = colorListInstance.find('#vcode .value').val() || "0";	
			return currentHSV;
		},
		
		getCurrentRGBCodes : function() {
			var colorListInstance = FXTools.colorPicker.getColorCodesList();			
			var currentHSV = {r : 0, g : 0, b : 0};
			currentHSV.r = colorListInstance.find('#rcode .value').val() || "0";
			currentHSV.g = colorListInstance.find('#gcode .value').val() || "0";
			currentHSV.b = colorListInstance.find('#bcode .value').val() || "0";	
			return currentHSV;
		},

		setSaveButtonClickHandler: function() {

			$('.btn_save').click(FXTools.colorPicker.onSaveButtonClickHandler);

		},

		onSaveButtonClickHandler: function(e) {

			FXTools.colorsPalette.saveColor(FXTools.getMainColor());
			FXTools.urlManager.addColorParameter(FXTools.getMainColor());
			e.preventDefault();

		},

		setShareLinkClickHandler: function() {

			$('.share_link').click(FXTools.colorPicker.shareLinkClickHandler);

		},

		shareLinkClickHandler: function(e) {

			window.location = '/'+jQuery('.main_color').find('input').val().replace("#", "").toUpperCase();
			e.preventDefault();
			
		}

	}

	FXTools.colorPicker.init();


});