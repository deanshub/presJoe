var system = require('system');

if (system.args.length !== 3) {
    console.log("Usage: phantomjs screen_capture.js PRESENTATION_NAME URL_TO_CAPTURE");
    phantom.exit(1);
}
var page = require('webpage').create();
page.open(system.args[2], function () {
	console.log("C:/Users/dean/Documents/GitHub/presJoe/presJoe/public/assets/"+system.args[1]+"/"+system.args[1]+".png");
    page.render("C:/Users/dean/Documents/GitHub/presJoe/presJoe/public/assets/"+system.args[1]+"/"+system.args[1]+".png");
    phantom.exit();
});