var FXTools = {

	mainColor : jQuery('.main_color input').val(),

	defaultMainColor : '#1F85DE',

	colorScheme: null,

	defaultColorScheme : 'complementary',

	setColorScheme : function(colorScheme) {
		FXTools.colorScheme = colorScheme;
	},

	getColorScheme: function() {
		if(FXTools.colorScheme === null) {
			FXTools.setColorScheme(FXTools.defaultColorScheme);
		}
		return FXTools.colorScheme;
	},

	setMainColor: function(mainColor) {
		if(mainColor.substring(0, 1) != "#") {

			mainColor = "#" + mainColor;

		}
		
		FXTools.mainColor = mainColor;
	},

	getMainColor: function() {
		if(FXTools.mainColor === null || FXTools.mainColor === "") {

			FXTools.setMainColor(FXTools.defaultMainColor);

		}

		if(FXTools.mainColor.substring(0, 1) != "#") {

			FXTools.mainColor = "#" + FXTools.mainColor;

		}
		return FXTools.mainColor;
	}
};