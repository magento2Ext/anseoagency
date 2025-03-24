jQuery(function($) {

	FXTools.colorsShowCase = {

		init: function() {

			//Show colors according to the color scheme selected by default (complementary)
			FXTools.colorsShowCase.showColorsScheme(FXTools.getMainColor(), FXTools.getColorScheme());

		},

		getInstance: function() {

			return $('#colors_showcase ul');

		},

		showColorsScheme: function(HexString, scheme) {

			var colorsArray = [];

			var colorsGenerated = null;

			var colorUtilObj = new DHTMLSuite.colorUtil();

			if(scheme == "complementary") {

				colorsGenerated = colorUtilObj.getContrastColorByRgb(HexString);

			} else if(scheme == "triade") {

				colorsGenerated = colorUtilObj.getTriadeColorsByRgb(HexString);

			} else if(scheme == "tetrade") {

				colorsGenerated = colorUtilObj.getTetradeColorsByRgb(HexString);

			} else if(scheme == "analogic") {

				colorsGenerated = colorUtilObj.getAnalogicColors(HexString, 30);

			} else {

				colorsGenerated = [];
			}

			if(colorsGenerated.length) {

				colorsArray.push(FXTools.getMainColor());

			}

			if(typeof colorsGenerated == 'string') {

				colorsArray.push(colorsGenerated);

			} else {

				colorsArray = colorsArray.concat(colorsGenerated);

			}

			FXTools.colorsShowCase.removeColors();

			for(var i = 0; i < colorsArray.length; i++) {

				var item = colorsArray[i];

				FXTools.colorsShowCase.addColor(item);

			}

			FXTools.colorsShowCase.setColorsClickHandler();

		},

		removeColors: function() {

			FXTools.colorsShowCase.getInstance().empty();

		},

		addColor: function(HexString) {

			if(HexString.substring(0, 1) != "#") {

				HexString = "#" + HexString;

			}

			var liItem = jQuery('<li></li>');
			liItem.html(HexString);
			liItem.css('cssText', 'background:' +HexString+' !important;');

			FXTools.colorsShowCase.getInstance().append(liItem);

		},

		setColorsClickHandler : function() {

			FXTools.colorsShowCase.getInstance().find('li').click(FXTools.colorsShowCase.onColorClickHandler);

		},

		onColorClickHandler : function(e) {

			var currentColor = $(this).html();
			FXTools.setMainColor(currentColor);
			FXTools.colorsShowCase.showColorsScheme(FXTools.getMainColor(), FXTools.getColorScheme());
			FXTools.colorPicker.setColorCodes(currentColor);
			FXTools.urlManager.addColorParameter(FXTools.getMainColor());

		}


	}

	FXTools.colorsShowCase.init();

});