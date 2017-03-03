/***********************************************
* Omni Slide Menu script - � John Davenport Scheuer
* very freely adapted from Dynamic-FX Slide-In Menu (v 6.5) script- by maXimus
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full original source code
* as first mentioned in http://www.dynamicdrive.com/forums
* username:jscheuer1
***********************************************/

//One global variable to set, use true if you want the menus to reinit when the user changes text size (recommended):
resizereinit=true;

menu[1] = {
id:'menu1', //use unique quoted id (quoted) REQUIRED!!
fontsize:'90%', // express as percentage with the % sign
linkheight:22 ,  // linked horizontal cells height
hdingwidth:230 ,  // heading - non linked horizontal cells width
// Finished configuration. Use default values for all other settings for this particular menu (menu[1]) ///

menuItems:[ // REQUIRED!!
//[name, link, target, colspan, endrow?] - leave 'link' and 'target' blank to make a header
["About Me -  Hannes Widrig"], //create header
["Home","index.html",""],
["Technology","technology.html",""],
["Music","music.html",""],
["Where I See Myself In 2021","5years.html",""],
["Sports","sports.html",""]






]}; // REQUIRED!! do not edit or remove



make_menus();
